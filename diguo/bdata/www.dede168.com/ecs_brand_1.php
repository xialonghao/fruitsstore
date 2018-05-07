<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_brand`;");
E_C("CREATE TABLE `ecs_brand` (
  `brand_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(60) NOT NULL DEFAULT '',
  `brand_logo` varchar(80) NOT NULL DEFAULT '',
  `brand_desc` text NOT NULL,
  `site_url` varchar(255) NOT NULL DEFAULT '',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '50',
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `brand_banner` varchar(80) NOT NULL COMMENT '商品品牌banner',
  PRIMARY KEY (`brand_id`),
  KEY `is_show` (`is_show`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_brand` values('1','艾尔Aier','1447704649936189900.jpg','','http://www.mb5.com.cn','50','1','');");
E_D("replace into `ecs_brand` values('2','发育宝Haipet','1447704682791039878.jpg','','http://www.mb5.com.cn','50','1','');");
E_D("replace into `ecs_brand` values('3','雷米高','1447704720666038803.jpg','','http://www.mb5.com.cn','50','1','');");
E_D("replace into `ecs_brand` values('4','百利','1447705943471297107.jpg','','http://www.mb5.com.cn','50','1','');");
E_D("replace into `ecs_brand` values('5','森美','1447706000795527048.jpg','','http://www.mb5.com.cn','50','1','');");
E_D("replace into `ecs_brand` values('6','哈根纽翠斯','1447706048999741376.jpg','','http://www.mb5.com.cn','50','1','');");
E_D("replace into `ecs_brand` values('7','比瑞吉','1447706093179659152.jpg','','http://www.mb5.com.cn','50','1','');");
E_D("replace into `ecs_brand` values('8','百利本能','1447706126626614178.jpg','','http://www.mb5.com.cn','50','1','');");
E_D("replace into `ecs_brand` values('9','金赏','1447706160927101013.jpg','','http://www.mb5.com.cn','50','1','');");
E_D("replace into `ecs_brand` values('10','维洛司','1447706206565420819.jpg','','http://www.mb5.com.cn','50','1','');");

require("../../inc/footer.php");
?>