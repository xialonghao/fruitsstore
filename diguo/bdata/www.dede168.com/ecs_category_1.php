<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_category`;");
E_C("CREATE TABLE `ecs_category` (
  `cat_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(90) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `cat_desc` varchar(255) NOT NULL DEFAULT '',
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '50',
  `template_file` varchar(50) NOT NULL DEFAULT '',
  `measure_unit` varchar(15) NOT NULL DEFAULT '',
  `show_in_nav` tinyint(1) NOT NULL DEFAULT '0',
  `style` varchar(150) NOT NULL,
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `grade` tinyint(4) NOT NULL DEFAULT '0',
  `filter_attr` varchar(255) NOT NULL DEFAULT '0',
  `is_top_style` int(3) unsigned NOT NULL DEFAULT '0',
  `is_top_show` int(3) unsigned NOT NULL DEFAULT '0',
  `cat_ico` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=130 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_category` values('1','酒水饮料','','','0','2','','','1','','1','0','','0','0','1449088848823694266.png');");
E_D("replace into `ecs_category` values('2','生鲜食品','','','0','1','','','1','','1','5','','0','0','1449088788518670880.png');");
E_D("replace into `ecs_category` values('5','粮油副食','','','0','3','','','0','','1','0','','0','0','1449088901458193225.png');");
E_D("replace into `ecs_category` values('6','天然干货','','','0','7','','','0','','1','0','','0','0','1449089297229428349.png');");
E_D("replace into `ecs_category` values('7','精选茗茶','','','0','10','','','0','','1','0','','0','0','1449089358084135937.png');");
E_D("replace into `ecs_category` values('15','精品肉类','','','2','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('9','休闲食品','','','0','5','','','0','','1','0','','0','0','1449089137240745101.png');");
E_D("replace into `ecs_category` values('11','蔬菜水果','','','0','4','','','0','','1','0','','0','0','1449088957941770398.png');");
E_D("replace into `ecs_category` values('12','奶类食品','','','0','6','','','0','','1','0','','0','0','1449089235904530709.png');");
E_D("replace into `ecs_category` values('16','海鲜水产','','','2','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('17','蛋制品','','','2','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('18','叶菜类','','','2','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('19','根茎类','','','2','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('20','茄果类','','','2','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('21','菌菇类','','','2','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('22','进口生鲜','','','2','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('23','白酒','','','1','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('24','葡萄酒','','','1','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('25','洋酒','','','1','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('26','啤酒','','','1','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('27','其他酒品','','','1','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('28','饮料/水','','','1','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('29','红酒','','','1','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('30','食用油','','','5','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('31','米面杂粮','','','5','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('32','厨房调料','','','5','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('33','南北干货','','','5','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('34','方便速食','','','5','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('35','调味品','','','5','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('36','休闲零食','','','9','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('37','糖果','','','9','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('38','巧克力','','','9','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('39','肉干肉脯/豆干','','','9','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('40','鱿鱼丝/鱼干','','','9','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('41','有机蔬菜','','','11','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('42','精选蔬菜','','','11','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('43','进口水果','','','11','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('44','国产水果','','','11','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('45','进口奶品','','','12','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('46','国产奶品','','','12','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('47','奶粉','','','12','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('48','有机奶','','','12','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('49','原料奶','','','12','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('53','菌菇类','','','6','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('54','腌干海产','','','6','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('55','汤料','','','6','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('56','豆类','','','6','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('57','干菜/菜干','','','6','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('58','干果/果干','','','6','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('59','豆制品','','','6','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('60','腊味','','','6','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('61','白茶','','','7','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('62','红茶','','','7','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('63','绿茶','','','7','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('64','羊肉','','','15','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('65','禽类','','','15','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('66','猪肉','','','15','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('67','牛肉','','','15','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('68','参鲍','','','16','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('69','鱼','','','16','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('70','虾','','','16','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('71','蟹/贝','','','16','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('72','松花蛋/咸鸭蛋','','','17','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('73','鸡蛋','','','17','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('74','生菜','','','18','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('75','菠菜','','','18','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('76','圆椒','','','18','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('77','西兰花','','','18','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('78','其他品牌','','','27','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('79','黄酒','','','27','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('80','养生酒','','','27','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('81','白兰地','','','29','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('82','威士忌','','','29','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('83','五粮液','','','23','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('84','泸州老窖','','','23','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('85','茅台','','','23','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('86','其他食用油','','','30','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('87','菜仔油','','','30','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('88','花生油','','','30','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('89','橄榄油','','','30','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('90','礼盒','','','30','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('91','面粉/面条','','','31','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('92','大米','','','31','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('93','意大利面','','','31','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('94','调味油/汁','','','32','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('95','酱油/醋','','','32','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('96','西红柿','','','41','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('97','韭菜','','','41','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('98','青菜','','','41','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('99','甘蓝','','','42','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('100','胡萝卜','','','42','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('101','黄瓜','','','42','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('102','火龙果','','','43','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('103','菠萝蜜','','','43','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('104','奇异果','','','43','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('105','水果礼盒','','','44','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('106','苹果','','','44','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('107','雪梨','','','44','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('108','果冻','','','36','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('109','枣类','','','36','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('110','蜜饯','','','36','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('111','肉类零食','','','36','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('112','坚果炒货','','','36','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('113','创意喜糖','','','37','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('114','口香糖','','','37','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('115','软糖','','','37','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('116','棒棒糖','','','37','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('117','夹心巧克力','','','38','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('118','白巧克力','','','38','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('119','松露巧克力','','','38','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('120','黑巧克力','','','38','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('121','牛肉干','','','39','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('122','猪肉脯','','','39','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('123','牛肉粒','','','39','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('124','猪肉干','','','39','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('125','鱿鱼足','','','40','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('126','鱿鱼丝','','','40','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('127','墨鱼/乌贼','','','40','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('128','鱿鱼仔','','','40','50','','','0','','1','0','','0','0','');");
E_D("replace into `ecs_category` values('129','鱿鱼片','','','40','50','','','0','','1','0','','0','0','');");

require("../../inc/footer.php");
?>