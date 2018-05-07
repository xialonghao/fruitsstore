<?php if ($this->_var['best_goods']): ?>
<div class="tj-wrap w-max ct mb30 clearfix">
<h2>今天推荐了哪些精品？</h2>
 <ul>
 <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_50453100_1515565485');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_50453100_1515565485']):
?>
   <li>
     <div class="tj-left fl">
        <a href="<?php echo $this->_var['goods_0_50453100_1515565485']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_50453100_1515565485']['name']); ?>" target="_blank"><img src="<?php echo $this->_var['goods_0_50453100_1515565485']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_50453100_1515565485']['name']); ?>" class="zom" /></a>
     </div>
     <div class="tj-right fl">
        <h3><a href="<?php echo $this->_var['goods_0_50453100_1515565485']['url']; ?>" target="_blank"><?php echo htmlspecialchars($this->_var['goods_0_50453100_1515565485']['name']); ?></a></h3>
        <div class="tj-price">
           <b class="ibg"></b>
           <em class="db ft22 cf40 bold"><?php if ($this->_var['goods_0_50453100_1515565485']['promote_price'] != ""): ?><?php echo $this->_var['goods_0_50453100_1515565485']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods_0_50453100_1515565485']['shop_price']; ?><?php endif; ?></em>
        </div>
        <p class="tj-des lh20 c999 ovh"><?php echo $this->_var['goods_0_50453100_1515565485']['brief']; ?></p>
     </div>
   </li>
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
 </ul>
</div>
<?php endif; ?> 
