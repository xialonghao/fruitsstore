<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ad_position`;");
E_C("CREATE TABLE `ecs_ad_position` (
  `position_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `position_name` varchar(60) NOT NULL DEFAULT '',
  `ad_width` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ad_height` smallint(5) unsigned NOT NULL DEFAULT '0',
  `position_desc` varchar(255) NOT NULL DEFAULT '',
  `position_style` text NOT NULL,
  PRIMARY KEY (`position_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ad_position` values('1','首页_粮油副食_分类商品广告','340','400','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}');");
E_D("replace into `ecs_ad_position` values('2','首页_蔬菜水果_分类商品广告','340','400','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}');");
E_D("replace into `ecs_ad_position` values('3','首页_酒水饮料_分类商品广告','340','400','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}');");
E_D("replace into `ecs_ad_position` values('4','首页_生鲜食品_分类商品广告','340','400','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}');");
E_D("replace into `ecs_ad_position` values('5','首页倒计时广告位','580','250','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}');");
E_D("replace into `ecs_ad_position` values('6','网站最顶部横幅广告','1024','50','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}');");
E_D("replace into `ecs_ad_position` values('7','天天惊喜左侧广告','222','380','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('8','刚出炉新品左侧广告','224','478','','{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}');");

require("../../inc/footer.php");
?>