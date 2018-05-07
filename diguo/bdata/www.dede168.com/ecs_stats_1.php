<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_stats`;");
E_C("CREATE TABLE `ecs_stats` (
  `access_time` int(10) unsigned NOT NULL DEFAULT '0',
  `ip_address` varchar(15) NOT NULL DEFAULT '',
  `visit_times` smallint(5) unsigned NOT NULL DEFAULT '1',
  `browser` varchar(60) NOT NULL DEFAULT '',
  `system` varchar(20) NOT NULL DEFAULT '',
  `language` varchar(20) NOT NULL DEFAULT '',
  `area` varchar(30) NOT NULL DEFAULT '',
  `referer_domain` varchar(100) NOT NULL DEFAULT '',
  `referer_path` varchar(200) NOT NULL DEFAULT '',
  `access_url` varchar(255) NOT NULL DEFAULT '',
  KEY `access_time` (`access_time`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_stats` values('1447701258','192.168.1.88','7','FireFox 42.0','Windows NT','zh-CN,zh','LAN','http://192.168.1.88','/admin/index.php?act=top','/index.php');");
E_D("replace into `ecs_stats` values('1447706716','127.0.0.1','1','Internet Explorer 6.0','Windows 2000','','LAN','','','/index.php');");

require("../../inc/footer.php");
?>