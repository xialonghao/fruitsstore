<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_prize_count`;");
E_C("CREATE TABLE `ecs_weixin_prize_count` (
  `cid` int(7) NOT NULL AUTO_INCREMENT,
  `pid` int(5) NOT NULL,
  `wxid` char(28) NOT NULL,
  `num` int(5) NOT NULL,
  `count` int(5) unsigned NOT NULL,
  `lasttime` int(10) unsigned NOT NULL,
  `dateline` int(10) unsigned NOT NULL,
  PRIMARY KEY (`cid`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_prize_count` values('1','2','oG9l1t6rvjOCmUHiXQGvvVwpviWM','1','1','1448438970','1448438970');");

require("../../inc/footer.php");
?>