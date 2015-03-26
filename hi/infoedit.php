<?php
require 'hi_init.php';
if(!isset($_SESSION['toprx_api_userid'])) {
	header('Location:/hi/login.php');
}
require('template/top.temp.php'); //导入尾部
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="354" valign="top">
	  <div class="left">
		<h2>应用描述</h2>
        
          <a href="callhistory.php">· API调用记录 </a>
           <a href="infoedit.php" class="xuanzhong">· 信息修改</a>
		   <a href="#">· 删除</a> </div>
	</td>
    <td valign="top">
	  <div class="right">
	    <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f1f0f0">
          
          <tr>
            <td width="140" align="left" bgcolor="#d5d5d5" class="table03 STYLE1">
              应用名称</td>
            <td class="table03"><label>
              <input name="textfield" type="text" class="sr" />
            </label></td>
          </tr>
          <tr>
            <td align="left" bgcolor="#d5d5d5" class="table03 STYLE1">用户类型</td>
            <td class="table03 table03"><img src="images/dxk.png" width="13" height="13" />个人　<img src="images/dxk02.png" width="13" height="13" />       公司</td>
          </tr>
          <tr>
            <td align="left" bgcolor="#d5d5d5" class="table03 STYLE1">联系人*</td>
            <td class="table03"><label>
              <input name="textfield" type="text" class="sr" />
            </label></td>
          </tr>
          <tr>
            <td align="left" bgcolor="#d5d5d5" class="table03 STYLE1">Email
              </p></td>
            <td class="table03"><label>
              <input name="textfield" type="text" class="sr" size="36" />
            </label></td>
          </tr>
          <tr>
            <td align="left" bgcolor="#d5d5d5" class="table03 STYLE1">应用链接*</td>
            <td class="table03"><label>
              <input name="textfield" type="text" class="sr" size="60" />
              </label></td>
          </tr>
          <tr>
            <td align="left" bgcolor="#d5d5d5" class="table03 STYLE1">应用描述*</td>
            <td class="table03"><label>
      <textarea name="textarea" class="wbk"></textarea>
</label></td>
          </tr>
          <tr>
            <td align="left" bgcolor="#d5d5d5" class="table03 STYLE1">应用类型*</td>
            <td class="table03"><img src="images/dxk.png" width="13" height="13" />娱乐　<img src="images/dxk.png" width="13" height="13" />相册　<img src="images/dxk.png" width="13" height="13" />社交　<img src="images/dxk.png" width="13" height="13" />     监控　<img src="images/dxk.png" width="13" height="13" />游戏     　<img src="images/dxk.png" width="13" height="13" />教育　<img src="images/dxk.png" width="13" height="13" />    其他</td>
          </tr>
          <tr>
            <td align="left" bgcolor="#d5d5d5" class="table03 STYLE1">应用平台*</td>
            <td class="table03"><label for="platform-ios"><img src="images/dx.png" width="13" height="13" />IOS　</label>
      <img src="images/dx.png" width="13" height="13" />
      <label for="platform-android">Android</label>
      <label for="platform-web">　<img src="images/dx02.png" width="13" height="13" />Web</label>
      　<img src="images/dx.png" width="13" height="13" />
      <label for="platform-pc">PC</label>　<img src="images/dx.png" width="13" height="13" />
      <label for="platform-other">其他</label></td>
          </tr>
          <tr>
            <td align="left" bgcolor="#d5d5d5" class="table03 STYLE1">&nbsp;</td>
            <td class="table03"><a href="index08.html"><img src="images/tj.png" width="58" height="31" border="0" /></a></td>
          </tr>
        </table>
	  </div>
	</td>
  </tr>
</table>
<?php
require('template/foot.temp.php'); //导入尾部
?>
