<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_keywords`;");
E_C("CREATE TABLE `ecs_weixin_keywords` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `keyword` varchar(100) NOT NULL,
  `type` tinyint(1) unsigned NOT NULL,
  `contents` text NOT NULL,
  `count` int(10) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_keywords` values('1','正版申明','o菜龙工作室','1','支持正版，拒绝倒卖。倒卖者一律取消售后和更新资格。旺旺：O菜龙 店名：O菜龙工作室 <a href=\"http://www.ocailong.com\">http://www.ocailong.com</a> 店铺地址：淘宝搜索 店铺&nbsp;&nbsp; O菜龙工作室','352','1');");
E_D("replace into `ecs_weixin_keywords` values('2','xkfla1748','xkfla1748','1','xkfla1748','0','1');");
E_D("replace into `ecs_weixin_keywords` values('4','1111','22222','1','333333333333333333333333333','1','1');");

require("../../inc/footer.php");
?>