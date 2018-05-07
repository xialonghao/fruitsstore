<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_order`;");
E_C("CREATE TABLE `ecs_weixin_order` (
  `id` tinyint(1) NOT NULL,
  `order_name` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `autoload` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_order` values('1','order','发货提醒','images/201504/1427952990857338988.jpg','<p>&nbsp;ffffff</p>','yes');");
E_D("replace into `ecs_weixin_order` values('2','reorder','订单确认提醒','images/201504/1427952978792506840.jpg','fff','yes');");
E_D("replace into `ecs_weixin_order` values('3','pay','成功支付','images/201504/1428653561481550531.jpg','已经成功支付','yes');");

require("../../inc/footer.php");
?>