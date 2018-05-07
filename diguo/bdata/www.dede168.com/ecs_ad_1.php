<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ad`;");
E_C("CREATE TABLE `ecs_ad` (
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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ad` values('1','1','0','首页_粮油副食_分类商品广告','','1449011954874068927.jpg','1447660800','1608105600','','','','2','1');");
E_D("replace into `ecs_ad` values('2','2','0','首页_蔬菜水果_分类商品广告','','1449010763793377576.jpg','1447660800','1608105600','','','','1','1');");
E_D("replace into `ecs_ad` values('3','3','0','首页_酒水饮料_分类商品广告','','1449012797850565666.jpg','1447660800','1608105600','','','','2','1');");
E_D("replace into `ecs_ad` values('4','4','0','首页_生鲜食品_分类商品广告','','1449010433801562396.jpg','1447660800','1608105600','','','','0','1');");
E_D("replace into `ecs_ad` values('5','5','0','首页倒计时广告位1','','1448989615330840923.jpg','1447747200','1671264000','','','','1','1');");
E_D("replace into `ecs_ad` values('9','5','0','首页倒计时广告位2','','1448990018817846134.jpg','1448956800','1640937600','','','','1','1');");
E_D("replace into `ecs_ad` values('7','5','0','首页倒计时广告位3','','1448989640974907552.jpg','1448956800','1640937600','','','','1','1');");
E_D("replace into `ecs_ad` values('8','5','0','首页倒计时广告位4','','1448989657559892617.jpg','1448956800','1640937600','','','','3','1');");
E_D("replace into `ecs_ad` values('10','6','0','网站最顶部横幅广','','1460440720430642585.jpg','1460361600','1557561600','','','','1','1');");
E_D("replace into `ecs_ad` values('11','7','0','天天惊喜右侧广告','','1460440755137550779.jpg','1460361600','1557561600','','','','0','1');");
E_D("replace into `ecs_ad` values('12','8','0','刚出炉新品左侧广告','','1460440788951670189.jpg','1460361600','1589184000','','','','0','1');");

require("../../inc/footer.php");
?>