<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_message`;");
E_C("CREATE TABLE `ecs_weixin_message` (
  `id` int(9) unsigned NOT NULL AUTO_INCREMENT,
  `wxid` char(28) NOT NULL,
  `w_message` text NOT NULL,
  `message` text NOT NULL,
  `belong` int(9) unsigned NOT NULL,
  `dateline` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `wxid` (`wxid`)
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_message` values('1','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:','0','1448432277');");
E_D("replace into `ecs_weixin_message` values('2','oG9l1t6rvjOCmUHiXQGvvVwpviWM','图文消息','','1','1448432277');");
E_D("replace into `ecs_weixin_message` values('3','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:subscribe','0','1448435379');");
E_D("replace into `ecs_weixin_message` values('4','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:','0','1448435402');");
E_D("replace into `ecs_weixin_message` values('5','oG9l1t6rvjOCmUHiXQGvvVwpviWM','图文消息','','0','1448435402');");
E_D("replace into `ecs_weixin_message` values('6','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:subscribe','0','1448435527');");
E_D("replace into `ecs_weixin_message` values('7','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:member','0','1448435693');");
E_D("replace into `ecs_weixin_message` values('8','oG9l1t6rvjOCmUHiXQGvvVwpviWM','没有搜索到\"member\"的商品\r\n我们为您推荐:<a href=''http://sp.codes5.com/wechat/oauth/wxch_oauths.php?uri=http://sp.codes5.com/mobile/goods.php?id=3''>贵宾奶糕比熊博美犬主粮2KG美毛天然粮</a>','','0','1448435693');");
E_D("replace into `ecs_weixin_message` values('9','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:cxbd','0','1448435699');");
E_D("replace into `ecs_weixin_message` values('10','oG9l1t6rvjOCmUHiXQGvvVwpviWM','没有搜索到\"cxbd\"的商品\r\n我们为您推荐:<a href=''http://sp.codes5.com/wechat/oauth/wxch_oauths.php?uri=http://sp.codes5.com/mobile/goods.php?id=49''>1分钱支付测试商品</a>','','0','1448435699');");
E_D("replace into `ecs_weixin_message` values('11','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:cxbd','0','1448435708');");
E_D("replace into `ecs_weixin_message` values('12','oG9l1t6rvjOCmUHiXQGvvVwpviWM','没有搜索到\"cxbd\"的商品\r\n我们为您推荐:<a href=''http://sp.codes5.com/wechat/oauth/wxch_oauths.php?uri=http://sp.codes5.com/mobile/goods.php?id=3''>贵宾奶糕比熊博美犬主粮2KG美毛天然粮</a>','','0','1448435708');");
E_D("replace into `ecs_weixin_message` values('13','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:promote','0','1448435716');");
E_D("replace into `ecs_weixin_message` values('14','oG9l1t6rvjOCmUHiXQGvvVwpviWM','没有搜索到\"promote\"的商品\r\n我们为您推荐:<a href=''http://sp.codes5.com/wechat/oauth/wxch_oauths.php?uri=http://sp.codes5.com/mobile/goods.php?id=42''>带包包棉夹克宠物服饰小狗衣服</a>','','0','1448435716');");
E_D("replace into `ecs_weixin_message` values('15','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:','0','1448435736');");
E_D("replace into `ecs_weixin_message` values('16','oG9l1t6rvjOCmUHiXQGvvVwpviWM','图文消息','','0','1448435736');");
E_D("replace into `ecs_weixin_message` values('17','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:subscribe','0','1448435763');");
E_D("replace into `ecs_weixin_message` values('18','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:cxbd','0','1448435769');");
E_D("replace into `ecs_weixin_message` values('19','oG9l1t6rvjOCmUHiXQGvvVwpviWM','没有搜索到\"cxbd\"的商品\r\n我们为您推荐:<a href=''http://sp.codes5.com/wechat/oauth/wxch_oauths.php?uri=http://sp.codes5.com/mobile/goods.php?id=35''>狗狗拔毛粉泰迪贵宾犬耳朵清洁耳道消炎杀菌50g</a>','','0','1448435769');");
E_D("replace into `ecs_weixin_message` values('20','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:','0','1448436009');");
E_D("replace into `ecs_weixin_message` values('21','oG9l1t6rvjOCmUHiXQGvvVwpviWM','图文消息','','0','1448436009');");
E_D("replace into `ecs_weixin_message` values('22','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:bd','0','1448436049');");
E_D("replace into `ecs_weixin_message` values('23','oG9l1t6rvjOCmUHiXQGvvVwpviWM','您已经绑定会员：wshop7\r\n如需重新绑定请<a href=\"http://sp.codes5.com/mobile/user_wxch.php?act=login&wxid=oG9l1t6rvjOCmUHiXQGvvVwpviWM\">点击绑定会员</a>\r\n如果忘记密码请<a href=\"http://sp.codes5.com/mobile/user_wxch.php?act=reset_weixin_password&wxid=oG9l1t6rvjOCmUHiXQGvvVwpviWM\">点击重置密码</a>','','0','1448436049');");
E_D("replace into `ecs_weixin_message` values('24','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:news','0','1448436083');");
E_D("replace into `ecs_weixin_message` values('25','oG9l1t6rvjOCmUHiXQGvvVwpviWM','图文消息','','0','1448436083');");
E_D("replace into `ecs_weixin_message` values('26','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:bd','0','1448436203');");
E_D("replace into `ecs_weixin_message` values('27','oG9l1t6rvjOCmUHiXQGvvVwpviWM','您已经绑定会员：wshop7\r\n如需重新绑定请<a href=\"http://sp.codes5.com/mobile/user_wxch.php?act=login&wxid=oG9l1t6rvjOCmUHiXQGvvVwpviWM\">点击绑定会员</a>\r\n如果忘记密码请<a href=\"http://sp.codes5.com/mobile/user_wxch.php?act=reset_weixin_password&wxid=oG9l1t6rvjOCmUHiXQGvvVwpviWM\">点击重置密码</a>','','0','1448436203');");
E_D("replace into `ecs_weixin_message` values('28','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:zjd','0','1448436222');");
E_D("replace into `ecs_weixin_message` values('29','oG9l1t6rvjOCmUHiXQGvvVwpviWM','图文消息','','0','1448436222');");
E_D("replace into `ecs_weixin_message` values('30','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:dzp','0','1448436228');");
E_D("replace into `ecs_weixin_message` values('31','oG9l1t6rvjOCmUHiXQGvvVwpviWM','图文消息','','0','1448436228');");
E_D("replace into `ecs_weixin_message` values('32','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:jfcx','0','1448436247');");
E_D("replace into `ecs_weixin_message` values('33','oG9l1t6rvjOCmUHiXQGvvVwpviWM','余额：0.00\r\n积分：65','','0','1448436247');");
E_D("replace into `ecs_weixin_message` values('34','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:ddcx','0','1448436256');");
E_D("replace into `ecs_weixin_message` values('35','oG9l1t6rvjOCmUHiXQGvvVwpviWM','您还没有订单','','0','1448436256');");
E_D("replace into `ecs_weixin_message` values('36','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:bd','0','1448436692');");
E_D("replace into `ecs_weixin_message` values('37','oG9l1t6rvjOCmUHiXQGvvVwpviWM','您已经绑定会员：wshop7\r\n如需重新绑定请<a href=\"http://sp.codes5.com/mobile/user_wxch.php?act=login&wxid=oG9l1t6rvjOCmUHiXQGvvVwpviWM\">点击绑定会员</a>\r\n如果忘记密码请<a href=\"http://sp.codes5.com/mobile/user_wxch.php?act=reset_weixin_password&wxid=oG9l1t6rvjOCmUHiXQGvvVwpviWM\">点击重置密码</a>','','0','1448436692');");
E_D("replace into `ecs_weixin_message` values('38','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:bd','0','1448436936');");
E_D("replace into `ecs_weixin_message` values('39','oG9l1t6rvjOCmUHiXQGvvVwpviWM','您已经绑定会员：aaaaa\r\n如需重新绑定请<a href=\"http://sp.codes5.com/mobile/user_wxch.php?act=login&wxid=oG9l1t6rvjOCmUHiXQGvvVwpviWM\">点击绑定会员</a>\r\n如果忘记密码请<a href=\"http://sp.codes5.com/mobile/user_wxch.php?act=reset_weixin_password&wxid=oG9l1t6rvjOCmUHiXQGvvVwpviWM\">点击重置密码</a>','','0','1448436936');");
E_D("replace into `ecs_weixin_message` values('40','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:qrcode','0','1448437216');");
E_D("replace into `ecs_weixin_message` values('41','oG9l1t6rvjOCmUHiXQGvvVwpviWM','图文消息','','0','1448437218');");
E_D("replace into `ecs_weixin_message` values('42','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:http://sp.codes5.com/wechat/oauth/wxch_oauth.php?oid=1','0','1448437225');");
E_D("replace into `ecs_weixin_message` values('43','oG9l1t6rvjOCmUHiXQGvvVwpviWM','没有搜索到\"http://sp.codes5.com/wechat/oauth/wxch_oauth.php?oid=1\"的商品\r\n我们为您推荐:<a href=''http://sp.codes5.com/wechat/oauth/wxch_oauths.php?uri=http://sp.codes5.com/mobile/goods.php?id=3''>贵宾奶糕比熊博美犬主粮2KG美毛天然粮</a>','','0','1448437225');");
E_D("replace into `ecs_weixin_message` values('44','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:http://sp.codes5.com/wechat/oauth/wxch_oauth.php?oid=1','0','1448437237');");
E_D("replace into `ecs_weixin_message` values('45','oG9l1t6rvjOCmUHiXQGvvVwpviWM','没有搜索到\"http://sp.codes5.com/wechat/oauth/wxch_oauth.php?oid=1\"的商品\r\n我们为您推荐:<a href=''http://sp.codes5.com/wechat/oauth/wxch_oauths.php?uri=http://sp.codes5.com/mobile/goods.php?id=49''>1分钱支付测试商品</a>','','0','1448437237');");
E_D("replace into `ecs_weixin_message` values('46','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:','0','1448437640');");
E_D("replace into `ecs_weixin_message` values('47','oG9l1t6rvjOCmUHiXQGvvVwpviWM','图文消息','','0','1448437640');");
E_D("replace into `ecs_weixin_message` values('48','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:subscribe','0','1448437674');");
E_D("replace into `ecs_weixin_message` values('49','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:best','0','1448438281');");
E_D("replace into `ecs_weixin_message` values('50','oG9l1t6rvjOCmUHiXQGvvVwpviWM','图文消息','','0','1448438281');");
E_D("replace into `ecs_weixin_message` values('51','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:bd','0','1448438854');");
E_D("replace into `ecs_weixin_message` values('52','oG9l1t6rvjOCmUHiXQGvvVwpviWM','您已经绑定会员：aaaaa\r\n如需重新绑定请<a href=\"http://sp.codes5.com/mobile/user_wxch.php?act=login&wxid=oG9l1t6rvjOCmUHiXQGvvVwpviWM\">点击绑定会员</a>\r\n如果忘记密码请<a href=\"http://sp.codes5.com/mobile/user_wxch.php?act=reset_weixin_password&wxid=oG9l1t6rvjOCmUHiXQGvvVwpviWM\">点击重置密码</a>','','0','1448438854');");
E_D("replace into `ecs_weixin_message` values('53','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:dzp','0','1448438889');");
E_D("replace into `ecs_weixin_message` values('54','oG9l1t6rvjOCmUHiXQGvvVwpviWM','图文消息','','0','1448438889');");
E_D("replace into `ecs_weixin_message` values('55','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:zjd','0','1448438919');");
E_D("replace into `ecs_weixin_message` values('56','oG9l1t6rvjOCmUHiXQGvvVwpviWM','图文消息','','0','1448438919');");
E_D("replace into `ecs_weixin_message` values('57','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:dzp','0','1448438951');");
E_D("replace into `ecs_weixin_message` values('58','oG9l1t6rvjOCmUHiXQGvvVwpviWM','图文消息','','0','1448438951');");
E_D("replace into `ecs_weixin_message` values('59','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:ddcx','0','1448439061');");
E_D("replace into `ecs_weixin_message` values('60','oG9l1t6rvjOCmUHiXQGvvVwpviWM','图文消息','','0','1448439061');");
E_D("replace into `ecs_weixin_message` values('61','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:http://sp.codes5.com/wechat/oauth/wxch_oauth.php?oid=1','0','1448439450');");
E_D("replace into `ecs_weixin_message` values('62','oG9l1t6rvjOCmUHiXQGvvVwpviWM','没有搜索到\"http://sp.codes5.com/wechat/oauth/wxch_oauth.php?oid=1\"的商品\r\n我们为您推荐:<a href=''http://sp.codes5.com/wechat/oauth/wxch_oauths.php?uri=http://sp.codes5.com/mobile/goods.php?id=5''>宝路中小型犬成犬牛肉通用犬粮7.5kg</a>','','0','1448439450');");
E_D("replace into `ecs_weixin_message` values('63','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:bd','0','1448449705');");
E_D("replace into `ecs_weixin_message` values('64','oG9l1t6rvjOCmUHiXQGvvVwpviWM','您已经绑定会员：aaaaa\r\n如需重新绑定请<a href=\"http://sp.codes5.com/mobile/user_wxch.php?act=login&wxid=oG9l1t6rvjOCmUHiXQGvvVwpviWM\">点击绑定会员</a>\r\n如果忘记密码请<a href=\"http://sp.codes5.com/mobile/user_wxch.php?act=reset_weixin_password&wxid=oG9l1t6rvjOCmUHiXQGvvVwpviWM\">点击重置密码</a>','','0','1448449705');");
E_D("replace into `ecs_weixin_message` values('65','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:qrcode','0','1448449751');");
E_D("replace into `ecs_weixin_message` values('66','oG9l1t6rvjOCmUHiXQGvvVwpviWM','图文消息','','0','1448449752');");
E_D("replace into `ecs_weixin_message` values('67','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:ewm','0','1448449778');");
E_D("replace into `ecs_weixin_message` values('68','oG9l1t6rvjOCmUHiXQGvvVwpviWM','M0Vs4XYydBgFZ2-QAMfT_dyTgryaPnP8K4n-Z2udS5lcaBPZsIuD9J0EJjOJksE5','','0','1448449780');");
E_D("replace into `ecs_weixin_message` values('69','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:ewm','0','1448449783');");
E_D("replace into `ecs_weixin_message` values('70','oG9l1t6rvjOCmUHiXQGvvVwpviWM','6c2I0KAQdQtnxnwY1c79Az-ZfCXVJyI9HYQSEY1OCktmpFmuSC2cylQWg6zuxg1b','','0','1448449784');");
E_D("replace into `ecs_weixin_message` values('71','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:qrcode','0','1448449793');");
E_D("replace into `ecs_weixin_message` values('72','oG9l1t6rvjOCmUHiXQGvvVwpviWM','图文消息','','0','1448449794');");
E_D("replace into `ecs_weixin_message` values('73','oG9l1t6rvjOCmUHiXQGvvVwpviWM','','menu:','0','1448682494');");
E_D("replace into `ecs_weixin_message` values('74','oG9l1t6rvjOCmUHiXQGvvVwpviWM','图文消息','','0','1448682494');");

require("../../inc/footer.php");
?>