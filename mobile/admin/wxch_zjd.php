<?php
define('IN_ECTOUCH', true);
require(dirname(__FILE__) . '/includes/init.php');
require('wxch_lg.php');
$act = trim($_REQUEST['act']);
$wxch_lang['ur_here'] = '砸金蛋';
if($act == 'view') 
{
	$wxid = $_GET['wxid'];
	$id = $_GET['id'];
	if(!empty($wxid)) 
	{
		$sql = "SELECT ". $GLOBALS['ecs']->table('weixin_prize_users') .".*,". $GLOBALS['ecs']->table('weixin_prize_register') .".phone,". $GLOBALS['ecs']->table('weixin_prize_register') .".name FROM ". $GLOBALS['ecs']->table('weixin_prize_users') ."
       LEFT JOIN ". $GLOBALS['ecs']->table('weixin_prize_register') ." ON ". $GLOBALS['ecs']->table('weixin_prize_users') .".wxid = ". $GLOBALS['ecs']->table('weixin_prize_register') .".wxid
       WHERE ". $GLOBALS['ecs']->table('weixin_prize_register') .".`wxid` = '$wxid' AND ". $GLOBALS['ecs']->table('weixin_prize_users') .".`id` = '$id'
       ";
		$res = $db->getRow($sql);
		$res['dateline'] = date("Y-m-d H:i:s",$res['dateline']);
	}
	$smarty->assign('data', $res);
	$smarty->assign('wxch_lang',$wxch_lang);
	$smarty->display('wxch_zjd_info.html');
}
?>