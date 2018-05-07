<?php
define('IN_ECTOUCH', true);
require(dirname(__FILE__) . '/include/init.php');
require(ROOT_PATH . 'include/lib_payment.php');
require_once(ROOT_PATH .'include/modules/payment/wx_new_jspay.php');

$payment = new wx_new_jspay();
$payment->respond();
exit;