<?php
require("hi_init.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>开发者注册</title>
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
	height: 400px;
	width: 550px;
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
	width:100%;
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
	width: 500px;
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

.fb {
	font-weight: bold;
}

.link-login {
	font-family: '宋体';
}

#nextwrap {
	position: relative;
}

#validatecode {
	width: 75px;
}

#pre {
	font-size: 12px;
	line-height: 34px;
	cursor: pointer;
}

.btnGray input.disable {
	color: #a0a0a0;
	cursor: default;
}

.btns2 {
	display: block;
	border: none;
	color: #fff;
	font-size: 14px;
	font-weight: bold;
	cursor: pointer;
	background-repeat: no-repeat;
	background-color: #00B4FF;
	height: 34px;
	width: 100px;
	margin: 0;
	text-align: center;
}

.btns3 {
	display: block;
	border: none;
	color: #fff;
	font-size: 14px;
	font-weight: bold;
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
				<td rowspan="2"><img src="../images/TopRx_r2_c3.jpg" width="282"
					height="72" /></td>
				<td width="60"><a href="#"></a></td>
				<td width="120"><a href="#"></a></td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
		</table>
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td width="50%" align="center" valign="middle"><img
					src="../images/login.jpg" width="503" height="291" /></td>
				<td align="left" valign="top" width="50%">
					<div class="loginright">
						<div class="logintop">账号注册</div>
						<table width="500" border="0" align="center" cellpadding="0"
							cellspacing="0">
							<tr>
								<td height="40">&nbsp;</td>
							</tr>
						</table>
						<form action="/hi/server/reg.php" method="post" name="form1" id="form1">

							<table class="logintable" width="500" border="0" align="center"
								cellpadding="0" cellspacing="0">
								<tr>
									<td width="80">账号</td>
									<td><label> <input class="logininput" type="text" name="us"
											id="us" />
									</label></td>
									<td><div id="usTip" style="width: 150px"></div></td>
								</tr>
								<tr>
									<td width="80">企业名称</td>
									<td><label> <input class="logininput" type="text" name="cn"
											id="cn" />
									</label></td>
									<td><div id="cnTip" style="width: 150px"></div></td>
								</tr>
								<tr>
									<td>密 码</td>
									<td><label> <input class="logininput" type="password"
											id="password1" name="password1" />
									</label></td>
									<td><div id="password1Tip" style="width: 150px"></div></td>
								</tr>
								<tr>
									<td>确认密码</td>
									<td><label> <input class="logininput" type="password"
											id="password2" name="password2" />
									</label></td>
									<td><div id="password2Tip" style="width: 150px"></div></td>
								</tr>
								
								<tr>
									<td colspan="2"><table width="100%" height="90" border="0"
											cellpadding="0" cellspacing="0">
											<tr>
												<td align="center">
												<button  id="btn_submit" type="submit" class="btns2" style="line-height: 34px;">注册 </button></td>
												<td align="center" valign="middle">
												<a href="login.php"><button
														class="btns3" style="line-height: 34px;">返回 </button></a></td>
											</tr>
										</table></td>
								</tr>
							</table>
							</form>
					
					</div>
				</td>
			</tr>
		</table>
		<script src="js/formValidator/jquery-1.4.4.min.js"
			type="text/javascript"></script>
		<link type="text/css" rel="stylesheet"
			href="js/formValidator/style/validator.css"></link>
		<script src="js/formValidator/formValidator-4.0.1.js"
			type="text/javascript" charset="UTF-8"></script>
		<script type="text/javascript">
$(document).ready(function(){
	$.formValidator.initConfig({formID:"form1",debug:false,submitOnce:true,
		onError:function(msg,obj,errorlist){
			$("#errorlist").empty();
			$.map(errorlist,function(msg){
				$("#errorlist").append("<li>" + msg + "</li>")
			});
			alert(msg);
		},
		submitAfterAjaxPrompt : '有数据正在异步验证，请稍等...'
	});

	$("#us").formValidator({onShow:"请输入登录账号",onFocus:"用户名至少5个字符,最多15个字符",onCorrect:"该用户名可以注册"}).inputValidator({min:5,max:15,onError:"你输入的用户名非法,请确认"})//.regexValidator({regExp:"username",dataType:"enum",onError:"用户名格式不正确"})
	    .ajaxValidator({
		 type:'POST',
		dataType : "json",
		url : "ajax/checkunique.php",
		data:{key:'username'},
		success : function(data){
			console.log(data);//return;
            if( data.status == 0 ) return true;
            if( data.status == 1 ) return false;
			return false;
		},
		buttons: $("#btn_submit"),
		error: function(jqXHR, textStatus, errorThrown){alert("服务器没有返回数据，可能服务器忙，请重试"+errorThrown);},
		onError : "该用户名已存在，不能注册",
		onWait : "正在对用户名进行合法性校验，请稍候..."
	}).defaultPassed();;
	$("#cn").formValidator({onShow:"请输入企业名称",onFocus:"企业名称至少2个字符,最多20个字符",onCorrect:"该企业名称可以使用"}).inputValidator({min:2,max:15,onError:"你输入的企业名称非法,请确认"})//.regexValidator({regExp:"username",dataType:"enum",onError:"用户名格式不正确"})
    .ajaxValidator({
	 type:'POST',
	dataType : "json",
	data:{key:'companyname'},
	url : "ajax/checkunique.php",
	success : function(data){
		console.log(data);//return;
        if( data.status == 0 ) return true;
        if( data.status == 1 ) return false;
		return false;
	},
	buttons: $("#btn_submit"),
	error: function(jqXHR, textStatus, errorThrown){alert("服务器没有返回数据，可能服务器忙，请重试"+errorThrown);},
	onError : "该企业名称已存在，不能使用",
	onWait : "正在对企业名称进行合法性校验，请稍候..."
}).defaultPassed();;
	
	$("#password1").formValidator({onShow:"请输入密码",onFocus:"至少6个长度",onCorrect:"密码合法"}).inputValidator({min:6,empty:{leftEmpty:false,rightEmpty:false,emptyError:"密码两边不能有空符号"},onError:"密码不能为空,请确认"});
	$("#password2").formValidator({onShow:"输再次输入密码",onFocus:"至少6个长度",onCorrect:"密码一致"}).inputValidator({min:6,empty:{leftEmpty:false,rightEmpty:false,emptyError:"重复密码两边不能有空符号"},onError:"重复密码不能为空,请确认"}).compareValidator({desID:"password1",operateor:"=",onError:"2次密码不一致,请确认"});
	$("#email").formValidator({onShow:"请输入邮箱",onFocus:"邮箱6-100个字符,输入正确了才能离开焦点",onCorrect:"恭喜你,你输对了",defaultValue:"@"}).inputValidator({min:6,max:100,onError:"你输入的邮箱长度非法,请确认"}).regexValidator({regExp:"^([\\w-.]+)@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.)|(([\\w-]+.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(]?)$",onError:"你输入的邮箱格式不正确"});
});
</script>
<?php

include('template/foot.temp.php');
?>


