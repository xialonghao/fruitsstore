<?php if ($this->_var['promotion_goods']): ?>
<div class="w-max ct mb30 clearfix">
    <div class="surprise-tit clearfix">
        <div class="fl sur-titimg overflow">
            <img src="themes/lizi/images/day_surprises.jpg" />
        </div>
    </div>
    <div class="surprise-con clearfix bgwhite border-eee">
        <div class="day-surimg fl" id="day-surimg" >
   <?php
	   $GLOBALS['smarty']->assign('adlist',get_advlist('天天惊喜左侧广告',1));
	?>
	<?php $_from = $this->_var['adlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad_0_49802100_1515565485');$this->_foreach['ad'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ad']['total'] > 0):
    foreach ($_from AS $this->_var['ad_0_49802100_1515565485']):
        $this->_foreach['ad']['iteration']++;
?>  
	   <?php echo $this->_var['ad_0_49802100_1515565485']['content']; ?>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
        <div class="fr surprise-list ovh">
            <ul class="clearfix" lang="09:00">
                 <?php $_from = $this->_var['promotion_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['promotion_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['promotion_foreach']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['promotion_foreach']['iteration']++;
?>
		 <li>
                    <div class="sur-hear p25">
                        <a href="<?php echo $this->_var['goods']['url']; ?>" class="imgBox ftc"><img src="<?php echo $this->_var['goods']['thumb']; ?>" class="zom" /></a>
                        <h1 class="overflow mt"><a href="<?php echo $this->_var['goods']['url']; ?>" class="ft12 c333"><?php echo htmlspecialchars($this->_var['goods']['short_name']); ?></a></h1>
                    </div>
                    <div class="sur-price clearfix">
                        <div class="fl sur-numbox overflow">
                            <div class="sur-num bold"><?php echo $this->_var['goods']['promote_price']; ?></div>
                            <p class="c999"><del><?php echo $this->_var['lang']['market_prices']; ?>:<?php echo $this->_var['goods']['market_price']; ?></del></p>
                        </div>
                        <div class="fr">
                          <a href="<?php echo $this->_var['goods']['url']; ?>" class="atonce-buy bold ft14 ftc">立即抢购</a>
			</div>
		    </div>
                 </li>
		 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
        </div>
    </div>
</div>
<?php endif; ?>