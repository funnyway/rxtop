<?php
require("hi_init.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>开发者登录</title>
<link href="../css/main.css" rel="stylesheet" type="text/css" />
<style>
.porleft p {
 height: 35px;
}
.loginleft {
	float: left;
	width: 500px;
	margin-top: 40px;
}
.loginright {
	height: 384px;
	width: 404px;
	border: 2px solid #DEDEDE;
	margin-top: 20px;
	margin-bottom: 20px;
	float: right;
	margin-right: 30px;
}
.logintop {
	font-size: 15px;
	line-height: 46px;
	font-weight: bold;
	color: #333333;
	background-color: #F3F3F7;
	height: 46px;
	width: 404px;
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-bottom-color: #DEDEDE;
	text-indent: 30px;
}
.logintable {
	font-size: 15px;
	line-height: 60px;
	color: #666666;
	text-decoration: none;
	width: 300px;
	margin-right: auto;
	margin-left: auto;
}
.logintable02 {
	font-size: 12px;
	line-height: 34px;
	color: #333333;
	text-decoration: none;
}
.logininput {
	font-size: 14px;
	line-height: 34px;
	color: #666666;
	text-decoration: none;
	height: 34px;
	width: 200px;
	border: 1px solid #DEDEDE;
}
.fb{ font-weight:bold;}
.link-login{font-family: '宋体';}
#nextwrap{position:relative;}
#validatecode{width:75px;}
#pre{font-size:12px;line-height:34px;cursor:pointer;}
.btnGray input.disable{color:#a0a0a0;cursor:default;}
.btns2 {
	display:block;
	border:none;
	color:#fff;
	font-size:14px;
	font-weight:bold;
	cursor: pointer;
	background-repeat: no-repeat;
	background-color: #00B4FF;
	height: 34px;
	width: 100px;
	margin: 0;
	text-align: center;
}
.btns3 {
	display:block;
	border:none;
	color:#fff;
	font-size:14px;
	font-weight:bold;
	cursor: pointer;
	background-repeat: no-repeat;
	background-color: #999999;
	height: 34px;
	width: 100px;
	margin-top: auto;
	margin-right: 0;
	margin-bottom: 0;
	margin-left: 0;
	text-align: center;
}

</style>
</head>


<body>
<div class="box">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td rowspan="2"><img src="../images/TopRx_r2_c3.jpg" width="282" height="72" /></td>
    <td width="60"><a href="#"></a></td>
    <td width="120"><a href="#"></a></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="720" align="center" valign="middle"><img src="../images/login.jpg" width="671" height="388" /></td>
    <td align="left" valign="top">
	<div class="loginright">
		     <div class="logintop">账号登录</div>
			 <table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
               <tr>
                 <td height="40">&nbsp;</td>
               </tr>
             </table>
			 <table class="logintable" width="300" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="80">账户名</td>
    <td><label>
      <input class="logininput" type="text" name="textfield" />
    </label></td>
  </tr>
  <tr>
    <td>密　码</td>
    <td><label>
      <input class="logininput" type="text" name="textfield" />
    </label></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><label>
      <input type="checkbox" name="checkbox" value="checkbox" />
    </label>
      <label for="coks">下次自动登录</label>
      <span class="reg-a">　　　　　　　<a href="#">忘记密码</a> </span></td>
    </tr>
  <tr>
    <td colspan="2"><table width="100%" height="60" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td align="center"><a href="#"><button class="btns2" style="line-height:34px;">登录
          </button></a></td>
          <td align="center" valign="middle"><a href="zc.php"><button class="btns3" style="line-height:34px;">注册
          </button></a></td>
        </tr>
      </table>
      </td>
    </tr>
</table>

	    </div>
	</td>
  </tr>
</table>
<?php

include('template/foot.temp.php');
?>
