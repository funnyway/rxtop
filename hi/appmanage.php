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
           <a href="infoedit.php">· 信息修改</a>
		   <a href="#">· 删除</a> </div>
	</td>
    <td valign="top">
	  <div class="right">
	    <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f1f0f0">
          <tr>
            <td width="140" align="left" bgcolor="#d5d5d5" class="table03 STYLE1">应用名称</td>
            <td class="table03">111111</td>
          </tr>
          <tr>
            <td align="left" bgcolor="#d5d5d5" class="table03 STYLE1">API Key</td>
            <td class="table03">d696217ffcb32443cc8a04594e597e6b</td>
          </tr>
          <tr>
            <td align="left" bgcolor="#d5d5d5" class="table03 STYLE1">API Secret</td>
            <td class="table03 table03">MAyVeVQmerTUmSkIBw-pVNWzKVjrDoeQ <span><a href="#"><img src="../images/menu_r3_c4.jpg" width="137" height="31" border="0" class="mmspan" /></a></span></td>
          </tr>
          <tr>
            <td align="left" bgcolor="#d5d5d5" class="table03 STYLE1">API Url</td>
            <td class="table03">apicn.faceplusplus.com</td>
          </tr>
          <tr>
            <td align="left" bgcolor="#d5d5d5" class="table03 STYLE1">创建时间</td>
            <td class="table03">2015-03-18 09:46:18</td>
          </tr>
          <tr>
            <td align="left" bgcolor="#d5d5d5" class="table03 STYLE1">应用描述</td>
            <td class="table03">222222</td>
          </tr>
          <tr>
            <td align="left" bgcolor="#d5d5d5" class="table03 STYLE1">应用状态</td>
            <td class="table03">开发版 【<a href="#" class="sty2">升级</a>】 </td>
          </tr>
          <tr>
            <td align="left" bgcolor="#d5d5d5" class="table03 STYLE1">API服务器</td>
            <td class="table03">阿里云</td>
          </tr>
          <tr>
            <td align="left" bgcolor="#d5d5d5" class="table03 STYLE1">应用类型</td>
            <td class="table03">娱乐</td>
          </tr>
          <tr>
            <td align="left" bgcolor="#d5d5d5" class="table03 STYLE1">应用平台</td>
            <td class="table03">Android</td>
          </tr>
          <tr>
            <td height="50" align="left" bgcolor="#d5d5d5" class="table04 STYLE1">离线SDK</td>
            <td>　　<a href="#"><img src="../images/menu_r3_c5.jpg" width="154" height="31" border="0" /></a>　　<a href="#"><img src="../images/menu_r3_c6.jpg" width="191" height="31" border="0" /></a></td>
          </tr>
        </table>
	  </div>
	</td>
  </tr>
</table>
<?php
require('template/foot.temp.php'); //导入尾部
?>