<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_prize_append`;");
E_C("CREATE TABLE `ecs_weixin_prize_append` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `prize_id` int(4) unsigned NOT NULL,
  `prize_name` varchar(64) NOT NULL,
  `prize_value` int(8) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_prize_append` values('1','2','iphone6','10');");
E_D("replace into `ecs_weixin_prize_append` values('2','2','iphone5','10');");
E_D("replace into `ecs_weixin_prize_append` values('3','2','iphone4','10');");
E_D("replace into `ecs_weixin_prize_append` values('4','2','ipad','10');");
E_D("replace into `ecs_weixin_prize_append` values('5','2','','0');");
E_D("replace into `ecs_weixin_prize_append` values('6','2','','0');");
E_D("replace into `ecs_weixin_prize_append` values('7','1','100元话费','10');");
E_D("replace into `ecs_weixin_prize_append` values('8','1','50元话费','10');");
E_D("replace into `ecs_weixin_prize_append` values('9','1','20元话费','10');");
E_D("replace into `ecs_weixin_prize_append` values('10','1','5元话费','10');");
E_D("replace into `ecs_weixin_prize_append` values('11','1','','0');");
E_D("replace into `ecs_weixin_prize_append` values('12','1','','0');");

require("../../inc/footer.php");
?>