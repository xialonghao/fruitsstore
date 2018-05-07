<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_nav`;");
E_C("CREATE TABLE `ecs_nav` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `ctype` varchar(10) DEFAULT NULL,
  `cid` smallint(5) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `ifshow` tinyint(1) NOT NULL,
  `vieworder` tinyint(1) NOT NULL,
  `opennew` tinyint(1) NOT NULL,
  `url` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `ifshow` (`ifshow`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_nav` values('1',NULL,NULL,'团购商品','1','3','0','group_buy.php','middle');");
E_D("replace into `ecs_nav` values('2',NULL,NULL,'积分兑换','1','4','0','exchange.php','middle');");
E_D("replace into `ecs_nav` values('3','c','2','生鲜食品','1','1','0','category.php?id=2','middle');");
E_D("replace into `ecs_nav` values('4','c','1','酒水饮料','1','2','0','category.php?id=1','middle');");
E_D("replace into `ecs_nav` values('5',NULL,NULL,'免责条款','1','1','0','article.php?id=1','bottom');");
E_D("replace into `ecs_nav` values('6',NULL,NULL,'隐私保护','1','2','0','article.php?id=2','bottom');");
E_D("replace into `ecs_nav` values('7',NULL,NULL,'咨询热点','1','3','0','article.php?id=3','bottom');");
E_D("replace into `ecs_nav` values('8',NULL,NULL,'联系我们','1','4','0','article.php?id=4','bottom');");
E_D("replace into `ecs_nav` values('9',NULL,NULL,'公司简介','1','5','0','article.php?id=5','bottom');");
E_D("replace into `ecs_nav` values('10',NULL,NULL,'批发方案','1','6','0','wholesale.php','bottom');");
E_D("replace into `ecs_nav` values('11',NULL,NULL,'配送方式','1','7','0','myship.php','bottom');");

require("../../inc/footer.php");
?>