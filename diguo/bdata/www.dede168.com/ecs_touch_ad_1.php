<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_touch_ad`;");
E_C("CREATE TABLE `ecs_touch_ad` (
  `ad_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `position_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `media_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ad_name` varchar(60) NOT NULL DEFAULT '',
  `ad_link` varchar(255) NOT NULL DEFAULT '',
  `ad_code` text NOT NULL,
  `start_time` int(11) NOT NULL DEFAULT '0',
  `end_time` int(11) NOT NULL DEFAULT '0',
  `link_man` varchar(60) NOT NULL DEFAULT '',
  `link_email` varchar(60) NOT NULL DEFAULT '',
  `link_phone` varchar(60) NOT NULL DEFAULT '',
  `click_count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `enabled` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`ad_id`),
  KEY `position_id` (`position_id`),
  KEY `enabled` (`enabled`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_touch_ad` values('1','1','0','手机版首页Banner-1','','1457812991560083075.jpg','1396339200','1525161600','','','','47','1');");
E_D("replace into `ecs_touch_ad` values('2','1','0','手机版首页Banner-2','','1457813006192951719.jpg','1396339200','1525161600','','','','44','1');");
E_D("replace into `ecs_touch_ad` values('4','1','0','手机版首页Banner-3','','1457813020818820425.jpg','1444204800','1604649600','','','','3','1');");
E_D("replace into `ecs_touch_ad` values('5','2','0','特色市场左侧2张广告图-1','','1449014605524349143.jpg','1444291200','1604736000','','','','18','1');");
E_D("replace into `ecs_touch_ad` values('6','2','0','特色市场左侧2张广告图-2','','1449014633204150477.jpg','1444291200','1604736000','','','','28','1');");
E_D("replace into `ecs_touch_ad` values('7','3','0','特色市场右侧1张广告图','','1457813429601574062.jpg','1444291200','1604736000','','','','30','1');");
E_D("replace into `ecs_touch_ad` values('8','4','0','热门市场-1','','1449017705247505261.jpg','1444291200','1604736000','','','','31','1');");
E_D("replace into `ecs_touch_ad` values('9','4','0','热门市场-2','','1449017715707894167.jpg','1444291200','1604736000','','','','11','1');");
E_D("replace into `ecs_touch_ad` values('10','4','0','热门市场-3','','1449017725192980023.jpg','1444291200','1604736000','','','','11','1');");
E_D("replace into `ecs_touch_ad` values('11','4','0','热门市场-4','','1449017734025885281.jpg','1444291200','1604736000','','','','8','1');");
E_D("replace into `ecs_touch_ad` values('12','4','0','热门市场-5','','1449017744088348985.jpg','1444291200','1604736000','','','','17','1');");
E_D("replace into `ecs_touch_ad` values('13','4','0','热门市场-6','','1449017754317369153.jpg','1444291200','1604736000','','','','23','1');");
E_D("replace into `ecs_touch_ad` values('14','4','0','热门市场-7','','1449017763165246328.jpg','1444291200','1604736000','','','','14','1');");
E_D("replace into `ecs_touch_ad` values('15','4','0','热门市场-8','','1449017772357575701.jpg','1444291200','1604736000','','','','12','1');");
E_D("replace into `ecs_touch_ad` values('16','4','0','热门市场-9','','1449017780762813247.jpg','1444291200','1604736000','','','','17','1');");

require("../../inc/footer.php");
?>