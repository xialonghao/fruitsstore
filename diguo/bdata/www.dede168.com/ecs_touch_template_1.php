<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_touch_template`;");
E_C("CREATE TABLE `ecs_touch_template` (
  `filename` varchar(30) NOT NULL DEFAULT '',
  `region` varchar(40) NOT NULL DEFAULT '',
  `library` varchar(40) NOT NULL DEFAULT '',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `number` tinyint(1) unsigned NOT NULL DEFAULT '5',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `theme` varchar(60) NOT NULL DEFAULT '',
  `remarks` varchar(30) NOT NULL DEFAULT '',
  KEY `filename` (`filename`,`region`),
  KEY `theme` (`theme`),
  KEY `remarks` (`remarks`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_touch_template` values('index','热门市场','/library/ad_position.lbi','0','4','9','4','ocailong_com','');");
E_D("replace into `ecs_touch_template` values('index','特色市场右侧1张广告图','/library/ad_position.lbi','0','3','1','4','ocailong_com','');");
E_D("replace into `ecs_touch_template` values('index','特色市场左侧2张广告图','/library/ad_position.lbi','0','2','2','4','ocailong_com','');");
E_D("replace into `ecs_touch_template` values('index','touch首页广告区域','/library/ad_position.lbi','0','1','3','4','ocailong_com','');");
E_D("replace into `ecs_touch_template` values('index','中部主区域','/library/cat_goods.lbi','1','2','6','1','ocailong_com','');");
E_D("replace into `ecs_touch_template` values('index','中部主区域','/library/cat_goods.lbi','2','1','6','1','ocailong_com','');");
E_D("replace into `ecs_touch_template` values('index','中部主区域','/library/cat_goods.lbi','3','5','6','1','ocailong_com','');");
E_D("replace into `ecs_touch_template` values('index','','/library/recommend_hot.lbi','0','0','3','0','ocailong_com','');");
E_D("replace into `ecs_touch_template` values('index','','/library/group_buy.lbi','0','0','3','0','ocailong_com','');");
E_D("replace into `ecs_touch_template` values('index','','/library/recommend_promotion.lbi','0','0','4','0','ocailong_com','');");
E_D("replace into `ecs_touch_template` values('index','','/library/recommend_new.lbi','0','0','3','0','ocailong_com','');");
E_D("replace into `ecs_touch_template` values('index','中部主区域','/library/recommend_best.lbi','0','0','3','0','ocailong_com','');");

require("../../inc/footer.php");
?>