<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_pay_log`;");
E_C("CREATE TABLE `ecs_pay_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `order_amount` decimal(10,2) unsigned NOT NULL,
  `order_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_paid` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `user_account_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=107 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_pay_log` values('1','1','28.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('2','2','88.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('3','3','26.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('4','4','88.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('5','5','88.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('6','6','168.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('7','7','108.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('8','8','108.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('9','9','168.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('10','10','88.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('11','11','108.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('12','12','88.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('13','13','46.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('14','14','18.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('15','15','59.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('16','16','26.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('17','17','12.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('18','18','12.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('19','19','49.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('20','20','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('21','21','88.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('22','22','88.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('23','23','0.01','0','0','0');");
E_D("replace into `ecs_pay_log` values('24','24','0.01','0','0','0');");
E_D("replace into `ecs_pay_log` values('25','25','0.01','0','0','0');");
E_D("replace into `ecs_pay_log` values('26','26','0.01','0','0','0');");
E_D("replace into `ecs_pay_log` values('27','27','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('28','28','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('29','29','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('30','30','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('31','31','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('32','32','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('33','33','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('34','34','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('35','35','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('36','36','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('37','37','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('38','38','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('39','39','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('40','40','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('41','41','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('42','42','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('43','43','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('44','44','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('45','45','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('46','46','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('47','47','0.01','0','0','0');");
E_D("replace into `ecs_pay_log` values('48','48','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('49','49','0.01','0','0','0');");
E_D("replace into `ecs_pay_log` values('50','50','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('51','51','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('52','52','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('53','53','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('54','54','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('55','55','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('56','56','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('57','57','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('58','58','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('59','59','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('60','60','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('61','61','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('62','62','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('63','63','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('64','64','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('65','65','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('66','66','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('67','67','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('68','68','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('69','69','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('70','70','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('71','72','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('72','73','0.01','0','0','0');");
E_D("replace into `ecs_pay_log` values('73','74','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('74','75','0.01','0','0','0');");
E_D("replace into `ecs_pay_log` values('75','76','0.01','0','0','0');");
E_D("replace into `ecs_pay_log` values('76','77','0.01','0','0','0');");
E_D("replace into `ecs_pay_log` values('77','78','0.01','0','0','0');");
E_D("replace into `ecs_pay_log` values('78','79','0.01','0','0','0');");
E_D("replace into `ecs_pay_log` values('79','80','0.01','0','0','0');");
E_D("replace into `ecs_pay_log` values('80','81','0.01','0','0','0');");
E_D("replace into `ecs_pay_log` values('81','82','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('82','83','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('83','84','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('84','85','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('85','86','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('86','87','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('87','88','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('88','89','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('89','90','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('90','91','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('91','92','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('92','93','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('93','94','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('94','95','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('95','96','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('96','97','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('97','98','0.01','0','0','0');");
E_D("replace into `ecs_pay_log` values('98','96','15.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('99','99','0.01','0','0','0');");
E_D("replace into `ecs_pay_log` values('100','100','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('101','101','99.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('102','102','88.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('103','103','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('104','104','183.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('105','105','156.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('106','106','108.00','0','0','0');");

require("../../inc/footer.php");
?>