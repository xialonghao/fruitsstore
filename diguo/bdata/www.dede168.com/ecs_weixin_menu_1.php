<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_menu`;");
E_C("CREATE TABLE `ecs_weixin_menu` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `menu_type` varchar(6) NOT NULL,
  `level` int(1) NOT NULL,
  `name` varchar(30) NOT NULL,
  `value` varchar(250) NOT NULL,
  `aid` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_menu` values('1','click','1','商品','','0');");
E_D("replace into `ecs_weixin_menu` values('2','click','1','会员','','0');");
E_D("replace into `ecs_weixin_menu` values('3','click','1','客服','','0');");
E_D("replace into `ecs_weixin_menu` values('4','click','2','新品上市','news','1');");
E_D("replace into `ecs_weixin_menu` values('5','click','2','精品推荐','best','1');");
E_D("replace into `ecs_weixin_menu` values('6','click','2','热销商品','hot','1');");
E_D("replace into `ecs_weixin_menu` values('7','view','2','进入首页','http://ecshop1.shamuban.com/wechat/oauth/wxch_oauth.php?oid=1','1');");
E_D("replace into `ecs_weixin_menu` values('8','click','2','','','1');");
E_D("replace into `ecs_weixin_menu` values('9','click','2','绑定会员','bd','2');");
E_D("replace into `ecs_weixin_menu` values('10','click','2','我的推广','qrcode','2');");
E_D("replace into `ecs_weixin_menu` values('11','view','2','分销中心','http://sp.codes5.com/wechat/oauth/wxch_oauth.php?oid=14','2');");
E_D("replace into `ecs_weixin_menu` values('12','click','2','帐户资金','jfcx','2');");
E_D("replace into `ecs_weixin_menu` values('13','click','2','订单查询','ddcx','2');");
E_D("replace into `ecs_weixin_menu` values('14','click','2','呼叫客服','kefu','3');");
E_D("replace into `ecs_weixin_menu` values('15','click','2','二维码图片','ewm','3');");
E_D("replace into `ecs_weixin_menu` values('16','click','2','大转盘','dzp','3');");
E_D("replace into `ecs_weixin_menu` values('17','click','2','砸金蛋','zjd','3');");
E_D("replace into `ecs_weixin_menu` values('18','click','2','签到','qiandao','3');");

require("../../inc/footer.php");
?>