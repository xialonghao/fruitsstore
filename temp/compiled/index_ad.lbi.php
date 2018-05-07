<div class="index-banner">
  <div class="index-slide" id="index-slide">
    <ul>
        <?php $_from = get_flash_xml(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'flash');$this->_foreach['myflash'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myflash']['total'] > 0):
    foreach ($_from AS $this->_var['flash']):
        $this->_foreach['myflash']['iteration']++;
?>
	  <li style="background-image: url(<?php echo $this->_var['flash']['src']; ?>);"> <a target="_blank" href="<?php echo $this->_var['flash']['url']; ?>" ></a> </li>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
    <div class="trigger-box">
      <div class="triggers">
        <?php $_from = $this->_var['flash']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'index_ad_0_49477600_1515565485');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['index_ad_0_49477600_1515565485']):
        $this->_foreach['foo']['iteration']++;
?>
	  <a href="javascript:;" <?php if (($this->_foreach['foo']['iteration'] <= 1)): ?>class="current"<?php endif; ?>><?php echo $this->_foreach['foo']['iteration']; ?></a>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </div>
    </div>
  </div>
</div>