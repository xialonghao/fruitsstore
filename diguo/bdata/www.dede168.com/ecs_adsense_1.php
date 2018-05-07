<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_adsense`;");
E_C("CREATE TABLE `ecs_adsense` (
  `from_ad` smallint(5) NOT NULL DEFAULT '0',
  `referer` varchar(255) NOT NULL DEFAULT '',
  `clicks` int(10) unsigned NOT NULL DEFAULT '0',
  KEY `from_ad` (`from_ad`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_adsense` values('5','本站','1');");
E_D("replace into `ecs_adsense` values('6','本站','2');");
E_D("replace into `ecs_adsense` values('9','本站','1');");
E_D("replace into `ecs_adsense` values('8','本站','1');");
E_D("replace into `ecs_adsense` values('16','本站','1');");
E_D("replace into `ecs_adsense` values('7','wap站','1');");
E_D("replace into `ecs_adsense` values('5','wap站','4');");
E_D("replace into `ecs_adsense` values('11','wap站','1');");
E_D("replace into `ecs_adsense` values('8','pc站','3');");
E_D("replace into `ecs_adsense` values('9','pc站','1');");
E_D("replace into `ecs_adsense` values('3','pc站','2');");
E_D("replace into `ecs_adsense` values('16','wap站','2');");
E_D("replace into `ecs_adsense` values('1','pc站','2');");
E_D("replace into `ecs_adsense` values('2','pc站','1');");
E_D("replace into `ecs_adsense` values('7','pc站','1');");
E_D("replace into `ecs_adsense` values('9','wap站','2');");
E_D("replace into `ecs_adsense` values('15','wap站','3');");
E_D("replace into `ecs_adsense` values('14','wap站','2');");
E_D("replace into `ecs_adsense` values('10','wap站','1');");
E_D("replace into `ecs_adsense` values('8','wap站','1');");
E_D("replace into `ecs_adsense` values('10','pc站','1');");
E_D("replace into `ecs_adsense` values('12','wap站','1');");

require("../../inc/footer.php");
?>