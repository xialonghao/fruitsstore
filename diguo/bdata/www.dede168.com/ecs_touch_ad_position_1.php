<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_touch_ad_position`;");
E_C("CREATE TABLE `ecs_touch_ad_position` (
  `position_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `position_name` varchar(60) NOT NULL DEFAULT '',
  `ad_width` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ad_height` smallint(5) unsigned NOT NULL DEFAULT '0',
  `position_desc` varchar(255) NOT NULL DEFAULT '',
  `position_style` text NOT NULL,
  PRIMARY KEY (`position_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_touch_ad_position` values('1','手机版首页Banner','360','168','','<ul>\r\n{foreach from=\$ads item=ad}\r\n  <li>{\$ad}</li>\r\n{/foreach}\r\n</ul>\r\n');");
E_D("replace into `ecs_touch_ad_position` values('2','特色市场左侧2张广告图','360','140','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_touch_ad_position` values('3','特色市场右侧1张广告图','258','280','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}');");
E_D("replace into `ecs_touch_ad_position` values('4','热门市场','345','372','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}');");

require("../../inc/footer.php");
?>