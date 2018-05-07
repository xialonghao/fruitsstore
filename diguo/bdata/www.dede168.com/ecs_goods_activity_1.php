<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_activity`;");
E_C("CREATE TABLE `ecs_goods_activity` (
  `act_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `act_name` varchar(255) NOT NULL,
  `act_desc` text NOT NULL,
  `act_type` tinyint(3) unsigned NOT NULL,
  `goods_id` mediumint(8) unsigned NOT NULL,
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_name` varchar(255) NOT NULL,
  `start_time` int(10) unsigned NOT NULL,
  `end_time` int(10) unsigned NOT NULL,
  `is_finished` tinyint(3) unsigned NOT NULL,
  `ext_info` text NOT NULL,
  PRIMARY KEY (`act_id`),
  KEY `act_name` (`act_name`,`act_type`,`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_activity` values('1','金毛边牧泰迪狗训练奖励零食磨牙','','1','12','0','金毛边牧泰迪狗训练奖励零食磨牙','1447920000','1637654400','0','a:4:{s:12:\"price_ladder\";a:2:{i:0;a:2:{s:6:\"amount\";i:10;s:5:\"price\";d:138;}i:1;a:2:{s:6:\"amount\";i:20;s:5:\"price\";d:128;}}s:15:\"restrict_amount\";i:100;s:13:\"gift_integral\";i:100;s:7:\"deposit\";d:0;}');");
E_D("replace into `ecs_goods_activity` values('2','边境狗粮专用粮10kg','','1','10','0','边境狗粮专用粮10kg','1447920000','1669190400','0','a:4:{s:12:\"price_ladder\";a:2:{i:0;a:2:{s:6:\"amount\";i:10;s:5:\"price\";d:78;}i:1;a:2:{s:6:\"amount\";i:20;s:5:\"price\";d:70;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:80;s:7:\"deposit\";d:0;}');");
E_D("replace into `ecs_goods_activity` values('3','耐威克柔软鸡肉条100g','','1','19','0','耐威克柔软鸡肉条100g','1447920000','1700726400','0','a:4:{s:12:\"price_ladder\";a:2:{i:0;a:2:{s:6:\"amount\";i:10;s:5:\"price\";d:60;}i:1;a:2:{s:6:\"amount\";i:20;s:5:\"price\";d:55;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:60;s:7:\"deposit\";d:0;}');");
E_D("replace into `ecs_goods_activity` values('4','爱犬生活水晶鸡肉切丝800g','','1','22','0','爱犬生活水晶鸡肉切丝800g','1447920000','1669190400','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:10;s:5:\"price\";d:49;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:0;}');");
E_D("replace into `ecs_goods_activity` values('5','豪华可拆洗狗窝泰迪小狗狗用品狗房子','','1','43','0','豪华可拆洗狗窝泰迪小狗狗用品狗房子','1447920000','1669190400','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:10;s:5:\"price\";d:88;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:0;}');");
E_D("replace into `ecs_goods_activity` values('6','雷米高澳丽得成犬粮20kg','','1','1','0','雷米高澳丽得成犬粮20kg','1448352000','1669622400','0','a:4:{s:12:\"price_ladder\";a:2:{i:0;a:2:{s:6:\"amount\";i:10;s:5:\"price\";d:18;}i:1;a:2:{s:6:\"amount\";i:20;s:5:\"price\";d:15;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:200;s:7:\"deposit\";d:0;}');");
E_D("replace into `ecs_goods_activity` values('7','贝贝宠物零食A级鸡肉整枝800g鸡胸肉干','','1','50','0','贝贝宠物零食A级鸡肉整枝800g鸡胸肉干','1448352000','1638086400','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:10;s:5:\"price\";d:18;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:0;}');");
E_D("replace into `ecs_goods_activity` values('8','喷香鸡肉棒美味鸡肉条垂涎欲滴500g','','1','51','0','喷香鸡肉棒美味鸡肉条垂涎欲滴500g','1448352000','1669622400','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:10;s:5:\"price\";d:20;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:0;}');");

require("../../inc/footer.php");
?>