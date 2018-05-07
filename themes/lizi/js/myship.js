/**
 * 产品名称: Ecshop生鲜蔬菜商城模板 
 * 使用版本：Ecshop v2.7.3版
 * 出品单位: O菜龙工作室出品
 * 设计者网址：http://www.ocailong.com/
 * 设计者QQ：763191200（o菜龙）
*/
/* *
 * 检查收货地址信息表单中填写的内容
 */
function checkForm(frm)
{
  var msg = new Array();
  var err = false;

  if (frm.elements['country'].value == 0)
  {
    msg.push(country_not_null);
    err = true;
  }

  if (frm.elements['province'].value == 0 && frm.elements['province'].length > 1)
  {
    err = true;
    msg.push(province_not_null);
  }

  if (frm.elements['city'].value == 0 && frm.elements['city'].length > 1)
  {
    err = true;
    msg.push(city_not_null);
  }

  if (frm.elements['district'].length > 1)
  {
    if (frm.elements['district'].value == 0)
    {
      err = true;
      msg.push(district_not_null);
    }
  }

  if (err)
  {
    message = msg.join("\n");
    alert(message);
  }
  return ! err;
}
