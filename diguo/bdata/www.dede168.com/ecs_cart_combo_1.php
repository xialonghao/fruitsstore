<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_cart_combo`;");
E_C("CREATE TABLE `ecs_cart_combo` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `session_id` char(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_sn` varchar(60) NOT NULL DEFAULT '',
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `group_id` varchar(255) NOT NULL,
  `goods_name` varchar(120) NOT NULL DEFAULT '',
  `market_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `goods_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `goods_number` smallint(5) unsigned NOT NULL DEFAULT '0',
  `goods_attr` text NOT NULL,
  `is_real` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `extension_code` varchar(30) NOT NULL DEFAULT '',
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `rec_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_gift` smallint(5) unsigned NOT NULL DEFAULT '0',
  `is_shipping` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `can_handsel` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `goods_attr_id` varchar(255) NOT NULL DEFAULT '',
  `fencheng` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`rec_id`),
  KEY `session_id` (`session_id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_cart_combo` values('20','0','4a00650a353ddfff81b89daabda697db','49','ECS000049','0','m_goods_0_49','1分钱支付测试商品','0.01','0.01','1','','1','','0','0','0','1','0','',NULL);");
E_D("replace into `ecs_cart_combo` values('29','0','c3e2b99cd7bea827581fe4130b976c45','49','ECS000049','0','m_goods_0_49','1分钱支付测试商品','0.01','0.01','1','','1','','0','0','0','1','0','','0');");
E_D("replace into `ecs_cart_combo` values('30','0','c3e2b99cd7bea827581fe4130b976c45','1','ECS000000','4','m_goods_0_49','新鲜水果甜蜜香脆单果约800克','231.60','193.00','1','重量:500克 \n外观:红色 \n款式:时尚款 \n','1','','49','0','0','1','0','4,7,1',NULL);");

require("../../inc/footer.php");
?>