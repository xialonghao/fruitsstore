<?php
/**
 * ECSHOP 会员中心
 * ============================================================================
 * * 版权所有 2005-2012 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: user.php 17217 2011-01-19 06:29:08Z liubo $
*/
define('IN_ECTOUCH', true);
require(dirname(__FILE__) . '/include/init.php');
/* 载入语言文件 */
require_once(ROOT_PATH . 'lang/' .$_CFG['lang']. '/user.php');
$user_id = $_SESSION['user_id'];
$action  = isset($_REQUEST['act']) ? trim($_REQUEST['act']) : 'default';
$affiliate = unserialize($GLOBALS['_CFG']['affiliate']);
$smarty->assign('affiliate', $affiliate);


include_once(ROOT_PATH . 'include/website/cls_http.php');
$code = $_REQUEST['code'];

if(empty($code))
{
  show_message('scope参数错误或没有scope权限' , '首页',$ecs->url() , 'error');
}
if(file_exists(ROOT_PATH . 'include/website/config/weixin_config.php'))
{
  include_once(ROOT_PATH . 'include/website/config/weixin_config.php');
}
else
{
  show_message('插件没有安装或者注册' , '首页',$ecs->url() , 'error');
}

$url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=".WX_AKEY."&secret=".WX_SKEY."&code=$code&grant_type=authorization_code";
$http = new cls_http();
$result = $http->httpRequest($url, 'GET');
$token = json_decode($result , true);


$url = "https://api.weixin.qq.com/sns/userinfo?access_token=".$token['access_token']."&openid=".$token['openid']."";

$info = $http->httpRequest($url, 'GET');
$info = json_decode($info , true);
if (!$info) 
{
	show_message($c->get_error(), '首页', $ecs->url(), 'error', false);
}
$type = 'weixin';
$info['user_id'] = $info['openid'];
$info['name'] = $info['nickname'];


if(empty($info['name']))
{
  show_message('scope参数错误或没有scope权限' , '首页',$ecs->url() , 'error');
}

if (!$info['user_id']) {
	  show_message($c->get_error(), '首页', $ecs->url(), 'error', false);
  }
  $info_user_id = $info['user_id']; //  加个标识！！！防止 其他的标识 一样  // 以后的ID 标识 将以这种形式 辨认
  $info['name'] = str_replace("'", "", $info['name']); // 过滤掉 逗号 不然出错  很难处理   不想去  搞什么编码的了
  if (!$info['user_id'])
	  show_message($c->get_error(), '首页', $ecs->url(), 'error', false);
  $sql = "SELECT user_name,password,wxid FROM " . $ecs->table('users') . " WHERE wxid = '" . $info_user_id . "'";
  $count = $db->getRow($sql);
  if (!$count) {   // 没有当前数据
	  if ($user->check_user($info['name'])) {  // 重名处理
		  $info['name'] = $info['name'] . '_' . $type . (rand(10000, 99999));
	  }
	  $user_pass = $user->compile_password(array('password' => $info['user_id']));
	  $sql = 'INSERT INTO ' . $ecs->table('users') . '(user_name , password, wxid , sex , reg_time , user_rank , is_validated) VALUES ' .
			  "('$info[name]' , '$user_pass' , '$info_user_id' , '$info[sex]' , '" . gmtime() . "' , '5' , '1')";
	  $db->query($sql);
  } else {
	  $sql = '';
	  if ($count['wxid'] == $info['user_id']) {
		  $sql = 'UPDATE ' . $ecs->table('users') . " SET user_rank = '5' WHERE wxid = '$count[wxid]'";
		  $db->query($sql);
		  $info['name'] = $count['user_name'];
	  }
  }
  $user->set_session($info['name']);
  $user->set_cookie($info['name']);
  update_user_info();
  recalculate_price();
  
 
  if(isset($_SESSION['back_act']) && !empty($_SESSION['back_act']))
  {
	  ecs_header("Location:user.php\n");
      exit;
  }
  
  ecs_header("Location:".$ecs->url()."\n");
  exit;
?>