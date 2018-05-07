<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_oauth`;");
E_C("CREATE TABLE `ecs_weixin_oauth` (
  `oid` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `contents` text NOT NULL,
  `count` int(10) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_oauth` values('1','手机版网站首页','http://ecshop1.shamuban.com/mobile','3942','1');");
E_D("replace into `ecs_weixin_oauth` values('12','推广教程','http://ecshop1.shamuban.com/mobile/article.php?id=37','2053','1');");
E_D("replace into `ecs_weixin_oauth` values('13','推广首页','http://sp.codes5.com/mobile/','4928','1');");
E_D("replace into `ecs_weixin_oauth` values('14','分销中心','http://sp.codes5.com/mobile/distribute.php','4604','1');");
E_D("replace into `ecs_weixin_oauth` values('15','单品推广演示','http://sp.codes5.com/mobile/xkfla2015.php','87','1');");

require("../../inc/footer.php");
?>