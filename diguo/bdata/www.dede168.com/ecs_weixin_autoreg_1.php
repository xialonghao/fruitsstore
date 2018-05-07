<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_autoreg`;");
E_C("CREATE TABLE `ecs_weixin_autoreg` (
  `autoreg_id` tinyint(1) NOT NULL,
  `autoreg_rand` tinyint(1) unsigned NOT NULL,
  `autoreg_name` varchar(200) NOT NULL,
  `autoreg_content` text NOT NULL,
  `state` tinyint(1) NOT NULL,
  `rank_id` tinyint(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`autoreg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_autoreg` values('1','2','wshop','N;','1','1');");

require("../../inc/footer.php");
?>