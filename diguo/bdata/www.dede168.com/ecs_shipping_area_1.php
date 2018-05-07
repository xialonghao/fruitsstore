<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_shipping_area`;");
E_C("CREATE TABLE `ecs_shipping_area` (
  `shipping_area_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `shipping_area_name` varchar(150) NOT NULL DEFAULT '',
  `shipping_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `configure` text NOT NULL,
  PRIMARY KEY (`shipping_area_id`),
  KEY `shipping_id` (`shipping_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_shipping_area` values('1','中国','1','a:3:{i:0;a:2:{s:4:\"name\";s:10:\"free_money\";s:5:\"value\";s:0:\"\";}i:1;a:2:{s:4:\"name\";s:16:\"fee_compute_mode\";s:5:\"value\";s:0:\"\";}i:2;a:2:{s:4:\"name\";s:7:\"pay_fee\";s:5:\"value\";s:0:\"\";}}');");
E_D("replace into `ecs_shipping_area` values('2','中国','2','a:2:{i:0;a:2:{s:4:\"name\";s:10:\"free_money\";s:5:\"value\";s:0:\"\";}i:1;a:2:{s:4:\"name\";s:16:\"fee_compute_mode\";s:5:\"value\";s:0:\"\";}}');");
E_D("replace into `ecs_shipping_area` values('3','中国','3','a:5:{i:0;a:2:{s:4:\"name\";s:8:\"item_fee\";s:5:\"value\";s:2:\"20\";}i:1;a:2:{s:4:\"name\";s:8:\"base_fee\";s:5:\"value\";s:2:\"15\";}i:2;a:2:{s:4:\"name\";s:8:\"step_fee\";s:5:\"value\";s:1:\"2\";}i:3;a:2:{s:4:\"name\";s:10:\"free_money\";s:5:\"value\";s:0:\"\";}i:4;a:2:{s:4:\"name\";s:16:\"fee_compute_mode\";s:5:\"value\";s:9:\"by_weight\";}}');");
E_D("replace into `ecs_shipping_area` values('4','中国','4','a:6:{i:0;a:2:{s:4:\"name\";s:8:\"item_fee\";s:5:\"value\";s:2:\"10\";}i:1;a:2:{s:4:\"name\";s:8:\"base_fee\";s:5:\"value\";s:1:\"5\";}i:2;a:2:{s:4:\"name\";s:8:\"step_fee\";s:5:\"value\";s:1:\"5\";}i:3;a:2:{s:4:\"name\";s:10:\"free_money\";s:5:\"value\";s:0:\"\";}i:4;a:2:{s:4:\"name\";s:16:\"fee_compute_mode\";s:5:\"value\";s:9:\"by_weight\";}i:5;a:2:{s:4:\"name\";s:7:\"pay_fee\";s:5:\"value\";s:0:\"\";}}');");

require("../../inc/footer.php");
?>