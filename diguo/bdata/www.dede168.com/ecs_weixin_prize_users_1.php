<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_prize_users`;");
E_C("CREATE TABLE `ecs_weixin_prize_users` (
  `id` int(7) unsigned NOT NULL AUTO_INCREMENT,
  `wxid` char(28) NOT NULL DEFAULT '',
  `fun` varchar(10) NOT NULL,
  `nickname` varchar(200) NOT NULL,
  `prize_id` int(5) DEFAULT NULL,
  `prize_name` varchar(64) DEFAULT NULL,
  `prize_sn` varchar(35) NOT NULL,
  `register` tinyint(1) unsigned NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `yn` varchar(3) NOT NULL,
  `dateline` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `prize_id` (`prize_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_prize_users` values('1','oG9l1t6rvjOCmUHiXQGvvVwpviWM','dzp','徐凯','2','ipad','268857341d3dc60babe8219b55465c3c','0','1','no','1448438970');");

require("../../inc/footer.php");
?>