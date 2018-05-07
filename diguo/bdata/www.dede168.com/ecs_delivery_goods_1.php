<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_delivery_goods`;");
E_C("CREATE TABLE `ecs_delivery_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `delivery_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product_id` mediumint(8) unsigned DEFAULT '0',
  `product_sn` varchar(60) DEFAULT NULL,
  `goods_name` varchar(120) DEFAULT NULL,
  `brand_name` varchar(60) DEFAULT NULL,
  `goods_sn` varchar(60) DEFAULT NULL,
  `is_real` tinyint(1) unsigned DEFAULT '0',
  `extension_code` varchar(30) DEFAULT NULL,
  `parent_id` mediumint(8) unsigned DEFAULT '0',
  `send_number` smallint(5) unsigned DEFAULT '0',
  `goods_attr` text,
  PRIMARY KEY (`rec_id`),
  KEY `delivery_id` (`delivery_id`,`goods_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_delivery_goods` values('1','1','49','0','','1分钱支付测试商品','森美','ECS000049','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('2','2','49','0','','1分钱支付测试商品','森美','ECS000049','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('3','3','49','0','','1分钱支付测试商品','森美','ECS000049','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('4','4','49','0','','1分钱支付测试商品','森美','ECS000049','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('5','5','49','0','','1分钱支付测试商品','森美','ECS000049','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('6','6','49','0','','1分钱支付测试商品','森美','ECS000049','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('7','7','49','0','','1分钱支付测试商品','森美','ECS000049','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('8','8','49','0','','1分钱支付测试商品','森美','ECS000049','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('9','9','49','0','','1分钱支付测试商品','森美','ECS000049','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('10','10','48','0','','新疆巴尔鲁克生鲜牛排眼肉牛扒1200g','百利本能','ECS000048','1',NULL,'0','1','');");

require("../../inc/footer.php");
?>