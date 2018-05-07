<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_comment`;");
E_C("CREATE TABLE `ecs_comment` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `comment_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `id_value` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `email` varchar(60) NOT NULL DEFAULT '',
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `comment_rank` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `ip_address` varchar(15) NOT NULL DEFAULT '',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_id`),
  KEY `parent_id` (`parent_id`),
  KEY `id_value` (`id_value`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_comment` values('1','0','48','adf@adsf.com','aabbcc','这个质量很高啊，很好，值得购买！','5','1448045512','192.168.1.88','1','0','1');");
E_D("replace into `ecs_comment` values('2','0','48','adf@adsf.com','aabbcc','很好，很好！','5','1448047881','192.168.1.88','1','0','1');");
E_D("replace into `ecs_comment` values('3','0','48','adf@adsf.com','aabbcc','很好，很好！呵呵','5','1448048009','192.168.1.88','1','0','1');");
E_D("replace into `ecs_comment` values('4','0','1','adf@adsf.com','aabbcc','真心好用！','5','1448048094','192.168.1.88','1','0','1');");
E_D("replace into `ecs_comment` values('5','0','1','adf@adsf.com','aabbcc','价格实惠，真心好用！','5','1448048240','192.168.1.88','0','0','1');");

require("../../inc/footer.php");
?>