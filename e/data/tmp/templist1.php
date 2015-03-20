<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>[!--pagetitle--] - Powered by EmpireCMS</title>
<meta name="keywords" content="[!--pagekey--]" />
<meta name="description" content="[!--pagedes--]" />
<link href="[!--news.url--]skin/default/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="[!--news.url--]skin/default/js/tabs.js"></script>
</head>
<body class="listpage">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td rowspan="2"><img src="[!--news.url--]images/TopRx_r2_c3.jpg" width="282" height="72" /></td>
		<!--<td width="60"><a href="login.html"><img src="[!--news.url--]images/TopRx_r1_c19.jpg" width="54" height="28" border="0" /></a></td>
		<td width="120"><a href="zc.html"><img src="[!--news.url--]images/TopRx_r1_c21.jpg" width="54" height="28" border="0" /></a></td>-->
	</tr>
	<tr>
		<td colspan="2">&nbsp;</td>
	</tr>
</table>
<table width="1180" border="0" cellpadding="0" cellspacing="0" class="dh">
	<tr>
		<td align="right" valign="top"><a href="[!--news.url--]" class="dh" <?php if($_GET['enews']=='ReIndex'){?>style="color:#0098D9"<?php }?>>首页</a>　<a href="[!--news.url--]js/1.html" class="dh" <?php if($GLOBALS['navclassid']==1){?>style="color:#0098D9"<?php }?>>技术·服务</a>　<a href="[!--news.url--]al/35.html" class="dh" <?php if($GLOBALS['navclassid']==4){?>style="color:#0098D9"<?php }?>>案例</a>　<a href="[!--news.url--]wd/6.html" class="dh" <?php if($GLOBALS['navclassid']==3){?>style="color:#0098D9"<?php }?>>开放文档</a>　<a href="[!--news.url--]kfzzx/37.html" class="dh" <?php if($GLOBALS['navclassid']==9){?>style="color:#0098D9"<?php }?>>开发者中心</a>　</td>
	</tr>
</table>
<table width="100%" border="0" cellspacing="10" cellpadding="0">
<tr valign="top">
<td class="news_list"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="position">
<tr>
<td>您当前的位置：[!--newsnav--]</td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td>[!--empirenews.listtemp--]<ul>
<!--list.var1-->
<!--list.var2-->
<!--list.var3-->
<!--list.var4-->
<!--list.var5--></ul>
[!--empirenews.listtemp--]
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
                <td height="38"><div class="epages">[!--show.listpage--]</div></td>
</tr>
</table>
</td>
</tr>
</table></td>
<td class="sider"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="title">
<tr>
<td><strong>推荐资讯</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="8" cellpadding="0" class="box">
<tr>
<td><? @sys_GetClassNewsPic('selfinfo',2,4,128,90,1,20,2);?>
</td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
<tr>
<td><strong>最后更新</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><ul>
<? @sys_GetEcmsInfo('selfinfo',10,44,0,0,2,0);?> 
</ul></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
<tr>
<td><strong>热门点击</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><ol class="rank">
<? @sys_GetEcmsInfo('selfinfo',10,40,0,1,10,0);?> 
</ol></td>
</tr>
</table></td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" bgcolor="#999999" class="bottom">
	<tr>
		<td width="800" valign="top">
			<div class="bottomdiv">
				<ul>
					<li>TopRx</li>
					<li><a href="[!--news.url--]wzgk/5.html" class="BO">关于我们</a></li>
					<li><a href="[!--news.url--]wzgk/38.html" class="BO">加入我们</a></li>
					<li><a href="[!--news.url--]wzgk/39.html" class="BO">隐私政策</a></li>
					<li><a href="[!--news.url--]wzgk/40.html" class="BO">使用条款</a></li>
				</ul>
			</div>
			<div class="bottomdiv">
				<ul>
					<li>新闻</li>
					<li><a href="[!--news.url--]mtbd/41.html" class="BO">媒体报道</a></li>
					<li><a href="[!--news.url--]gxrz/42.html" class="BO">更新日志</a></li>
				</ul>
			</div>      
			<div class="bottomdiv">
				<ul>
					<li>支持</li>
					<li><a href="[!--news.url--]wd/6.html" class="BO">API文档</a></li>
					<li><a href="[!--news.url--]kfzzx/37.html" class="BO">开发工具与SDK</a></li>
					<li><a href="[!--news.url--]xsyj/43.html" class="BO">学术研究</a></li>
					<li><a href="[!--news.url--]cjwt/44.html" class="BO">常见问题</a></li>
				</ul>
			</div>
		</td>
		<td width="380" valign="top">
			<div class="bottomdiv02">© 2015 Megvii, Inc. All Rights Reserved. <br />京ICP备12036813号-6 <br /></div>
		</td>
	</tr>
</table>
<script src="[!--news.url--]e/extend/DoTimeRepage/"></script>
</body>
</html>