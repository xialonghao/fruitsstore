<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_user`;");
E_C("CREATE TABLE `ecs_weixin_user` (
  `uid` int(7) NOT NULL AUTO_INCREMENT,
  `subscribe` tinyint(1) unsigned NOT NULL,
  `wxid` char(28) NOT NULL,
  `nickname` varchar(200) NOT NULL,
  `sex` tinyint(1) unsigned NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `language` varchar(50) NOT NULL,
  `headimgurl` varchar(200) NOT NULL,
  `subscribe_time` int(10) unsigned NOT NULL,
  `localimgurl` varchar(200) NOT NULL,
  `setp` smallint(2) unsigned NOT NULL,
  `uname` varchar(50) NOT NULL,
  `coupon` varchar(30) NOT NULL,
  `affiliate` int(8) unsigned NOT NULL,
  `dateline` int(10) unsigned NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_user` values('2','0','oG9l1t6rvjOCmUHiXQGvvVwpviWM','徐凯','1','成都','中国','四川','zh_CN','http://wx.qlogo.cn/mmopen/YUHWia7ps2muHW8unr12GxvorGm1xmeEEsXcDTHV76zYfrCOytzF7iaV1TpnT3JicHQP9O9xRCf1ThCBAvTz82L8Ow9vTiaD43Gic/0','1448437674','','3','aaaaa','','0','1448682494');");

require("../../inc/footer.php");
?>