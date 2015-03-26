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
        
          <a href="callhistory.php" class="xuanzhong">· API调用记录 </a>
           <a href="infoedit.php">· 信息修改</a>
		   <a href="#">· 删除</a> </div>
	</td>
    <td valign="top">
	  <div class="right">
	    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table01">
  <tr>
    <th width="261" class="th1">日期                                                                                                         </th>
    <th width="200" class="th1">API调用记录</th>
    </tr>
  <tr>
    <td align="center">2015-03-19 15:00:00</td>
    <td align="center">0 calls </td>
    </tr>
</table>
	  </div>
	</td>
  </tr>
</table>
<?php
require('template/foot.temp.php'); //导入尾部
?>
