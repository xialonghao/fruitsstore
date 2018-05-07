<?php
define('IN_ECTOUCH', true);

require(dirname(__FILE__) . '/include/init.php');

/* 载入语言文件 */
require_once(ROOT_PATH . 'lang/' .$_CFG['lang']. '/user.php');

$user_id = $_SESSION['user_id'];
$action  = isset($_REQUEST['act']) ? trim($_REQUEST['act']) : 'default';

$wxid = !empty($_GET['wxid']) ? $_GET['wxid'] : '';

if(empty($wxid))
{
    $wxid = $_SESSION['wxid'];
}
else
{
    $_SESSION['wxid'] = $wxid;
}
if(empty($_SESSION['wxid']))
{
    exit('非法入口 ');
}

$affiliate = unserialize($GLOBALS['_CFG']['affiliate']);
$smarty->assign('affiliate', $affiliate);
$back_act='';
$back_act_ret='';


// 不需要登录的操作或自己验证是否登录（如ajax处理）的act
$not_login_arr =
array('act_login','act_reset_weixin_password','register','act_register','act_edit_password','get_password','send_pwd_email','password', 'signin', 'add_tag', 'collect', 'return_to_cart', 'logout', 'email_list', 'validate_email', 'send_hash_mail', 'order_query', 'is_registered', 'check_email','clear_history','qpassword_name', 'get_passwd_question', 'check_answer');

/* 显示页面的action列表 */
$ui_arr = array('register', 'login', 'reset_weixin_password', 'profile', 'order_list', 'order_detail', 'address_list', 'collection_list',
'message_list', 'tag_list', 'get_password', 'reset_password', 'booking_list', 'add_booking', 'account_raply',
'account_deposit', 'account_log', 'account_detail', 'act_account', 'pay', 'default', 'bonus', 'group_buy', 'group_buy_detail', 'affiliate', 'comment_list','validate_email','track_packages', 'transform_points','qpassword_name', 'get_passwd_question', 'check_answer');

/* 未登录处理 */
    if (!in_array($action, $not_login_arr))
    {
        if (in_array($action, $ui_arr))
        {
            if (!empty($_SERVER['QUERY_STRING']))
            {
                $back_act = 'user_wxch.php?' . strip_tags($_SERVER['QUERY_STRING']);
                $back_act_ret = 'user_wxch.php?' . strip_tags($_SERVER['QUERY_STRING']);
            }
            //$action = 'login';
        }
        else
        {
            //未登录提交数据。非正常途径提交数据！
            die($_LANG['require_login']);
        }
    }

/* 如果是显示页面，对页面进行相应赋值 */
if (in_array($action, $ui_arr))
{
    assign_template();
    $position = assign_ur_here(0, $_LANG['user_center']);
    $smarty->assign('page_title', $position['title']); // 页面标题
    $smarty->assign('ur_here',    $position['ur_here']);
    $sql = "SELECT value FROM " . $GLOBALS['ecs']->table('shop_config') . " WHERE id = 419";
    $row = $db->getRow($sql);
    $car_off = $row['value'];
    $smarty->assign('car_off',       $car_off);
    /* 是否显示积分兑换 */
    if (!empty($_CFG['points_rule']) && unserialize($_CFG['points_rule']))
    {
        $smarty->assign('show_transform_points',     1);
    }
    $smarty->assign('helps',      get_shop_help());        // 网店帮助
    $smarty->assign('data_dir',   DATA_DIR);   // 数据目录
    $smarty->assign('action',     $action);
    $smarty->assign('lang',       $_LANG);
}

//用户中心欢迎页
/* 用户登录界面 */

if ($action == 'login')
{
    $smarty->assign('back_act', $back_act);
    $smarty->display('user_wxch.dwt');
}

/* 处理会员的登录 */
elseif ($action == 'act_login')
{
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';
    $back_act = isset($_POST['back_act']) ? trim($_POST['back_act']) : '';
	
	//用户名是邮箱格式 by 模板之家
    if(is_email($username))
    {
        $sql ="select user_name from ".$GLOBALS['ecs']->table('users')." where email='".$username."'";
        $username_try = $db->getOne($sql);
        $username = $username_try ? $username_try:$username;
    }

    //用户名是手机格式 by 模板之家
    if(is_mobile($username))
    {
        $sql ="select user_name from ".$GLOBALS['ecs']->table('users')." where mobile_phone='".$username."'";
        $username_try = $db->getOne($sql);
        $username = $username_try ? $username_try:$username;
    }

	$ecmember = $db->getOne("SELECT `uname` FROM " . $GLOBALS['ecs']->table('weixin_user')." WHERE `wxid`= '$wxid' and `uname` = '$username'");
	if($ecmember){
		show_message('已经绑定了'.$username.'，不能再次绑定', '重新绑定', $back_act, 'error');
	}else{

		if ($user->login($username, $password, isset($_POST['remember'])))
		{
			update_user_info();
			recalculate_price();
			$ucdata = isset($user->ucdata)? $user->ucdata : '';
			$uname = $db->getOne("SELECT `uname` FROM " . $GLOBALS['ecs']->table('weixin_user')." WHERE `uname` = '$username' ");

			if(empty($uname))
			{
				$db->query("UPDATE " . $GLOBALS['ecs']->table('weixin_user')." SET `setp`= 3,`uname`='$username' WHERE `wxid`= '$wxid';");
			}
			else
			{
				$db->query("UPDATE " . $GLOBALS['ecs']->table('weixin_user')." SET `uname`='' WHERE `uname`='$username';");
				$db->query("UPDATE " . $GLOBALS['ecs']->table('weixin_user')." SET `setp`= 3,`uname`='$username' WHERE `wxid`= '$wxid';");
			}
			$db->query("DELETE FROM ".$GLOBALS['ecs']->table('users')." WHERE `wxid`='$wxid'");//绑定前删除原来绑定的会员
			$db->query("UPDATE ".$GLOBALS['ecs']->table('users')." SET `wxch_bd`='ok',`wxid`='$wxid' WHERE `user_name`='$username'");
			//模板之家修复，重新绑定账号后，上下级关系不变。
			$affiliate = $db -> getOne("SELECT `affiliate` FROM  " . $GLOBALS['ecs']->table('weixin_user')." WHERE `wxid` = '$wxid'");
			$db -> query("UPDATE ".$GLOBALS['ecs']->table('users')." SET `parent_id`='$affiliate' WHERE `wxid`= '$wxid';");	
		
		
		
		//O菜龙工作室（www.ocailong.com）新增
		$user_id = $db -> getOne("SELECT `user_id` FROM " . $GLOBALS['ecs']->table('users')." WHERE `wxid` = '$wxid'");	
		$fromUsername = $db -> getOne("SELECT `wxid` FROM " . $GLOBALS['ecs']->table('users')." WHERE `user_id` = '$user_id'");
		if(record_point("bd",$fromUsername)){
				$keyword="bd";
				$qd_jf = $db -> getOne("SELECT `point_value` FROM " . $GLOBALS['ecs']->table('weixin_point')." WHERE `point_name` = '$keyword'");
				$info="绑定会员加积分".$qd_jf;
				log_account_change($user_id, 0, 0, 0, $qd_jf, $info);
		}

			
			
			show_message('绑定成功' . $ucdata , array($_LANG['back_up_page'], $_LANG['profile_lnk']), array($back_act,'user.php'), 'info');
		}
		else
		{
			$db->query("UPDATE " . $GLOBALS['ecs']->table('weixin_user')." SET `setp`= 0,`uname`='' WHERE `wxid`= '$wxid';");
			$_SESSION['login_fail'] ++ ;
			show_message($_LANG['login_failure'], '重新绑定', $back_act, 'error');
		}
    }
}

elseif ($action == 'reset_weixin_password')
{
    $smarty->assign('back_act_ret', $back_act_ret);
    $smarty->display('user_wxch.dwt');
}

/* 处理会员的登录 */
elseif ($action == 'act_reset_weixin_password')
{
    $ucdata = isset($user->ucdata)? $user->ucdata : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';
    $back_act_ret = isset($_POST['back_act_ret']) ? trim($_POST['back_act_ret']) : '';
	
    if (!empty($password))
    {
		$password=md5($password);
        $db->query("UPDATE " . $GLOBALS['ecs']->table('users')." SET `password`= '$password',`ec_salt`=null WHERE `wxid`= '$wxid';");
        show_message('重置密码成功', '返回首页', 'index.php', 'info');
    }
    else
    {
        show_message('请输入密码', '返回上一页', $back_act_ret, 'error');
    }
}

//已经登录
elseif($action == 'default')
{
    ecs_header("Location: user.php\n");
}
//记录分享积分记录  by  xkfla2015
function  record_point($keyword,$fromUsername){
		
		$db=$GLOBALS['db'];
		$sql = "SELECT * FROM " . $GLOBALS['ecs']->table('weixin_point_record')." WHERE `point_name` = '$keyword' AND `wxid` = '$fromUsername'";
		$record = $db -> getRow($sql);
		$num = $db -> getOne("SELECT `point_num` FROM " . $GLOBALS['ecs']->table('weixin_point')." WHERE `point_name` = '$keyword'");
		$lasttime = time();
		if (empty($record)) {
			$dateline = time();
			$insert_sql = "INSERT INTO " . $GLOBALS['ecs']->table('weixin_point_record')." (`wxid`, `point_name`, `num`, `lasttime`, `datelinie`) VALUES
('$fromUsername', '$keyword' , 1, $lasttime, $dateline);";
			$potin_name = $db -> getOne("SELECT `point_name` FROM " . $GLOBALS['ecs']->table('weixin_point')." WHERE `point_name` = '$keyword'");
			if (!empty($potin_name)) {
				$db -> query($insert_sql);
				return true;
			}
			
		} else {

			$time = time();
			$lasttime_sql = "SELECT `lasttime` FROM " . $GLOBALS['ecs']->table('weixin_point_record')." WHERE `point_name` = '$keyword' AND `wxid` = '$fromUsername'";
			$db_lasttime = $db -> getOne($lasttime_sql);
			if (($time - $db_lasttime) > (60 * 60 * 24)) {
				$update_sql = "UPDATE " . $GLOBALS['ecs']->table('weixin_point_record')." SET `num` = 0,`lasttime` = '$lasttime' WHERE `wxid` ='$fromUsername';";
				$db -> query($update_sql);
			} 
			$record_num = $db -> getOne("SELECT `num` FROM " . $GLOBALS['ecs']->table('weixin_point_record')." WHERE `point_name` = '$keyword' AND `wxid` = '$fromUsername'");
			if ($record_num < $num) {
				$update_sql = "UPDATE " . $GLOBALS['ecs']->table('weixin_point_record')." SET `num` = `num`+1,`lasttime` = '$lasttime' WHERE `point_name` = '$keyword' AND `wxid` ='$fromUsername';";
				$db -> query($update_sql);
				return true;
			} else {
				return false;
			} 
		}
}
?>