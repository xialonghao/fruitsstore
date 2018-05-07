<?php

/**
 * ECSHOP EC模板之家二次开发函数库
 * ============================================================================
 * * 版权所有 2005-2020 模板之家，并保留所有权利。
 * 网站地址: http://www.mb5.com.cn；
 * ----------------------------------------------------------------------------
 * ============================================================================
 * $Id: www_mb5_com_cn.php 1.0 2015-10-30 $
*/

if (!defined('IN_ECS'))
{
    die('Hacking attempt');
}
 
/**
* 根据广告位获得广告列表
*/
function get_advlist($position,$num)
{
		$arr = array( );
		$sql = "select ap.ad_width,ap.ad_height,ad.ad_id,ad.ad_name,ad.ad_code,ad.ad_link,ad.ad_id from ".$GLOBALS['ecs']->table( "ad_position" )." as ap left join ".$GLOBALS['ecs']->table( "ad" )." as ad on ad.position_id = ap.position_id where ap.position_name ='".$position.("' and ad.enabled=1 limit ".$num );
		$res = $GLOBALS['db']->getAll( $sql );
		foreach ( $res as $idx => $row )
		{
				$arr[$row['ad_id']]['name'] = $row['ad_name'];
				$arr[$row['ad_id']]['url'] = "affiche.php?ad_id=".$row['ad_id']."&uri=".$row['ad_link'];
				$arr[$row['ad_id']]['image'] = "data/afficheimg/".$row['ad_code'];
				$arr[$row['ad_id']]['content'] = "<a href='".$arr[$row['ad_id']]['url']."'><img src='data/afficheimg/".$row['ad_code']."' width='".$row['ad_width']."' height='".$row['ad_height']."' /></a>";
				$arr[$row['ad_id']]['width'] = $row['ad_width'];
				$arr[$row['ad_id']]['height'] = $row['ad_height'];
		}
		return $arr;
}

/**
* 获得某个分类下的品牌列表
*
* @access  public
* @param   int     $cat
* @return  array
*/
function get_cat_brands($cat = 0, $app = 'brand' ,$limnum=0,$sort='tag DESC, b.sort_order ASC')
{
    global $page_libs;
    $template = basename(PHP_SELF);
    $template = substr($template, 0, strrpos($template, '.'));
    include_once(ROOT_PATH . ADMIN_PATH . '/includes/lib_template.php');
    static $static_page_libs = null;
    if ($static_page_libs == null)
    {
            $static_page_libs = $page_libs;
    }

    $children = ($cat > 0) ? ' AND ' . get_children($cat) : '';

    $sql = "SELECT b.brand_id, b.brand_name, b.brand_logo, b.brand_desc, COUNT(*) AS goods_num, IF(b.brand_logo > '', '1', '0') AS tag ".
            "FROM " . $GLOBALS['ecs']->table('brand') . "AS b, ".
                $GLOBALS['ecs']->table('goods') . " AS g ".
            "WHERE g.brand_id = b.brand_id $children AND is_show = 1 " .
            " AND g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0 ".
            "GROUP BY b.brand_id HAVING goods_num > 0 ORDER BY $sort";
	
	if($limnum>0)
	{
		$num=$limnum;
		$sql .= " LIMIT $num ";
	}
	else
	{
      if (isset($static_page_libs[$template]['/library/brands.lbi']))
      {
        $num = get_library_number("brands");
        $sql .= " LIMIT $num ";
      }
	}
	
    $row = $GLOBALS['db']->getAll($sql);

    foreach ($row AS $key => $val)
    {
        $row[$key]['url'] = build_uri($app, array('cid' => $cat, 'bid' => $val['brand_id']), $val['brand_name']);
        $row[$key]['brand_desc'] = htmlspecialchars($val['brand_desc'],ENT_QUOTES);
    }

    return $row;
}

/**
* 获得首页主广告
*/
function get_flash_xml()
{
    $flashdb = array();
    if (file_exists(ROOT_PATH . DATA_DIR . '/flash_data.xml'))
    {

        // 兼容v2.7.0及以前版本
        if (!preg_match_all('/item_url="([^"]+)"\slink="([^"]+)"\stext="([^"]*)"\ssort="([^"]*)"/', file_get_contents(ROOT_PATH . DATA_DIR . '/flash_data.xml'), $t, PREG_SET_ORDER))
        {
            preg_match_all('/item_url="([^"]+)"\slink="([^"]+)"\stext="([^"]*)"/', file_get_contents(ROOT_PATH . DATA_DIR . '/flash_data.xml'), $t, PREG_SET_ORDER);
        }

        if (!empty($t))
        {
            foreach ($t as $key => $val)
            {
                $val[4] = isset($val[4]) ? $val[4] : 0;
                $flashdb[] = array('src'=>$val[1],'url'=>$val[2],'text'=>$val[3],'sort'=>$val[4]);
            }
        }
    }
    return $flashdb;
}

/**
 * 调用购物车信息
 *
 * @access  public
 * @return  string
 */
function insert_cart_info_mb5()
{
    $sql = 'SELECT SUM(goods_number) AS number, SUM(goods_price * goods_number) AS amount' .
           ' FROM ' . $GLOBALS['ecs']->table('cart') .
           " WHERE session_id = '" . SESS_ID . "' AND rec_type = '" . CART_GENERAL_GOODS . "'";
    $row = $GLOBALS['db']->GetRow($sql);

    if ($row)
    {
        $number = intval($row['number']);
        $amount = floatval($row['amount']);
    }
    else
    {
        $number = 0;
        $amount = 0;
    }
	
	$sql = 'SELECT c.rec_id,c.goods_id,c.goods_price,c.goods_number,c.goods_name,c.goods_attr,g.goods_thumb ' .
           ' FROM ' . $GLOBALS['ecs']->table('cart') . ' AS c '.
		   " LEFT JOIN " . $GLOBALS['ecs']->table('goods') . " AS g ON c.goods_id = g.goods_id " .
           " WHERE session_id = '" . SESS_ID . "' AND rec_type = '" . CART_GENERAL_GOODS . "'";
    $res = $GLOBALS['db']->GetAll($sql);
	
	foreach($res as $idx => $row)
	{
		$goods[$idx]['url']          = build_uri('goods', array('gid' => $row['goods_id']), $row['goods_name']);	
		$goods[$idx]['id']           = $row['goods_id'];
		$goods[$idx]['rec_id']           = $row['rec_id'];
		$goods[$idx]['name']         = $row['goods_name'];
		$goods[$idx]['goods_number']         = $row['goods_number'];
		$goods[$idx]['goods_attr']         = $row['goods_attr'];
		$goods[$idx]['short_name']   = $GLOBALS['_CFG']['goods_name_length'] > 0 ?
                                               sub_str($row['goods_name'], $GLOBALS['_CFG']['goods_name_length']) : $row['goods_name'];
		$goods[$idx]['shop_price']   = $row['goods_price'];
		$goods[$idx]['thumb']        = get_image_path($row['goods_id'], $row['goods_thumb'], true);
	}
	
	$need_cache = $GLOBALS['smarty']->caching;
    $GLOBALS['smarty']->caching = false;
	$GLOBALS['smarty']->assign('number', $number);
	$GLOBALS['smarty']->assign('amount', $amount);
	$GLOBALS['smarty']->assign('cart_list', $goods);

    $val = $GLOBALS['smarty']->fetch('library/cart_info.lbi');  
    $GLOBALS['smarty']->caching = $need_cache;
	return $val;
}

/* 代码增加_start  By   www.mb5.com.cn */
function  is_exist_prod($first_arr, $one, $prod_exist_arr)
{
	if (empty($prod_exist_arr))
	{
		return 0;
	}
	$first_arr[]=$one;

	$all_valid =0;
	foreach($prod_exist_arr AS $item_exist)
	{		
		$first_exist=1;
		foreach($first_arr AS $first)
		{			
			if (!strstr($item_exist, '|'. $first .'|'))
			{
				$first_exist=0;
				break;
			}
		}
		if($first_exist)
		{
			$all_valid=1;
			break;
		}
	}
	return $all_valid;
}

?>