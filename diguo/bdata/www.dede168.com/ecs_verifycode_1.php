<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_verifycode`;");
E_C("CREATE TABLE `ecs_verifycode` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `mobile` char(12) NOT NULL,
  `getip` char(15) NOT NULL,
  `verifycode` char(6) NOT NULL,
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  `reguid` mediumint(8) unsigned DEFAULT '0',
  `regdateline` int(10) unsigned DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_verifycode` values('14','18113131307','192.168.1.88','584771','1448229828','5','1448229970','2');");
E_D("replace into `ecs_verifycode` values('15','18113131307','192.168.1.88','123456','1448229970','5','0','7');");
E_D("replace into `ecs_verifycode` values('16','18113131307','192.168.1.88','234567','1448230011','5','0','6');");

require("../../inc/footer.php");
?>