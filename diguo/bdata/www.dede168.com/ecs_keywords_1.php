<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_keywords`;");
E_C("CREATE TABLE `ecs_keywords` (
  `date` date NOT NULL DEFAULT '0000-00-00',
  `searchengine` varchar(20) NOT NULL DEFAULT '',
  `keyword` varchar(90) NOT NULL DEFAULT '',
  `count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`date`,`searchengine`,`keyword`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_keywords` values('2015-11-20','ecshop','金毛','1');");
E_D("replace into `ecs_keywords` values('2015-11-20','ecshop','边境','2');");
E_D("replace into `ecs_keywords` values('2015-11-20','ecshop','100g','1');");
E_D("replace into `ecs_keywords` values('2015-11-20','ecshop','800g','1');");
E_D("replace into `ecs_keywords` values('2015-11-20','ecshop','小狗','1');");
E_D("replace into `ecs_keywords` values('2015-11-28','ecshop','专用粮','1');");
E_D("replace into `ecs_keywords` values('2015-12-01','ecshop','遛狗绳','1');");
E_D("replace into `ecs_keywords` values('2015-12-01','ecshop','宠物狗粮','1');");
E_D("replace into `ecs_keywords` values('2015-12-02','ecshop','果','1');");
E_D("replace into `ecs_keywords` values('2015-12-03','ecshop','果','4');");
E_D("replace into `ecs_keywords` values('2016-03-11','ecshop','遛狗绳','1');");

require("../../inc/footer.php");
?>