<?php 
require 'hi_init.php';
if(!isset($_SESSION['toprx_api_userid'])) {
	header('Location:/hi/login.php');
}
$cid = $_SESSION['toprx_api_userid'];
$rs = $db->get_all("select appkey,appname,status,callCount from publicapi where cid=$cid");
require('template/top.temp.php'); //导入头部
?>
<table width="1180" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top">
	  <div class="right">
	    <div class="h6"><span class="zspan">我的应用</span><span class="mspan"><a href="createapp.php"><img src="../images/menu_r1_c5.jpg" border="0" /></a></span></div>
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="table01">
  <tr>
    <th width="261" class="th1">应用名称</th>
    <th width="200" class="th1">应用状态</th>
    <th width="200" class="th1">API月使用量</th>
    <th width="400" class="th1">操作</th>
  </tr>
  <?php 
  	foreach($rs as $k=>$v) {
  ?>
  <tr>
    <td align="center"><?php echo $v['appname'];?></td>
    <td align="center"><?php echo $v['status']==1?'开发版':'正式版';?></td>
    <td align="center"><?php echo $v['callCount'];?></td>
    <td align="center"><a  class="btn-manage" appkey="<?php echo $v['appkey'];?>"><img src="../images/menu_r3_c1.jpg" width="80" height="30" border="0" class="mimg" /></a><a  class="btn-upgrade"><img src="../images/menu_r3_c3.jpg" width="80" height="30" border="0" class="mimg" /></a></td>
  </tr>
  <?php 
  	}
  ?>
</table>

	  </div>	</td>
  </tr>
</table>
<form action="appmanage.php" id="gomangeform" method="post">
	<input type="hidden" id="appkey" name="appkey" value="" />
</form>
<script src="js/formValidator/jquery-1.4.4.min.js" type="text/javascript"></script>
	
<script type="text/javascript">
	$(function() {
		$('.btn-manage').click(function() {
			var id = $(this).attr('appkey');
			$('#appkey').val(id);
			$('#gomangeform').submit();
		})
	})
</script>
<?php 
require('template/foot.temp.php'); //导入尾部
?>