<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_keywords1`;");
E_C("CREATE TABLE `ecs_weixin_keywords1` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `keyword` varchar(100) NOT NULL,
  `type` tinyint(1) unsigned NOT NULL,
  `contents` text NOT NULL,
  `count` int(10) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  `is_start` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_keywords1` values('14','关注回复图文','关注回复图文','4','','11','1','0');");
E_D("replace into `ecs_weixin_keywords1` values('27','关注回复文本','关注回复文本','3','欢迎关注模板之家微信公众演示平台！平台购买旺旺：xkfla。','1164','1','1');");

require("../../inc/footer.php");
?>