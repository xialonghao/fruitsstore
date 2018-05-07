<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_prize_cnum`;");
E_C("CREATE TABLE `ecs_weixin_prize_cnum` (
  `pcid` int(5) NOT NULL AUTO_INCREMENT,
  `paid` int(5) NOT NULL,
  `pid` int(4) NOT NULL,
  `prize_name` varchar(64) NOT NULL,
  `prize_value` int(8) unsigned NOT NULL,
  `user_count` int(8) unsigned NOT NULL,
  PRIMARY KEY (`pcid`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_prize_cnum` values('1','0','2','null','0','1');");
E_D("replace into `ecs_weixin_prize_cnum` values('2','0','1','null','0','1');");
E_D("replace into `ecs_weixin_prize_cnum` values('3','0','2','null','0','1');");
E_D("replace into `ecs_weixin_prize_cnum` values('4','0','2','null','0','1');");
E_D("replace into `ecs_weixin_prize_cnum` values('5','0','1','null','0','1');");
E_D("replace into `ecs_weixin_prize_cnum` values('6','0','2','null','0','1');");
E_D("replace into `ecs_weixin_prize_cnum` values('7','3','2','iphone4','1','10');");
E_D("replace into `ecs_weixin_prize_cnum` values('8','0','1','null','0','1');");
E_D("replace into `ecs_weixin_prize_cnum` values('9','2','2','iphone5','1','10');");
E_D("replace into `ecs_weixin_prize_cnum` values('10','0','1','null','0','1');");
E_D("replace into `ecs_weixin_prize_cnum` values('11','0','1','null','0','1');");
E_D("replace into `ecs_weixin_prize_cnum` values('12','4','2','ipad','8','254');");
E_D("replace into `ecs_weixin_prize_cnum` values('13','0','1','null','0','1');");
E_D("replace into `ecs_weixin_prize_cnum` values('14','1','2','iphone6','1','10');");
E_D("replace into `ecs_weixin_prize_cnum` values('15','9','1','20元话费','1','10');");
E_D("replace into `ecs_weixin_prize_cnum` values('16','10','1','5元话费','9','119');");
E_D("replace into `ecs_weixin_prize_cnum` values('17','8','1','50元话费','1','10');");
E_D("replace into `ecs_weixin_prize_cnum` values('18','7','1','100元话费','1','10');");

require("../../inc/footer.php");
?>