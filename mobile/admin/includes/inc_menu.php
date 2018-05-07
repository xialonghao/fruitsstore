<?php



/**

 * ECSHOP 管理中心菜单数组

 * ============================================================================

 * * 版权所有 2005-2012 上海商派网络科技有限公司，并保留所有权利。

 * 网站地址: http://www.ecshop.com；

 * ----------------------------------------------------------------------------

 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和

 * 使用；不允许对程序代码以任何形式任何目的的再发布。

 * ============================================================================

 * $Author: liubo $

 * $Id: inc_menu.php 17217 2011-01-19 06:29:08Z liubo $

*/



if (!defined('IN_ECTOUCH'))

{

    die('Hacking attempt');

}
$modules['11_system']['01_shop_config']             = 'shop_config.php?act=list_edit';

$modules['11_system']['ad_position']                = 'ad_position.php?act=list';

//$modules['11_system']['shop_authorized']             = 'license.php?act=list_edit';

$modules['11_system']['02_payment_list']            = 'payment.php?act=list';

$modules['11_system']['04_mail_settings']           = 'shop_config.php?act=mail_settings';

$modules['11_system']['website']           = 'website.php?act=list';

$modules['11_system']['user_card']           = 'user_card.php?act=ctlist';

$modules['11_system']['category_icon']           = 'category.php?act=list';

$modules['11_system']['navigator']                  = 'navigator.php?act=list';





$modules['12_template']['02_template_select']       = 'template.php?act=list';

$modules['12_template']['03_template_setup']        = 'template.php?act=setup';

$modules['12_template']['04_template_library']      = 'template.php?act=library';



$modules['15_rec']['affiliate']                     = 'affiliate.php?act=list';

$modules['15_rec']['affiliate_ck']                  = 'affiliate_ck.php?act=list';

$modules['15_rec']['danpin_tuiguang']                  ='article_xkfla2015.php?act=list';

$modules['15_rec']['03_users_list']             = 'users.php?act=list';//

$modules['15_rec']['04_users_add']              = 'users.php?act=add';//

//微信通管理

$modules['17_wechat']['wx_1api']           = 'wxch-ent.php?act=wxconfig';

$modules['17_wechat']['wx_3menu']        = 'wxch-ent.php?act=menu';

$modules['17_wechat']['wx_2config']       = 'wxch-ent.php?act=config';

$modules['17_wechat']['wx_4autoreg']       = 'wxch-ent.php?act=autoreg';

$modules['17_wechat']['wx_bonus']        = 'wxch-ent.php?act=bonus';

$modules['17_wechat']['wx_regmsg']        = 'wxch-ent.php?act=regmsg';

$modules['17_wechat']['wx_lang']        = 'wxch-ent.php?act=lang';

$modules['17_wechat']['wx_keywords']        = 'wxch-ent.php?act=keywords';

$modules['17_wechat']['wx_point']        = 'wxch-ent.php?act=point';

$modules['17_wechat']['wx_fun']        = 'wxch-ent.php?act=fun';

$modules['17_wechat']['wx_prize']        = 'wxch-ent.php?act=prize';

$modules['17_wechat']['wx_zjd']        = 'wxch-ent.php?act=zjd';

$modules['17_wechat']['wx_dzp']        = 'wxch-ent.php?act=dzp';

$modules['17_wechat']['wx_qr']        = 'wxch-ent.php?act=qr';

$modules['17_wechat']['wx_order']        = 'wxch-ent.php?act=order';

$modules['17_wechat']['wx_pay']        = 'wxch-ent.php?act=pay';

$modules['17_wechat']['wx_reorder']        = 'wxch-ent.php?act=reorder';

$modules['17_wechat']['wx_fans']        = 'wxch_users.php?act=list';

$modules['17_wechat']['wx_oauth']        = 'wxch-ent.php?act=oauth';

$modules['17_wechat']['wx_tuijian']        = 'wxch-ent.php?act=tuijian';

$modules['17_wechat']['wx_list']        = 'users_invite.php?act=list';



//教程

$modules['18_shouce']['ectouch']        = 'help_wei.php?act=ectouch';

$modules['18_shouce']['weixintong']        = 'help_wei.php?act=weixintong';



//O菜龙工作室（www.ocailong.com）新增功能菜单

















?>

