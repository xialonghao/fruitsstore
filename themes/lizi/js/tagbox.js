/**
 * 产品名称: Ecshop生鲜蔬菜商城模板 
 * 使用版本：Ecshop v2.7.3版
 * 出品单位: O菜龙工作室出品
 * 设计者网址：http://www.ocailong.com/
 * 设计者QQ：763191200（o菜龙）
*/    var pos;
	var MSIE=navigator.userAgent.indexOf("MSIE");
	var Fire=navigator.userAgent.indexOf("Fire");
	var OPER=navigator.userAgent.indexOf("Opera");
	var bdy = (document.documentElement && document.documentElement.clientWidth)?document.documentElement:document.body;
	onscroll = function()
	{
		if (Fire > 0)
		{
			pos = window.pageYOffset;
		}
		else
		{
			pos = bdy.scrollTop;
		}
			var ele_top = 100;
			document.getElementById('tag_box').style.top = (pos + ele_top) + 'px';
	}