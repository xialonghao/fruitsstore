<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_touch_priv`;");
E_C("CREATE TABLE `ecs_touch_priv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `action_list` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_touch_priv` values('3','2','all');");
E_D("replace into `ecs_touch_priv` values('4','3','goods_manage,cat_manage,attr_manage,wx_api,wx_menu,wx_config,wx_bonus,wx_regmsg,wx_lang,wx_keywords,wx_point,wx_fun,wx_prize,wx_zjd,wx_dzp,wx_qr,wx_order,wx_pay,wx_reorder,wx_fans,wx_oauth,wx_tuijian,wx_list');");
E_D("replace into `ecs_touch_priv` values('5','4','goods_manage,cat_manage,cat_drop,attr_manage,brand_manage,goods_type,users_manage,users_drop,user_rank,surplus_manage,account_manage,admin_manage,admin_drop,allot_priv,logs_manage,logs_drop,template_manage,agency_manage,suppliers_manage,role_manage,shop_config,ship_manage,payment,shiparea_manage,area_manage,friendlink,db_backup,db_renew,flash_manage,navigator,cron,sitemap,file_priv,file_check,reg_fields,shop_authorized,webcollect_manage,website,user_card,mail_settings,category_icon,ectouch,weixintong,order_os_edit,order_ps_edit,order_ss_edit,order_edit,order_view,order_view_finished,repay_manage,booking,sale_order_stats,client_flow_stats,delivery_view,back_view,topic_manage,snatch_manage,bonus_manage,gift_manage,card_manage,pack,ad_manage,auction,group_by,favourable,whole_sale,package_manage,exchange_goods,template_select,template_setup,library_manage,lang_edit,backup_setting,mail_template,db_backup,db_renew,db_optimize,sql_query,convert,wx_api,wx_menu,wx_config,wx_bonus,wx_regmsg,wx_lang,wx_keywords,wx_point,wx_fun,wx_prize,wx_zjd,wx_dzp,wx_qr,wx_order,wx_pay,wx_reorder,wx_fans,wx_oauth,wx_tuijian,wx_list,wx_autoreg,affiliate,affiliate_ck,danpin_tuiguang');");

require("../../inc/footer.php");
?>