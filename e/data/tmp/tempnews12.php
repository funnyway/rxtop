<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$grpagetitle?></title>
<meta name="keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=$grpagetitle?>" />
<link href="/toprx/css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="box">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td rowspan="2"><img src="/toprx/images/TopRx_r2_c3.jpg" width="282" height="72" /></td>
		<!--<td width="60"><a href="login.html"><img src="/toprx/images/TopRx_r1_c19.jpg" width="54" height="28" border="0" /></a></td>
		<td width="120"><a href="zc.html"><img src="/toprx/images/TopRx_r1_c21.jpg" width="54" height="28" border="0" /></a></td>-->
	</tr>
	<tr>
		<td colspan="2">&nbsp;</td>
	</tr>
</table>
<table width="1180" border="0" cellpadding="0" cellspacing="0" class="dh">
	<tr>
		<td align="right" valign="top"><a href="/toprx/" class="dh" <?php if($_GET['enews']=='ReIndex'){?>style="color:#0098D9"<?php }?>>首页</a>　<a href="/toprx/js/4.html" class="dh" <?php if($GLOBALS['navclassid']==1){?>style="color:#0098D9"<?php }?>>技术·服务</a>　<a href="#" class="dh">案例</a>　<a href="index04.html" class="dh">开放文档</a>　<a href="#" class="dh">开发者中心</a>　</td>
	</tr>
</table>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td width="354" valign="top">
				<div class="left02">
					<h2>开放文档</h2>
					<a href="#" class="xuanzhong02">云计算能力</a><a href="index04.html">上方云专家系统对外接口说明</a>
				</div>
			</td>
			<td valign="top">
				<div class="right">
					<h3><?=$ecms_gr[title]?></h3>
					<?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?>
				</div>
			</td>
		</tr>
	</table>
	<table border="0" cellpadding="0" cellspacing="0" bgcolor="#999999" class="bottom">
	<tr>
		<td width="800" valign="top">
			<div class="bottomdiv">
				<ul>
					<li>TopRx</li>
					<li><a href="/toprx/wzgk/5.html" class="BO">关于我们</a></li>
					<li>加入我们</li>
					<li>隐私政策</li>
					<li>使用条款</li>
				</ul>
			</div>
			<div class="bottomdiv">
				<ul>
					<li>新闻</li>
					<li>媒体报道 </li>
					<li>更新日志</li>
				</ul>
			</div>      
			<div class="bottomdiv">
				<ul>
					<li>支持</li>
					<li>API文档 </li>
					<li>开发工具与SDK</li>
					<li>学术研究</li>
					<li>常见问题</li>
				</ul>
			</div>
		</td>
		<td width="380" valign="top">
			<div class="bottomdiv02">© 2015 Megvii, Inc. All Rights Reserved. <br />京ICP备12036813号-6 <br /></div>
		</td>
	</tr>
</table>
</div>
</body>
</html>
