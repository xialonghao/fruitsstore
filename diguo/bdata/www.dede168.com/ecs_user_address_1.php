<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_user_address`;");
E_C("CREATE TABLE `ecs_user_address` (
  `address_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `address_name` varchar(50) NOT NULL DEFAULT '',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `consignee` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `country` smallint(5) NOT NULL DEFAULT '0',
  `province` smallint(5) NOT NULL DEFAULT '0',
  `city` smallint(5) NOT NULL DEFAULT '0',
  `district` smallint(5) NOT NULL DEFAULT '0',
  `address` varchar(120) NOT NULL DEFAULT '',
  `zipcode` varchar(60) NOT NULL DEFAULT '',
  `tel` varchar(60) NOT NULL DEFAULT '',
  `mobile` varchar(60) NOT NULL DEFAULT '',
  `sign_building` varchar(120) NOT NULL DEFAULT '',
  `best_time` varchar(120) NOT NULL DEFAULT '',
  PRIMARY KEY (`address_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_user_address` values('1','','1','张三','asdf@asd.com','1','2','52','500','详细地址详细地址','','010-12345678','13981750562','','');");
E_D("replace into `ecs_user_address` values('5','','3','张三','75283535@qq.com','1','26','322','2739','详细地址详细地址','','','18113131306','','');");
E_D("replace into `ecs_user_address` values('6','','5','张三','','1','2','52','500','详细地址详细地址','','010-12345678','','','');");
E_D("replace into `ecs_user_address` values('7','','9','开口','','1','5','65','629','uiyuhuiuighjk','','1332552695','','','');");
E_D("replace into `ecs_user_address` values('8','','10','杨彪','123123@qq.com','1','3','41','435','底商0212312','','','18909876543','','');");

require("../../inc/footer.php");
?>