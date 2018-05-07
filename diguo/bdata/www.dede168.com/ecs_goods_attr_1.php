<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_attr`;");
E_C("CREATE TABLE `ecs_goods_attr` (
  `goods_attr_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `attr_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `attr_value` text NOT NULL,
  `attr_price` varchar(255) NOT NULL DEFAULT '',
  `thumb_url` varchar(255) NOT NULL DEFAULT '',
  `img_url` varchar(255) NOT NULL DEFAULT '',
  `img_original` varchar(255) NOT NULL DEFAULT '',
  `hex_color` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`goods_attr_id`),
  KEY `goods_id` (`goods_id`),
  KEY `attr_id` (`attr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_attr` values('1','1','211','500克','0','','','','');");
E_D("replace into `ecs_goods_attr` values('2','1','211','1000克','50','','','','');");
E_D("replace into `ecs_goods_attr` values('3','1','211','2000克','100','','','','');");
E_D("replace into `ecs_goods_attr` values('4','1','214','红色','','','','','FFCE6B');");
E_D("replace into `ecs_goods_attr` values('5','1','214','蓝色','','','','','9661FF');");
E_D("replace into `ecs_goods_attr` values('6','1','214','绿色','','','','','6B9621');");
E_D("replace into `ecs_goods_attr` values('7','1','215','时尚款','','images/201512/thumb_img/1_thumb_G_1449025104251.jpg','','','');");
E_D("replace into `ecs_goods_attr` values('8','1','215','经典款','','images/201512/thumb_img/1_thumb_G_1449025115783.jpg','','','');");
E_D("replace into `ecs_goods_attr` values('9','1','215','出众款','','images/201512/thumb_img/1_thumb_G_1449025126133.jpg','','','');");

require("../../inc/footer.php");
?>