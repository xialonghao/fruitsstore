<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_qr`;");
E_C("CREATE TABLE `ecs_weixin_qr` (
  `qid` int(7) NOT NULL AUTO_INCREMENT,
  `type` varchar(2) NOT NULL,
  `expire_seconds` int(4) NOT NULL,
  `action_name` varchar(30) NOT NULL,
  `scene_id` int(7) NOT NULL,
  `ticket` varchar(120) NOT NULL,
  `scene` varchar(200) NOT NULL,
  `qr_path` varchar(200) NOT NULL,
  `subscribe` int(8) unsigned NOT NULL,
  `scan` int(8) unsigned NOT NULL,
  `function` varchar(100) NOT NULL,
  `affiliate` int(8) NOT NULL,
  `endtime` int(10) NOT NULL,
  `dateline` int(10) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_qr` values('1','tj','0','QR_LIMIT_SCENE','5','gQHI7zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL3dFeFZCbW5sYy1JS0FwbDRwMkRmAAIE4WVVVgMEAAAAAA==','aaaaa','http://sp.codes5.com/images/qrcode/qrcode_430/oG9l1t6rvjOCmUHiXQGvvVwpviWM.jpg','0','0','','5','0','0');");

require("../../inc/footer.php");
?>