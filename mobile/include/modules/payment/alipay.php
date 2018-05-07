<?php

/**
 * ECSHOP 支付宝插件
 * ============================================================================
 * * 版权所有 2005-2012 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: douqinghua $
 * $Id: alipay.php 17217 2011-01-19 06:29:08Z douqinghua $
 */

if (!defined('IN_ECTOUCH'))
{
    die('Hacking attempt');
}

$payment_lang = ROOT_PATH . 'lang/' .$GLOBALS['_CFG']['lang']. '/payment/alipay.php';

if (file_exists($payment_lang))
{
    global $_LANG;

    include_once($payment_lang);
}

/* 模块的基本信息 */
if (isset($set_modules) && $set_modules == TRUE)
{
    $i = isset($modules) ? count($modules) : 0;

    /* 代码 */
    $modules[$i]['code']    = basename(__FILE__, '.php');

    /* 描述对应的语言项 */
    $modules[$i]['desc']    = 'alipay_desc';

    /* 是否支持货到付款 */
    $modules[$i]['is_cod']  = '0';

    /* 是否支持在线支付 */
    $modules[$i]['is_online']  = '1';

    /* 作者 */
    $modules[$i]['author']  = 'o菜龙工作室';

    /* 网址 */
    $modules[$i]['website'] = 'http://www.ocailong.com';

    /* 版本号 */
    $modules[$i]['version'] = '1.0.2';

    /* 配置信息 */
    $modules[$i]['config']  = array(
        array('name' => 'alipay_account',           'type' => 'text',   'value' => ''),
        array('name' => 'alipay_key',               'type' => 'text',   'value' => ''),
        array('name' => 'alipay_partner',           'type' => 'text',   'value' => '')
    );

    return;
}

/**
 * 类
 */
	class alipay
	{
		function alipay()
		{

		}
		function __construct()
		{
			$this->alipay();
		}
		function get_code($order, $payment)
		{

			if (!defined('EC_CHARSET'))
		{
		    $charset = 'utf-8';
		}
		else
		{
		    $charset = EC_CHARSET;
		}
		require_once(dirname(__FILE__)."/alipay_wap/lib/alipay_submit.class.php");
		$alipay_config['partner']		= $payment['alipay_partner'];
		$alipay_config['key']			= $payment['alipay_key'];
		$alipay_config['sign_type']    = 'MD5';
		$alipay_config['input_charset']= $charset;
		$alipay_config['cacert']    = getcwd().'\\cacert.pem';
		$alipay_config['transport']    = 'http';
		$format = "xml";
		$v = "2.0";
		$req_id = date('Ymdhis').mt_rand(1,10000);
		$notify_url = return_url(basename(__FILE__, '.php'));
		$call_back_url = return_url(basename(__FILE__, '.php'));
		$merchant_url = $GLOBALS['ecs']->url();
		$seller_email = $payment['alipay_account'];
		$out_trade_no = $order['order_sn'] . $order['log_id'];
		$subject = $order['order_sn'];
		$total_fee = $order['order_amount'];
		$req_data = '<direct_trade_create_req><notify_url>' . $notify_url . '</notify_url><call_back_url>' . $call_back_url . '</call_back_url><seller_account_name>' . $seller_email . '</seller_account_name><out_trade_no>' . $out_trade_no . '</out_trade_no><subject>' . $subject . '</subject><total_fee>' . $total_fee . '</total_fee><merchant_url>' . $merchant_url . '</merchant_url></direct_trade_create_req>';
		$para_token = array(
				"service" => "alipay.wap.trade.create.direct",
				"partner" => trim($alipay_config['partner']),
				"sec_id" => trim($alipay_config['sign_type']),
				"format"	=> $format,
				"v"	=> $v,
				"req_id"	=> $req_id,
				"req_data"	=> $req_data,
				"_input_charset"	=> trim(strtolower($alipay_config['input_charset']))
			);
			
			$alipaySubmit = new AlipaySubmit($alipay_config);
			$html_text = $alipaySubmit->buildRequestHttp($para_token);
			$html_text = urldecode($html_text);
			
			$para_html_text = $alipaySubmit->parseResponse($html_text);
			
			$request_token = $para_html_text['request_token'];
			$req_data = '<auth_and_execute_req><request_token>' . $request_token . '</request_token></auth_and_execute_req>';
			$parameter = array(
				"service" => "alipay.wap.auth.authAndExecute",
				"partner" => trim($alipay_config['partner']),
				"sec_id" => trim($alipay_config['sign_type']),
				"format"	=> $format,
				"v"	=> $v,
				"req_id"	=> $req_id,
				"req_data"	=> $req_data,
				"_input_charset"	=> trim(strtolower($alipay_config['input_charset']))
			);
			$btn = $alipaySubmit->buildRequestForm($parameter,'get',$GLOBALS['_LANG']['pay_button'],$payment['alipay_key']);
			return $btn;
		}
		function respond()
		{
			
			$payment  = get_payment('alipay');
			$alipay_config['partner']		= $payment['alipay_partner'];
		$alipay_config['key']			= $payment['alipay_key'];
		
		$alipay_config['sign_type']    = 'MD5';
		$alipay_config['input_charset']= 'utf-8';
		$alipay_config['cacert']    = getcwd().'\\cacert.pem';
		$alipay_config['transport']    = 'http';
			require_once(dirname(__FILE__)."/alipay_wap/lib/alipay_notify.class.php");
			$alipayNotify = new AlipayNotify($alipay_config);
			if(!empty($_GET))
			{
				unset($_GET['code']);
				$verify_result = $alipayNotify->verifyReturn();
				if($verify_result)
				{
					return true;
				}
				return false;
			}
			else
			{
				$verify_result = $alipayNotify->verifyNotify();
				if($verify_result)
				{
					if(!empty($_POST))
					{
						$doc = new DOMDocument();
						$doc->loadXML($_POST['notify_data']);
						if( ! empty($doc->getElementsByTagName( "notify" )->item(0)->nodeValue) )
						{
							$_GET['out_trade_no'] = $doc->getElementsByTagName( "out_trade_no" )->item(0)->nodeValue;
							$_GET['subject'] = $doc->getElementsByTagName( "subject" )->item(0)->nodeValue;
							$_GET['total_fee'] = $doc->getElementsByTagName( "total_fee" )->item(0)->nodeValue;
							$_GET['trade_status'] = $doc->getElementsByTagName( "trade_status" )->item(0)->nodeValue;
						}
					}
					else
					{
						return false;
					}

					
					$order_sn = str_replace($_GET['subject'], '', $_GET['out_trade_no']);
				$order_sn = trim($order_sn);
				if (!check_money($order_sn, $_GET['total_fee']))
				{
				    return false;
				}
					
				if ($_GET['trade_status'] == 'WAIT_SELLER_SEND_GOODS')
				{
				    /* 改变订单状态 */
				    order_paid($order_sn, 2);

				    return true;
				}
				elseif ($_GET['trade_status'] == 'TRADE_FINISHED')
				{
				    /* 改变订单状态 */
				    order_paid($order_sn);

				    return true;
				}
				elseif ($_GET['trade_status'] == 'TRADE_SUCCESS')
				{
				    /* 改变订单状态 */
						order_paid($order_sn, 2);

				    return true;
				}
				else
				{
				    return false;
				}
				}
			}
			
				
			return false;
		}
	}
?>