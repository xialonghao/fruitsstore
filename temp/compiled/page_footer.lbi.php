<div id="footer">
  <div class="ft-bg">
    <div class="w-ensure mb20">
    	<div class="w-main">
        	<ul>
            	<li><a target="_blank" href=""><img width="300" height="90" src="themes/lizi/images/ft-svr1.gif"></a></li>
            	<li><a target="_blank" href=""><img width="300" height="90" src="themes/lizi/images/ft-svr2.gif"></a></li>
            	<li><a target="_blank" href=""><img width="300" height="90" src="themes/lizi/images/ft-svr3.gif"></a></li>
            	<li><a target="_blank" href=""><img width="300" height="90" src="themes/lizi/images/ft-svr4.gif"></a></li>
            </ul>
        </div>
    </div>
    <div class="ft_main">
      <div class="ft_links">
        <div class="ft_nav"> 
          <?php if ($this->_var['navigator_list']['bottom']): ?> 
          <?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav_0_21966700_1515501370');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav_0_21966700_1515501370']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?> 
          <a href="<?php echo $this->_var['nav_0_21966700_1515501370']['url']; ?>"  <?php if ($this->_var['nav_0_21966700_1515501370']['opennew'] == 1): ?>target="_blank" <?php endif; ?> <?php if (($this->_foreach['nav_bottom_list']['iteration'] <= 1)): ?> 
          class="noborder" 
          <?php endif; ?> rel="nofollow"><?php echo $this->_var['nav_0_21966700_1515501370']['name']; ?></a> 
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          <?php endif; ?> 
          
        </div>
      </div>
      <div class="ft_txt">
        <p><?php echo $this->_var['copyright']; ?><?php echo $this->_var['lang']['icp_number']; ?>：<a href="http://www.miitbeian.gov.cn" target="_blank" rel="nofollow"><?php echo $this->_var['icp_number']; ?></a></p>
        <p class="ft_contact"> <span>服务时间：09:00-23:00</span> <?php if ($this->_var['service_phone']): ?> 
          <span class="ft_phone">客服热线: <em><?php echo $this->_var['service_phone']; ?></em></span> 
          <?php endif; ?></p>
          
          <?php if ($this->_var['img_links'] || $this->_var['txt_links']): ?>
        <p class="link"> 友情链接： 

        
		    <?php $_from = $this->_var['img_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php if ($this->_var['txt_links']): ?>
    <?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php endif; ?>
        
         </p>
        
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<script>
	$(function(){
		$(window).scroll(function(){
			if($(window).scrollTop()>100){  //距顶部多少像素时，出现返回顶部按钮
				$("#side-bar .gotop").fadeIn();	
			}
			else{
				$("#side-bar .gotop").hide();
			}
		});
		$("#side-bar .gotop").click(function(){
			$('html,body').animate({'scrollTop':0},500); //返回顶部动画 数值越小时间越短
		});
	});
</script>
<ul id="side-bar" class="side-pannel side-bar">
  <?php $_from = $this->_var['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
    <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $this->_var['im']; ?>&site=<?php echo $this->_var['shop_name']; ?>&menu=yes" target="_blank" class="kefuqq"></a>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <?php $_from = $this->_var['ww']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
    <a href="http://amos1.taobao.com/msg.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" target="_blank" class="kefuww"></a>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <a href="javascript:;" class="qr weixin"><i></i></a>
  <a href="javascript:;" class="gotop" style="display:none;"></a>
</ul>

