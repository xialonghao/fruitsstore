<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_gallery`;");
E_C("CREATE TABLE `ecs_goods_gallery` (
  `img_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `img_url` varchar(255) NOT NULL DEFAULT '',
  `img_desc` varchar(255) NOT NULL DEFAULT '',
  `thumb_url` varchar(255) NOT NULL DEFAULT '',
  `img_original` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`img_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=239 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_gallery` values('223','30','images/201512/goods_img/30_P_1448948663450.jpg','','images/201512/thumb_img/30_thumb_P_1448948663277.jpg','images/201512/source_img/30_P_1448948663264.jpg');");
E_D("replace into `ecs_goods_gallery` values('236','1','images/201512/goods_img/1_P_1449024889889.jpg','','images/201512/thumb_img/1_thumb_P_1449024889723.jpg','images/201512/source_img/1_P_1449024889850.jpg');");
E_D("replace into `ecs_goods_gallery` values('235','1','images/201512/goods_img/1_P_1449024889264.jpg','','images/201512/thumb_img/1_thumb_P_1449024889757.jpg','images/201512/source_img/1_P_1449024889093.jpg');");
E_D("replace into `ecs_goods_gallery` values('172','2','images/201512/goods_img/2_P_1448945810202.jpg','','images/201512/thumb_img/2_thumb_P_1448945810984.jpg','images/201512/source_img/2_P_1448945810478.jpg');");
E_D("replace into `ecs_goods_gallery` values('171','2','images/201512/goods_img/2_P_1448945810814.jpg','','images/201512/thumb_img/2_thumb_P_1448945810585.jpg','images/201512/source_img/2_P_1448945810307.jpg');");
E_D("replace into `ecs_goods_gallery` values('170','3','images/201512/goods_img/3_P_1448945490837.jpg','','images/201512/thumb_img/3_thumb_P_1448945490156.jpg','images/201512/source_img/3_P_1448945490079.jpg');");
E_D("replace into `ecs_goods_gallery` values('169','3','images/201512/goods_img/3_P_1448945490084.jpg','','images/201512/thumb_img/3_thumb_P_1448945490095.jpg','images/201512/source_img/3_P_1448945490486.jpg');");
E_D("replace into `ecs_goods_gallery` values('168','4','images/201512/goods_img/4_P_1448945381985.jpg','','images/201512/thumb_img/4_thumb_P_1448945381493.jpg','images/201512/source_img/4_P_1448945381797.jpg');");
E_D("replace into `ecs_goods_gallery` values('167','4','images/201512/goods_img/4_P_1448945381013.jpg','','images/201512/thumb_img/4_thumb_P_1448945381781.jpg','images/201512/source_img/4_P_1448945381044.jpg');");
E_D("replace into `ecs_goods_gallery` values('166','5','images/201512/goods_img/5_P_1448945270390.jpg','','images/201512/thumb_img/5_thumb_P_1448945270575.jpg','images/201512/source_img/5_P_1448945270727.jpg');");
E_D("replace into `ecs_goods_gallery` values('165','5','images/201512/goods_img/5_P_1448945270067.jpg','','images/201512/thumb_img/5_thumb_P_1448945270970.jpg','images/201512/source_img/5_P_1448945270507.jpg');");
E_D("replace into `ecs_goods_gallery` values('164','5','images/201512/goods_img/5_P_1448945270432.jpg','','images/201512/thumb_img/5_thumb_P_1448945270125.jpg','images/201512/source_img/5_P_1448945270511.jpg');");
E_D("replace into `ecs_goods_gallery` values('163','6','images/201512/goods_img/6_P_1448945167279.jpg','','images/201512/thumb_img/6_thumb_P_1448945167018.jpg','images/201512/source_img/6_P_1448945167258.jpg');");
E_D("replace into `ecs_goods_gallery` values('162','6','images/201512/goods_img/6_P_1448945167015.jpg','','images/201512/thumb_img/6_thumb_P_1448945167107.jpg','images/201512/source_img/6_P_1448945167717.jpg');");
E_D("replace into `ecs_goods_gallery` values('161','7','images/201512/goods_img/7_P_1448945104883.jpg','','images/201512/thumb_img/7_thumb_P_1448945104959.jpg','images/201512/source_img/7_P_1448945104912.jpg');");
E_D("replace into `ecs_goods_gallery` values('160','7','images/201512/goods_img/7_P_1448945104734.jpg','','images/201512/thumb_img/7_thumb_P_1448945104284.jpg','images/201512/source_img/7_P_1448945104050.jpg');");
E_D("replace into `ecs_goods_gallery` values('159','8','images/201512/goods_img/8_P_1448945032810.jpg','','images/201512/thumb_img/8_thumb_P_1448945032387.jpg','images/201512/source_img/8_P_1448945032833.jpg');");
E_D("replace into `ecs_goods_gallery` values('158','8','images/201512/goods_img/8_P_1448945032646.jpg','','images/201512/thumb_img/8_thumb_P_1448945032266.jpg','images/201512/source_img/8_P_1448945032090.jpg');");
E_D("replace into `ecs_goods_gallery` values('156','9','images/201512/goods_img/9_P_1448944791617.jpg','','images/201512/thumb_img/9_thumb_P_1448944791262.jpg','images/201512/source_img/9_P_1448944791045.jpg');");
E_D("replace into `ecs_goods_gallery` values('155','9','images/201512/goods_img/9_P_1448944791129.jpg','','images/201512/thumb_img/9_thumb_P_1448944791722.jpg','images/201512/source_img/9_P_1448944791736.jpg');");
E_D("replace into `ecs_goods_gallery` values('154','9','images/201512/goods_img/9_P_1448944791077.jpg','','images/201512/thumb_img/9_thumb_P_1448944791315.jpg','images/201512/source_img/9_P_1448944791453.jpg');");
E_D("replace into `ecs_goods_gallery` values('152','10','images/201512/goods_img/10_P_1448944572085.jpg','','images/201512/thumb_img/10_thumb_P_1448944572281.jpg','images/201512/source_img/10_P_1448944572215.jpg');");
E_D("replace into `ecs_goods_gallery` values('151','10','images/201512/goods_img/10_P_1448944572532.jpg','','images/201512/thumb_img/10_thumb_P_1448944572572.jpg','images/201512/source_img/10_P_1448944572522.jpg');");
E_D("replace into `ecs_goods_gallery` values('150','11','images/201512/goods_img/11_P_1448944388277.jpg','','images/201512/thumb_img/11_thumb_P_1448944388801.jpg','images/201512/source_img/11_P_1448944388694.jpg');");
E_D("replace into `ecs_goods_gallery` values('149','11','images/201512/goods_img/11_P_1448944388034.jpg','','images/201512/thumb_img/11_thumb_P_1448944388341.jpg','images/201512/source_img/11_P_1448944388506.jpg');");
E_D("replace into `ecs_goods_gallery` values('148','11','images/201512/goods_img/11_P_1448944388201.jpg','','images/201512/thumb_img/11_thumb_P_1448944388143.jpg','images/201512/source_img/11_P_1448944388449.jpg');");
E_D("replace into `ecs_goods_gallery` values('201','12','images/201512/goods_img/12_P_1448947547989.jpg','','images/201512/thumb_img/12_thumb_P_1448947547076.jpg','images/201512/source_img/12_P_1448947547749.jpg');");
E_D("replace into `ecs_goods_gallery` values('217','33','images/201512/goods_img/33_P_1448948479966.jpg','','images/201512/thumb_img/33_thumb_P_1448948479645.jpg','images/201512/source_img/33_P_1448948479266.jpg');");
E_D("replace into `ecs_goods_gallery` values('198','13','images/201512/goods_img/13_P_1448947460386.jpg','','images/201512/thumb_img/13_thumb_P_1448947460814.jpg','images/201512/source_img/13_P_1448947460156.jpg');");
E_D("replace into `ecs_goods_gallery` values('199','13','images/201512/goods_img/13_P_1448947460276.jpg','','images/201512/thumb_img/13_thumb_P_1448947460472.jpg','images/201512/source_img/13_P_1448947460959.jpg');");
E_D("replace into `ecs_goods_gallery` values('196','14','images/201512/goods_img/14_P_1448947354031.jpg','','images/201512/thumb_img/14_thumb_P_1448947354520.jpg','images/201512/source_img/14_P_1448947354029.jpg');");
E_D("replace into `ecs_goods_gallery` values('197','14','images/201512/goods_img/14_P_1448947354433.jpg','','images/201512/thumb_img/14_thumb_P_1448947354973.jpg','images/201512/source_img/14_P_1448947354845.jpg');");
E_D("replace into `ecs_goods_gallery` values('200','13','images/201512/goods_img/13_P_1448947460353.jpg','','images/201512/thumb_img/13_thumb_P_1448947460246.jpg','images/201512/source_img/13_P_1448947460612.jpg');");
E_D("replace into `ecs_goods_gallery` values('194','15','images/201512/goods_img/15_P_1448947257324.jpg','','images/201512/thumb_img/15_thumb_P_1448947257300.jpg','images/201512/source_img/15_P_1448947257445.jpg');");
E_D("replace into `ecs_goods_gallery` values('195','15','images/201512/goods_img/15_P_1448947257580.jpg','','images/201512/thumb_img/15_thumb_P_1448947257506.jpg','images/201512/source_img/15_P_1448947257219.jpg');");
E_D("replace into `ecs_goods_gallery` values('193','16','images/201512/goods_img/16_P_1448947194687.jpg','','images/201512/thumb_img/16_thumb_P_1448947194737.jpg','images/201512/source_img/16_P_1448947194413.jpg');");
E_D("replace into `ecs_goods_gallery` values('192','17','images/201512/goods_img/17_P_1448947102246.jpg','','images/201512/thumb_img/17_thumb_P_1448947102273.jpg','images/201512/source_img/17_P_1448947102672.jpg');");
E_D("replace into `ecs_goods_gallery` values('220','31','images/201512/goods_img/31_P_1448948598947.jpg','','images/201512/thumb_img/31_thumb_P_1448948598116.jpg','images/201512/source_img/31_P_1448948598706.jpg');");
E_D("replace into `ecs_goods_gallery` values('191','18','images/201512/goods_img/18_P_1448947011435.jpg','','images/201512/thumb_img/18_thumb_P_1448947011294.jpg','images/201512/source_img/18_P_1448947011167.jpg');");
E_D("replace into `ecs_goods_gallery` values('189','19','images/201512/goods_img/19_P_1448946951581.jpg','','images/201512/thumb_img/19_thumb_P_1448946951049.jpg','images/201512/source_img/19_P_1448946951968.jpg');");
E_D("replace into `ecs_goods_gallery` values('190','19','images/201512/goods_img/19_P_1448946951726.jpg','','images/201512/thumb_img/19_thumb_P_1448946951438.jpg','images/201512/source_img/19_P_1448946951343.jpg');");
E_D("replace into `ecs_goods_gallery` values('188','20','images/201512/goods_img/20_P_1448946850602.jpg','','images/201512/thumb_img/20_thumb_P_1448946850312.jpg','images/201512/source_img/20_P_1448946850770.jpg');");
E_D("replace into `ecs_goods_gallery` values('187','21','images/201512/goods_img/21_P_1448946793276.jpg','','images/201512/thumb_img/21_thumb_P_1448946793846.jpg','images/201512/source_img/21_P_1448946793831.jpg');");
E_D("replace into `ecs_goods_gallery` values('186','21','images/201512/goods_img/21_P_1448946793153.jpg','','images/201512/thumb_img/21_thumb_P_1448946793043.jpg','images/201512/source_img/21_P_1448946793384.jpg');");
E_D("replace into `ecs_goods_gallery` values('185','22','images/201512/goods_img/22_P_1448946729629.jpg','','images/201512/thumb_img/22_thumb_P_1448946729509.jpg','images/201512/source_img/22_P_1448946729582.jpg');");
E_D("replace into `ecs_goods_gallery` values('210','23','images/201512/goods_img/23_P_1448948070348.jpg','','images/201512/thumb_img/23_thumb_P_1448948070563.jpg','images/201512/source_img/23_P_1448948070542.jpg');");
E_D("replace into `ecs_goods_gallery` values('208','24','images/201512/goods_img/24_P_1448948023823.jpg','','images/201512/thumb_img/24_thumb_P_1448948023376.jpg','images/201512/source_img/24_P_1448948023212.jpg');");
E_D("replace into `ecs_goods_gallery` values('209','24','images/201512/goods_img/24_P_1448948023977.jpg','','images/201512/thumb_img/24_thumb_P_1448948023944.jpg','images/201512/source_img/24_P_1448948023305.jpg');");
E_D("replace into `ecs_goods_gallery` values('207','25','images/201512/goods_img/25_P_1448947875346.jpg','','images/201512/thumb_img/25_thumb_P_1448947875411.jpg','images/201512/source_img/25_P_1448947875977.jpg');");
E_D("replace into `ecs_goods_gallery` values('206','26','images/201512/goods_img/26_P_1448947825754.jpg','','images/201512/thumb_img/26_thumb_P_1448947825696.jpg','images/201512/source_img/26_P_1448947825541.jpg');");
E_D("replace into `ecs_goods_gallery` values('205','27','images/201512/goods_img/27_P_1448947771805.jpg','','images/201512/thumb_img/27_thumb_P_1448947771194.jpg','images/201512/source_img/27_P_1448947771187.jpg');");
E_D("replace into `ecs_goods_gallery` values('203','28','images/201512/goods_img/28_P_1448947699948.jpg','','images/201512/thumb_img/28_thumb_P_1448947699767.jpg','images/201512/source_img/28_P_1448947699059.jpg');");
E_D("replace into `ecs_goods_gallery` values('204','28','images/201512/goods_img/28_P_1448947699777.jpg','','images/201512/thumb_img/28_thumb_P_1448947699486.jpg','images/201512/source_img/28_P_1448947699351.jpg');");
E_D("replace into `ecs_goods_gallery` values('202','29','images/201512/goods_img/29_P_1448947631994.jpg','','images/201512/thumb_img/29_thumb_P_1448947631419.jpg','images/201512/source_img/29_P_1448947631335.jpg');");
E_D("replace into `ecs_goods_gallery` values('221','30','images/201512/goods_img/30_P_1448948662571.jpg','','images/201512/thumb_img/30_thumb_P_1448948662539.jpg','images/201512/source_img/30_P_1448948662570.jpg');");
E_D("replace into `ecs_goods_gallery` values('222','30','images/201512/goods_img/30_P_1448948663221.jpg','','images/201512/thumb_img/30_thumb_P_1448948663062.jpg','images/201512/source_img/30_P_1448948663926.jpg');");
E_D("replace into `ecs_goods_gallery` values('219','31','images/201512/goods_img/31_P_1448948598475.jpg','','images/201512/thumb_img/31_thumb_P_1448948598050.jpg','images/201512/source_img/31_P_1448948598251.jpg');");
E_D("replace into `ecs_goods_gallery` values('218','32','images/201512/goods_img/32_P_1448948525620.jpg','','images/201512/thumb_img/32_thumb_P_1448948525192.jpg','images/201512/source_img/32_P_1448948525486.jpg');");
E_D("replace into `ecs_goods_gallery` values('216','33','images/201512/goods_img/33_P_1448948479886.jpg','','images/201512/thumb_img/33_thumb_P_1448948479397.jpg','images/201512/source_img/33_P_1448948479545.jpg');");
E_D("replace into `ecs_goods_gallery` values('215','34','images/201512/goods_img/34_P_1448948399009.jpg','','images/201512/thumb_img/34_thumb_P_1448948399392.jpg','images/201512/source_img/34_P_1448948399217.jpg');");
E_D("replace into `ecs_goods_gallery` values('214','35','images/201512/goods_img/35_P_1448948333610.jpg','','images/201512/thumb_img/35_thumb_P_1448948333758.jpg','images/201512/source_img/35_P_1448948333553.jpg');");
E_D("replace into `ecs_goods_gallery` values('213','35','images/201512/goods_img/35_P_1448948333313.jpg','','images/201512/thumb_img/35_thumb_P_1448948333120.jpg','images/201512/source_img/35_P_1448948333684.jpg');");
E_D("replace into `ecs_goods_gallery` values('211','36','images/201512/goods_img/36_P_1448948234405.jpg','','images/201512/thumb_img/36_thumb_P_1448948234986.jpg','images/201512/source_img/36_P_1448948234944.jpg');");
E_D("replace into `ecs_goods_gallery` values('212','36','images/201512/goods_img/36_P_1448948234250.jpg','','images/201512/thumb_img/36_thumb_P_1448948234206.jpg','images/201512/source_img/36_P_1448948234692.jpg');");
E_D("replace into `ecs_goods_gallery` values('237','1','images/201512/goods_img/1_P_1449024889726.jpg','','images/201512/thumb_img/1_thumb_P_1449024889686.jpg','images/201512/source_img/1_P_1449024889652.jpg');");
E_D("replace into `ecs_goods_gallery` values('231','37','images/201512/goods_img/37_P_1448949284365.jpg','','images/201512/thumb_img/37_thumb_P_1448949284880.jpg','images/201512/source_img/37_P_1448949284451.jpg');");
E_D("replace into `ecs_goods_gallery` values('230','38','images/201512/goods_img/38_P_1448949220255.jpg','','images/201512/thumb_img/38_thumb_P_1448949220567.jpg','images/201512/source_img/38_P_1448949220225.jpg');");
E_D("replace into `ecs_goods_gallery` values('238','1','images/201512/goods_img/1_P_1449024889018.jpg','','images/201512/thumb_img/1_thumb_P_1449024889930.jpg','images/201512/source_img/1_P_1449024889447.jpg');");
E_D("replace into `ecs_goods_gallery` values('229','39','images/201512/goods_img/39_P_1448949115481.jpg','','images/201512/thumb_img/39_thumb_P_1448949115591.jpg','images/201512/source_img/39_P_1448949115980.jpg');");
E_D("replace into `ecs_goods_gallery` values('228','40','images/201512/goods_img/40_P_1448949038702.jpg','','images/201512/thumb_img/40_thumb_P_1448949038016.jpg','images/201512/source_img/40_P_1448949038239.jpg');");
E_D("replace into `ecs_goods_gallery` values('227','41','images/201512/goods_img/41_P_1448948980358.jpg','','images/201512/thumb_img/41_thumb_P_1448948981132.jpg','images/201512/source_img/41_P_1448948980362.jpg');");
E_D("replace into `ecs_goods_gallery` values('226','42','images/201512/goods_img/42_P_1448948895193.jpg','','images/201512/thumb_img/42_thumb_P_1448948895489.jpg','images/201512/source_img/42_P_1448948895244.jpg');");
E_D("replace into `ecs_goods_gallery` values('224','43','images/201512/goods_img/43_P_1448948762645.jpg','','images/201512/thumb_img/43_thumb_P_1448948762213.jpg','images/201512/source_img/43_P_1448948762403.jpg');");
E_D("replace into `ecs_goods_gallery` values('225','44','images/201512/goods_img/44_P_1448948850187.jpg','','images/201512/thumb_img/44_thumb_P_1448948850019.jpg','images/201512/source_img/44_P_1448948850461.jpg');");
E_D("replace into `ecs_goods_gallery` values('184','45','images/201512/goods_img/45_P_1448946661303.jpg','','images/201512/thumb_img/45_thumb_P_1448946661051.jpg','images/201512/source_img/45_P_1448946661250.jpg');");
E_D("replace into `ecs_goods_gallery` values('182','46','images/201512/goods_img/46_P_1448946598711.jpg','','images/201512/thumb_img/46_thumb_P_1448946598444.jpg','images/201512/source_img/46_P_1448946598236.jpg');");
E_D("replace into `ecs_goods_gallery` values('183','46','images/201512/goods_img/46_P_1448946598301.jpg','','images/201512/thumb_img/46_thumb_P_1448946598846.jpg','images/201512/source_img/46_P_1448946598009.jpg');");
E_D("replace into `ecs_goods_gallery` values('176','47','images/201512/goods_img/47_P_1448946213263.jpg','','images/201512/thumb_img/47_thumb_P_1448946213440.jpg','images/201512/source_img/47_P_1448946213457.jpg');");
E_D("replace into `ecs_goods_gallery` values('177','47','images/201512/goods_img/47_P_1448946213157.jpg','','images/201512/thumb_img/47_thumb_P_1448946213100.jpg','images/201512/source_img/47_P_1448946213557.jpg');");
E_D("replace into `ecs_goods_gallery` values('143','48','images/201512/goods_img/48_P_1448943988970.jpg','','images/201512/thumb_img/48_thumb_P_1448943988269.jpg','images/201512/source_img/48_P_1448943988281.jpg');");
E_D("replace into `ecs_goods_gallery` values('142','48','images/201512/goods_img/48_P_1448943988898.jpg','','images/201512/thumb_img/48_thumb_P_1448943988203.jpg','images/201512/source_img/48_P_1448943988860.jpg');");
E_D("replace into `ecs_goods_gallery` values('136','49','images/201511/goods_img/49_P_1448162819889.jpg','','images/201511/thumb_img/49_thumb_P_1448162819323.jpg','images/201511/source_img/49_P_1448162819972.jpg');");
E_D("replace into `ecs_goods_gallery` values('234','1','images/201512/goods_img/1_P_1449024889287.jpg','','images/201512/thumb_img/1_thumb_P_1449024889543.jpg','images/201512/source_img/1_P_1449024889948.jpg');");
E_D("replace into `ecs_goods_gallery` values('181','50','images/201512/goods_img/50_P_1448946543091.jpg','','images/201512/thumb_img/50_thumb_P_1448946543313.jpg','images/201512/source_img/50_P_1448946543708.jpg');");
E_D("replace into `ecs_goods_gallery` values('180','50','images/201512/goods_img/50_P_1448946542182.jpg','','images/201512/thumb_img/50_thumb_P_1448946542880.jpg','images/201512/source_img/50_P_1448946542880.jpg');");
E_D("replace into `ecs_goods_gallery` values('179','51','images/201512/goods_img/51_P_1448946466595.jpg','','images/201512/thumb_img/51_thumb_P_1448946466873.jpg','images/201512/source_img/51_P_1448946466033.jpg');");
E_D("replace into `ecs_goods_gallery` values('178','51','images/201512/goods_img/51_P_1448946466208.jpg','','images/201512/thumb_img/51_thumb_P_1448946466811.jpg','images/201512/source_img/51_P_1448946466928.jpg');");
E_D("replace into `ecs_goods_gallery` values('144','48','images/201512/goods_img/48_P_1448943988439.jpg','','images/201512/thumb_img/48_thumb_P_1448943988595.jpg','images/201512/source_img/48_P_1448943988085.jpg');");
E_D("replace into `ecs_goods_gallery` values('153','10','images/201512/goods_img/10_P_1448944572872.jpg','','images/201512/thumb_img/10_thumb_P_1448944572724.jpg','images/201512/source_img/10_P_1448944572086.jpg');");
E_D("replace into `ecs_goods_gallery` values('157','9','images/201512/goods_img/9_P_1448944791229.jpg','','images/201512/thumb_img/9_thumb_P_1448944791186.jpg','images/201512/source_img/9_P_1448944791419.jpg');");

require("../../inc/footer.php");
?>