<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_point_record`;");
E_C("CREATE TABLE `ecs_weixin_point_record` (
  `pr_id` int(7) NOT NULL AUTO_INCREMENT,
  `wxid` char(28) NOT NULL,
  `point_name` varchar(64) NOT NULL,
  `num` int(5) NOT NULL,
  `lasttime` int(10) NOT NULL,
  `datelinie` int(10) NOT NULL,
  PRIMARY KEY (`pr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_point_record` values('1','oG9l1t6rvjOCmUHiXQGvvVwpviWM','g_point','4','1448437675','1448435382');");
E_D("replace into `ecs_weixin_point_record` values('2','oG9l1t6rvjOCmUHiXQGvvVwpviWM','bd','1','1448436050','1448436050');");
E_D("replace into `ecs_weixin_point_record` values('3','oG9l1t6rvjOCmUHiXQGvvVwpviWM','news','1','1448436084','1448436084');");
E_D("replace into `ecs_weixin_point_record` values('4','oG9l1t6rvjOCmUHiXQGvvVwpviWM','zjd','1','1448436222','1448436222');");
E_D("replace into `ecs_weixin_point_record` values('5','oG9l1t6rvjOCmUHiXQGvvVwpviWM','dzp','1','1448436229','1448436229');");
E_D("replace into `ecs_weixin_point_record` values('6','oG9l1t6rvjOCmUHiXQGvvVwpviWM','best','1','1448438282','1448438282');");
E_D("replace into `ecs_weixin_point_record` values('7','oG9l1t6rvjOCmUHiXQGvvVwpviWM','ddcx','1','1448439061','1448439061');");

require("../../inc/footer.php");
?>