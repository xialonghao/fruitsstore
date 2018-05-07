<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link href="themes/lizi/index.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<script type="text/javascript" src="themes/lizi/js/common.js"></script>
<script type="text/javascript" src="themes/lizi/js/index.js"></script>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<script type="text/javascript" src="themes/lizi/js/lizi_index.js"></script>

 
<?php echo $this->fetch('library/index_ad.lbi'); ?> 

<?php echo $this->fetch('library/recommend_promotion.lbi'); ?>
 

<?php echo $this->fetch('library/recommend_new.lbi'); ?>
 

<?php echo $this->fetch('library/recommend_best.lbi'); ?>
 
<div class="brand_temai">
  <ul id="brand_temai" class="cle">
    
<?php $this->assign('ads_id','5'); ?><?php $this->assign('ads_num','4'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

  </ul>
</div>

<div class="series_list"> 
<?php $this->assign('cat_goods',$this->_var['cat_goods_2']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_2']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_11']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_11']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_5']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_5']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_1']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_1']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
 </div>

 

 <?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
