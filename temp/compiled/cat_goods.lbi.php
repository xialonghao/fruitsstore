<?php
  $catid=$GLOBALS['smarty']->_var['goods_cat']['id'];
  $catname=$GLOBALS['smarty']->_var['goods_cat']['name'];
?>
<div class="series_box cle">
    <div class="series_info">
      <div class="series_name name_hufu">
        <h2><?php echo $this->_var['goods_cat']['name']; ?></h2>
      </div>
      <ul class="brand">
        <?php $_from = get_cat_brands($catid,category,3); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'get_brands');$this->_foreach['get_brands'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['get_brands']['total'] > 0):
    foreach ($_from AS $this->_var['get_brands']):
        $this->_foreach['get_brands']['iteration']++;
?> 
		<?php if ($this->_var['get_brands']['brand_logo']): ?>
			<li> <a href="<?php echo $this->_var['get_brands']['url']; ?>" title="<?php echo $this->_var['get_brands']['brand_name']; ?>" target="_blank"><img src="data/brandlogo/<?php echo $this->_var['get_brands']['brand_logo']; ?>"  alt="<?php echo $this->_var['get_brands']['brand_name']; ?>" style="display: inline;" /></a> </li>
		<?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
      </ul>
      <div class="brand_cata">
      <?php $_from = get_child_tree($catid); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child_tree');$this->_foreach['child_tree'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['child_tree']['total'] > 0):
    foreach ($_from AS $this->_var['child_tree']):
        $this->_foreach['child_tree']['iteration']++;
?>
	<?php if (($this->_foreach['child_tree']['iteration'] - 1) < 6): ?> 
		<a href="<?php echo $this->_var['child_tree']['url']; ?>" title="<?php echo $this->_var['child_tree']['name']; ?>" target="_blank"><?php echo $this->_var['child_tree']['name']; ?></a>
	<?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </div>
      
    </div>
    <div class="series_pic"> 
	<?php
	   $GLOBALS['smarty']->assign('adlist',get_advlist('首页_'.$catname.'_分类商品广告',1));
	?>
	<?php $_from = $this->_var['adlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad_0_51781000_1515565485');$this->_foreach['ad'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ad']['total'] > 0):
    foreach ($_from AS $this->_var['ad_0_51781000_1515565485']):
        $this->_foreach['ad']['iteration']++;
?>  
	   <?php echo $this->_var['ad_0_51781000_1515565485']['content']; ?>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
    <div class="pro_list">
      <ul class="cle">
		<?php $_from = $this->_var['cat_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_51787300_1515565485');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_51787300_1515565485']):
?>
        <li> <a href="<?php echo $this->_var['goods_0_51787300_1515565485']['url']; ?>" target="_blank">
          <p class="pic"> <img src="<?php echo $this->_var['goods_0_51787300_1515565485']['thumb']; ?>" style="display: inline;"></p>
          <h3><?php echo htmlspecialchars($this->_var['goods_0_51787300_1515565485']['short_name']); ?></h3>
          <p class="price">  
          <?php if ($this->_var['goods_0_51787300_1515565485']['promote_price'] != ""): ?>
          <?php echo $this->_var['goods_0_51787300_1515565485']['promote_price']; ?>
          <?php else: ?>
          <?php echo $this->_var['goods_0_51787300_1515565485']['shop_price']; ?>
          <?php endif; ?></p>
          </a> </li>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
    </div>
</div>