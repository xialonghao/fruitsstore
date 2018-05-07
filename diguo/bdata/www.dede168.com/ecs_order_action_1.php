<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_action`;");
E_C("CREATE TABLE `ecs_order_action` (
  `action_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `action_user` varchar(30) NOT NULL DEFAULT '',
  `order_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `shipping_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pay_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `action_place` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `action_note` varchar(255) NOT NULL DEFAULT '',
  `log_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`action_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=86 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_action` values('1','11','buyer','2','0','0','0','用户取消','1447996110');");
E_D("replace into `ecs_order_action` values('2','19','buyer','2','0','0','0','用户取消','1447996115');");
E_D("replace into `ecs_order_action` values('3','23','buyer','2','0','0','0','用户取消','1448162926');");
E_D("replace into `ecs_order_action` values('4','25','buyer','2','0','0','0','用户取消','1448163700');");
E_D("replace into `ecs_order_action` values('5','24','buyer','2','0','0','0','用户取消','1448163888');");
E_D("replace into `ecs_order_action` values('6','27','买家','1','0','2','0','','1448164384');");
E_D("replace into `ecs_order_action` values('7','27','sclzz','5','5','2','0','','1448164506');");
E_D("replace into `ecs_order_action` values('8','27','sclzz','1','1','2','1','','1448164517');");
E_D("replace into `ecs_order_action` values('9','26','sclzz','1','0','2','0','111','1448164584');");
E_D("replace into `ecs_order_action` values('10','26','sclzz','1','3','2','0','','1448164588');");
E_D("replace into `ecs_order_action` values('11','27','买家','5','2','2','0','','1448164652');");
E_D("replace into `ecs_order_action` values('12','26','sclzz','5','5','2','0','','1448165909');");
E_D("replace into `ecs_order_action` values('13','26','sclzz','1','1','2','1','','1448165915');");
E_D("replace into `ecs_order_action` values('14','26','买家','5','2','2','0','','1448165988');");
E_D("replace into `ecs_order_action` values('15','28','买家','1','0','2','0','','1448166241');");
E_D("replace into `ecs_order_action` values('16','29','买家','1','0','2','0','','1448166384');");
E_D("replace into `ecs_order_action` values('17','30','买家','1','0','2','0','','1448166652');");
E_D("replace into `ecs_order_action` values('18','31','买家','1','0','2','0','','1448166818');");
E_D("replace into `ecs_order_action` values('19','31','sclzz','5','5','2','0','','1448166999');");
E_D("replace into `ecs_order_action` values('20','31','sclzz','1','1','2','1','','1448167013');");
E_D("replace into `ecs_order_action` values('21','31','买家','5','2','2','0','','1448167030');");
E_D("replace into `ecs_order_action` values('22','33','买家','1','0','2','0','','1448167608');");
E_D("replace into `ecs_order_action` values('23','34','买家','1','0','2','0','','1448168010');");
E_D("replace into `ecs_order_action` values('24','35','买家','1','0','2','0','','1448168276');");
E_D("replace into `ecs_order_action` values('25','36','买家','1','0','2','0','','1448169770');");
E_D("replace into `ecs_order_action` values('26','37','买家','1','0','2','0','','1448170362');");
E_D("replace into `ecs_order_action` values('27','51','买家','1','0','2','0','','1448172749');");
E_D("replace into `ecs_order_action` values('28','52','买家','1','0','2','0','','1448173068');");
E_D("replace into `ecs_order_action` values('29','53','买家','1','0','2','0','','1448173153');");
E_D("replace into `ecs_order_action` values('30','54','买家','1','0','2','0','','1448173268');");
E_D("replace into `ecs_order_action` values('31','55','买家','1','0','2','0','','1448173324');");
E_D("replace into `ecs_order_action` values('32','56','买家','1','0','2','0','','1448173375');");
E_D("replace into `ecs_order_action` values('33','57','买家','1','0','2','0','','1448173457');");
E_D("replace into `ecs_order_action` values('34','58','买家','1','0','2','0','','1448173517');");
E_D("replace into `ecs_order_action` values('35','59','买家','1','0','2','0','','1448173586');");
E_D("replace into `ecs_order_action` values('36','60','买家','1','0','2','0','','1448173656');");
E_D("replace into `ecs_order_action` values('37','61','买家','1','0','2','0','','1448173702');");
E_D("replace into `ecs_order_action` values('38','62','买家','1','0','2','0','','1448173762');");
E_D("replace into `ecs_order_action` values('39','63','买家','1','0','2','0','','1448173911');");
E_D("replace into `ecs_order_action` values('40','64','买家','1','0','2','0','','1448173969');");
E_D("replace into `ecs_order_action` values('41','65','买家','1','0','2','0','','1448174014');");
E_D("replace into `ecs_order_action` values('42','66','买家','1','0','2','0','','1448174120');");
E_D("replace into `ecs_order_action` values('43','67','买家','1','0','2','0','','1448174205');");
E_D("replace into `ecs_order_action` values('44','68','买家','1','0','2','0','','1448174257');");
E_D("replace into `ecs_order_action` values('45','69','买家','1','0','2','0','','1448174406');");
E_D("replace into `ecs_order_action` values('46','70','买家','1','0','2','0','','1448174744');");
E_D("replace into `ecs_order_action` values('47','71','buyer','2','0','0','0','用户取消','1448232116');");
E_D("replace into `ecs_order_action` values('48','73','sclzz','1','3','0','0','','1448232764');");
E_D("replace into `ecs_order_action` values('49','73','sclzz','5','5','0','0','','1448232926');");
E_D("replace into `ecs_order_action` values('50','73','sclzz','1','1','0','1','','1448232942');");
E_D("replace into `ecs_order_action` values('51','73','买家','5','2','0','0','','1448233314');");
E_D("replace into `ecs_order_action` values('52','82','买家','1','0','2','0','','1448237596');");
E_D("replace into `ecs_order_action` values('53','83','买家','1','0','2','0','','1448237675');");
E_D("replace into `ecs_order_action` values('54','84','买家','1','0','2','0','','1448238879');");
E_D("replace into `ecs_order_action` values('55','85','买家','1','0','2','0','','1448239080');");
E_D("replace into `ecs_order_action` values('56','86','买家','1','0','2','0','','1448239341');");
E_D("replace into `ecs_order_action` values('57','87','买家','1','0','2','0','','1448239705');");
E_D("replace into `ecs_order_action` values('58','88','买家','1','0','2','0','','1448239985');");
E_D("replace into `ecs_order_action` values('59','89','买家','1','0','2','0','','1448240341');");
E_D("replace into `ecs_order_action` values('60','90','买家','1','0','2','0','','1448240443');");
E_D("replace into `ecs_order_action` values('61','91','买家','1','0','2','0','','1448241017');");
E_D("replace into `ecs_order_action` values('62','92','买家','1','0','2','0','','1448241185');");
E_D("replace into `ecs_order_action` values('63','93','买家','1','0','2','0','','1448241358');");
E_D("replace into `ecs_order_action` values('64','94','买家','1','0','2','0','','1448241731');");
E_D("replace into `ecs_order_action` values('65','95','买家','1','0','2','0','','1448241875');");
E_D("replace into `ecs_order_action` values('66','96','买家','1','0','2','0','','1448242033');");
E_D("replace into `ecs_order_action` values('67','97','买家','1','0','2','0','','1448242130');");
E_D("replace into `ecs_order_action` values('68','98','buyer','2','0','0','0','用户取消','1448242231');");
E_D("replace into `ecs_order_action` values('69','97','sclzz','5','5','2','0','','1448242314');");
E_D("replace into `ecs_order_action` values('70','97','sclzz','1','1','2','1','','1448242320');");
E_D("replace into `ecs_order_action` values('71','97','买家','5','2','2','0','','1448242329');");
E_D("replace into `ecs_order_action` values('72','96','sclzz','1','0','2','0','1111','1448247381');");
E_D("replace into `ecs_order_action` values('73','96','sclzz','5','5','2','0','','1448247510');");
E_D("replace into `ecs_order_action` values('74','96','sclzz','1','1','2','1','','1448247519');");
E_D("replace into `ecs_order_action` values('75','95','sclzz','1','3','2','0','','1448250039');");
E_D("replace into `ecs_order_action` values('76','95','sclzz','5','5','2','0','','1448250050');");
E_D("replace into `ecs_order_action` values('77','95','sclzz','1','1','2','1','','1448250063');");
E_D("replace into `ecs_order_action` values('78','94','sclzz','5','5','2','0','','1448409424');");
E_D("replace into `ecs_order_action` values('79','94','sclzz','1','1','2','1','','1448409431');");
E_D("replace into `ecs_order_action` values('80','100','买家','1','0','2','0','','1448409922');");
E_D("replace into `ecs_order_action` values('81','100','sclzz','5','5','2','0','','1448409967');");
E_D("replace into `ecs_order_action` values('82','100','sclzz','1','1','2','1','','1448409980');");
E_D("replace into `ecs_order_action` values('83','103','sclzz','5','5','2','0','','1449032516');");
E_D("replace into `ecs_order_action` values('84','103','sclzz','1','1','2','1','','1449032601');");
E_D("replace into `ecs_order_action` values('85','103','买家','5','2','2','0','','1449032610');");

require("../../inc/footer.php");
?>