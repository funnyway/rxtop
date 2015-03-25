<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TopRx上方云</title>
<meta name="keywords" content="TopRx上方云" />
<meta name="description" content="TopRx上方云" />
<link href="/css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="box">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td rowspan="2"><img src="/images/TopRx_r2_c3.jpg" width="282" height="72" /></td>
		<!--<td width="60"><a href="login.html"><img src="/images/TopRx_r1_c19.jpg" width="54" height="28" border="0" /></a></td>
		<td width="120"><a href="zc.html"><img src="/images/TopRx_r1_c21.jpg" width="54" height="28" border="0" /></a></td>-->
	</tr>
	<tr>
		<td colspan="2">&nbsp;</td>
	</tr>
</table>
<table width="1180" border="0" cellpadding="0" cellspacing="0" class="dh">
	<tr>
		<td align="right" valign="top"><a href="/" class="dh" <?php if($_GET['enews']=='ReIndex'){?>style="color:#0098D9"<?php }?>>首页</a>　<a href="/js/1.html" class="dh" <?php if($GLOBALS['navclassid']==1){?>style="color:#0098D9"<?php }?>>技术·服务</a>　<a href="/al/35.html" class="dh" <?php if($GLOBALS['navclassid']==4){?>style="color:#0098D9"<?php }?>>案例</a>　<a href="/wd/6.html" class="dh" <?php if($GLOBALS['navclassid']==3){?>style="color:#0098D9"<?php }?>>开放文档</a>　<a href="/hi/index.php" class="dh" <?php if($GLOBALS['navclassid']==9){?>style="color:#0098D9"<?php }?>>开发者中心</a>　</td>
	</tr>
</table>
		<table width="1180" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td>
					<div class="banner3">
						<div class="banner4">
							<SCRIPT type=text/javascript>
								var focus_width=1180
								var focus_height=420
								var text_height=0
								var swf_height = focus_height+text_height
								var pics='<? @sys_GetEcmsInfo(6,4,32,0,0,15,0);?>';
								var links=''
								var texts='海景|高山|沙漠|草原|花海'
								document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ focus_width +'" height="'+ swf_height +'">');
								document.write('<param name="allowScriptAccess" value="sameDomain"><param name="movie" value="pic.swf"><param name="quality" value="high"><param name="bgcolor" value="#ffffff">');
								document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
								document.write('<param name="FlashVars" value="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+(focus_width+2)+'&borderheight='+(focus_height+2)+'&textheight='+text_height+'">');
								document.write('<embed src="pic.swf" wmode="opaque" FlashVars="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+focus_width+'&borderheight='+focus_height+'&textheight='+text_height+'" menu="false" bgcolor="#ffffff" quality="high" width="'+ focus_width +'" height="'+ focus_height +'" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />');		document.write('</object>');
							</SCRIPT>
						</div>
					</div>
				</td>
			</tr>
		</table>
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td>
					<div class="mid">
						<h1>技术服务</h1>
						<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname,classimg,intro from toprx_enewsclass where classid=1",1,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
						<div><img src="<?=$bqr[classimg]?>" /></div>
						<?php
}
}
?>
						<div style="width:290px; margin-left:auto; margin-right:auto">
							<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname,classimg,intro from toprx_enewsclass where classid=1",1,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
							<p style="line-height: 22px; margin-bottom:10px;"><?=$bqr[intro]?></p>
							<?php
}
}
?>
							<? @sys_GetEcmsInfo(1,4,32,0,0,17,0);?>
						</div>
					</div>
					<div class="mid">
						<h1>典型案例</h1>
						<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname,classimg,intro from toprx_enewsclass where classid=4",1,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
						<div><img src="<?=$bqr[classimg]?>" /></div>
						<?php
}
}
?>
						<div style="width:290px; margin-left:auto; margin-right:auto">
							<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname,classimg,intro from toprx_enewsclass where classid=4",1,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
							<p style="line-height: 22px; margin-bottom:10px;"><?=$bqr[intro]?></p>
							<?php
}
}
?>
							<? @sys_GetEcmsInfo(4,4,32,0,0,17,0);?>
						</div>
					</div>
					<div class="mid">
						<h1>新闻动态</h1>
						<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname,classimg,intro from toprx_enewsclass where classid=5",1,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
						<div><img src="<?=$bqr[classimg]?>" /></div>
						<?php
}
}
?>
						<div style="width:290px; margin-left:auto; margin-right:auto">
							<? @sys_GetEcmsInfo(5,8,32,0,0,17,0);?>
						</div>
					</div>
				</td>
			</tr>
		</table>
		<table width="1084" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#E5F0F3" class="hb" style="margin-left:auto; margin-right:auto">
			<tr>
				<td colspan="3"><h1>合作伙伴</h1></td>
			</tr>
			<tr>
				<td width="30"><img src="images/TopRx_r11_c4.jpg" width="11" height="21" /></td>
				<td align="center"><? @sys_GetEcmsInfo(8,7,32,0,0,18,0);?></td>
				<td><img src="images/TopRx_r11_c23.jpg" width="14" height="21" /></td>
			</tr>
		</table>
		<table border="0" cellpadding="0" cellspacing="0" bgcolor="#999999" class="bottom">
	<tr>
		<td width="800" valign="top">
			<div class="bottomdiv">
				<ul>
					<li>TopRx</li>
					<li><a href="/wzgk/5.html" class="BO">关于我们</a></li>
					<li><a href="/wzgk/38.html" class="BO">加入我们</a></li>
					<li><a href="/wzgk/39.html" class="BO">隐私政策</a></li>
					<li><a href="/wzgk/40.html" class="BO">使用条款</a></li>
				</ul>
			</div>
			<div class="bottomdiv">
				<ul>
					<li>新闻</li>
					<li><a href="/mtbd/41.html" class="BO">媒体报道</a></li>
					<li><a href="/gxrz/42.html" class="BO">更新日志</a></li>
				</ul>
			</div>      
			<div class="bottomdiv">
				<ul>
					<li>支持</li>
					<li><a href="/wd/6.html" class="BO">API文档</a></li>
					<li><a href="/kfzzx/37.html" class="BO">开发工具与SDK</a></li>
					<li><a href="/xsyj/43.html" class="BO">学术研究</a></li>
					<li><a href="/cjwt/44.html" class="BO">常见问题</a></li>
				</ul>
			</div>
		</td>
		<td width="380" valign="top">
			<div class="bottomdiv02">© 2015 Megvii, Inc. All Rights Reserved. <br />京ICP备12036813号-6 <br /></div>
		</td>
	</tr>
</table>
<script src="/e/extend/DoTimeRepage/"></script>
	</div>
</body>
</html>