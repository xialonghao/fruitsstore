<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_delivery_order`;");
E_C("CREATE TABLE `ecs_delivery_order` (
  `delivery_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `delivery_sn` varchar(20) NOT NULL,
  `order_sn` varchar(20) NOT NULL,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `invoice_no` varchar(50) DEFAULT NULL,
  `add_time` int(10) unsigned DEFAULT '0',
  `shipping_id` tinyint(3) unsigned DEFAULT '0',
  `shipping_name` varchar(120) DEFAULT NULL,
  `user_id` mediumint(8) unsigned DEFAULT '0',
  `action_user` varchar(30) DEFAULT NULL,
  `consignee` varchar(60) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `country` smallint(5) unsigned DEFAULT '0',
  `province` smallint(5) unsigned DEFAULT '0',
  `city` smallint(5) unsigned DEFAULT '0',
  `district` smallint(5) unsigned DEFAULT '0',
  `sign_building` varchar(120) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `zipcode` varchar(60) DEFAULT NULL,
  `tel` varchar(60) DEFAULT NULL,
  `mobile` varchar(60) DEFAULT NULL,
  `best_time` varchar(120) DEFAULT NULL,
  `postscript` varchar(255) DEFAULT NULL,
  `how_oos` varchar(120) DEFAULT NULL,
  `insure_fee` decimal(10,2) unsigned DEFAULT '0.00',
  `shipping_fee` decimal(10,2) unsigned DEFAULT '0.00',
  `update_time` int(10) unsigned DEFAULT '0',
  `suppliers_id` smallint(5) DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `agency_id` smallint(5) unsigned DEFAULT '0',
  PRIMARY KEY (`delivery_id`),
  KEY `user_id` (`user_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_delivery_order` values('1','20151122195574808','2015112275252','27','805355128260','1448164300','1','上门取货','3','sclzz','张三','详细地址详细地址','1','26','322','2739','','75283535@qq.com','','','18113131306','','','等待所有商品备齐后再发','0.00','0.00','1448164506','0','0','0');");
E_D("replace into `ecs_delivery_order` values('2','20151122201803920','2015112265460','26','','1448164228','1','上门取货','3','sclzz','张三','详细地址详细地址','1','26','322','2739','','75283535@qq.com','','','18113131306','','','等待所有商品备齐后再发','0.00','0.00','1448165909','0','0','0');");
E_D("replace into `ecs_delivery_order` values('3','20151122203661061','2015112225818','31','','1448166779','1','上门取货','3','sclzz','张三','详细地址详细地址','1','26','322','2739','','75283535@qq.com','','','18113131306','','','等待所有商品备齐后再发','0.00','0.00','1448166998','0','0','0');");
E_D("replace into `ecs_delivery_order` values('4','20151123145511925','2015112356122','73','','1448232418','1','上门取货','5','sclzz','张三','详细地址详细地址','1','2','52','500','','','','010-12345678','','','','等待所有商品备齐后再发','0.00','0.00','1448232926','0','0','0');");
E_D("replace into `ecs_delivery_order` values('5','20151123173143089','2015112369856','97','','1448242105','1','上门取货','5','sclzz','张三','详细地址详细地址','1','2','52','500','','','','010-12345678','','','','等待所有商品备齐后再发','0.00','0.00','1448242314','0','0','0');");
E_D("replace into `ecs_delivery_order` values('6','20151123185888193','2015112314657','96','590716750039','1448242012','3','顺丰速运','5','sclzz','张三','详细地址详细地址','1','2','52','500','','','','010-12345678','','','','等待所有商品备齐后再发','0.00','15.00','1448247510','0','0','0');");
E_D("replace into `ecs_delivery_order` values('7','20151123194019515','2015112366532','95','','1448241849','1','上门取货','5','sclzz','张三','详细地址详细地址','1','2','52','500','','','','010-12345678','','','','等待所有商品备齐后再发','0.00','0.00','1448250050','0','0','0');");
E_D("replace into `ecs_delivery_order` values('8','20151125155707937','2015112344712','94','','1448241704','1','上门取货','5','sclzz','张三','详细地址详细地址','1','2','52','500','','','','010-12345678','','','','等待所有商品备齐后再发','0.00','0.00','1448409424','0','0','0');");
E_D("replace into `ecs_delivery_order` values('9','20151125160663779','2015112561257','100','','1448409894','1','上门取货','5','sclzz','张三','详细地址详细地址','1','2','52','500','','','','010-12345678','','','','等待所有商品备齐后再发','0.00','0.00','1448409967','0','0','0');");
E_D("replace into `ecs_delivery_order` values('10','20151202210163792','2015120242661','103','880828394688493096','1449032504','4','圆通速递','1','sclzz','张三','详细地址详细地址','1','2','52','500','','asdf@asd.com','','010-12345678','13981750562','','','等待所有商品备齐后再发','0.00','0.00','1449032516','0','0','0');");

require("../../inc/footer.php");
?>