<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_products`;");
E_C("CREATE TABLE `ecs_products` (
  `product_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_attr` varchar(50) DEFAULT NULL,
  `product_sn` varchar(60) DEFAULT NULL,
  `product_number` smallint(5) unsigned DEFAULT '0',
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_products` values('5','1','1|4|8','ECS000000g_p5','123');");
E_D("replace into `ecs_products` values('4','1','1|4|7','ECS000000g_p4','234');");
E_D("replace into `ecs_products` values('6','1','1|4|9','ECS000000g_p6','345');");
E_D("replace into `ecs_products` values('7','1','1|5|7','ECS000000g_p7','567');");
E_D("replace into `ecs_products` values('8','1','1|5|8','ECS000000g_p8','678');");
E_D("replace into `ecs_products` values('9','1','1|5|9','ECS000000g_p9','789');");
E_D("replace into `ecs_products` values('10','1','1|6|7','ECS000000g_p10','890');");
E_D("replace into `ecs_products` values('11','1','1|6|8','ECS000000g_p11','124');");
E_D("replace into `ecs_products` values('12','1','1|6|9','ECS000000g_p12','125');");
E_D("replace into `ecs_products` values('13','1','2|4|7','ECS000000g_p13','126');");
E_D("replace into `ecs_products` values('14','1','2|4|8','ECS000000g_p14','127');");
E_D("replace into `ecs_products` values('15','1','2|4|9','ECS000000g_p15','128');");
E_D("replace into `ecs_products` values('16','1','2|5|7','ECS000000g_p16','129');");
E_D("replace into `ecs_products` values('17','1','2|5|8','ECS000000g_p17','130');");
E_D("replace into `ecs_products` values('18','1','2|5|9','ECS000000g_p18','131');");
E_D("replace into `ecs_products` values('19','1','2|6|7','ECS000000g_p19','132');");
E_D("replace into `ecs_products` values('20','1','2|6|8','ECS000000g_p20','133');");
E_D("replace into `ecs_products` values('21','1','2|6|9','ECS000000g_p21','134');");
E_D("replace into `ecs_products` values('22','1','3|4|7','ECS000000g_p22','135');");
E_D("replace into `ecs_products` values('23','1','3|4|8','ECS000000g_p23','136');");
E_D("replace into `ecs_products` values('24','1','3|4|9','ECS000000g_p24','137');");
E_D("replace into `ecs_products` values('25','1','3|5|7','ECS000000g_p25','138');");
E_D("replace into `ecs_products` values('26','1','3|5|8','ECS000000g_p26','1381');");
E_D("replace into `ecs_products` values('27','1','3|5|9','ECS000000g_p27','666');");
E_D("replace into `ecs_products` values('28','1','3|6|7','ECS000000g_p28','888');");
E_D("replace into `ecs_products` values('29','1','3|6|8','ECS000000g_p29','9999');");
E_D("replace into `ecs_products` values('30','1','3|6|9','ECS000000g_p30','5689');");

require("../../inc/footer.php");
?>