<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_group_goods`;");
E_C("CREATE TABLE `ecs_group_goods` (
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `admin_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `group_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`parent_id`,`goods_id`,`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_group_goods` values('1','10','88.00','1','0');");
E_D("replace into `ecs_group_goods` values('1','11','26.00','1','0');");
E_D("replace into `ecs_group_goods` values('1','47','130.00','1','0');");
E_D("replace into `ecs_group_goods` values('2','4','75.00','1','0');");
E_D("replace into `ecs_group_goods` values('2','5','120.00','1','0');");
E_D("replace into `ecs_group_goods` values('2','6','199.00','1','0');");
E_D("replace into `ecs_group_goods` values('49','1','193.00','1','0');");
E_D("replace into `ecs_group_goods` values('49','2','88.00','1','0');");
E_D("replace into `ecs_group_goods` values('49','6','199.00','1','0');");
E_D("replace into `ecs_group_goods` values('49','10','88.00','1','0');");
E_D("replace into `ecs_group_goods` values('49','19','68.00','1','0');");

require("../../inc/footer.php");
?>