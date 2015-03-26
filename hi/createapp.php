<?php 
require 'hi_init.php';
if(!isset($_SESSION['toprx_api_userid'])) {
	header('Location:/hi/login.php');
}
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
	    <div class="h6"><span class="zspan">创建应用</span></div>
	    
	    <form id="appform" action="server/docreateapp.php" method="post">

		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="table02">
  <tr>
    <td>应用名称</td>
  </tr>
  <tr>
    <td>
      <input id="appname" name="appname" type="text" class="sr" />
      <div id="appnameTip" style="width: 150px"></div>
 </td>
  </tr>
  <tr>
    <td>应用描述</td>
  </tr>
  <tr>
    <td>
      <textarea name="appdesc" class="wbk"></textarea>
    </td>
  </tr>
  <tr>
    <td>调用方域名</td>
  </tr>
  <tr>
    <td>
    	 <input id="callurl" name="callurl" type="text" class="sr" />
    	 <div id="callurlTip" style="width: 150px"></div>
    </td>
  </tr>
  <tr>
    <td>API服务器</td>
  </tr>
  <tr>
    <td>
    	<input type="radio" name="servertype" value=1 checked  id="servertype1" /><label for="servertype1">&nbsp;阿里云&nbsp;</label>
    </td>
  </tr>
  <tr>
    <td>应用类型</td>
  </tr>
  <tr>
    <td>
		<input type="radio" name="apptype"   value=1  id="apptype1"  /><label for="apptype1">&nbsp;娱乐&nbsp;</label>
		<input type="radio" name="apptype"   value=2  id="apptype2" /><label for="apptype2"> &nbsp;相册&nbsp;</label>	
		<input type="radio" name="apptype"   value=3 id="apptype3" /><label for="apptype3">&nbsp;社交&nbsp;</label>
		<input type="radio" name="apptype"   value=4 id="apptype4"  /><label for="apptype4">&nbsp; 监控&nbsp;</label>
		<input type="radio" name="apptype"  value=5  id="apptype5" /><label for="apptype5">&nbsp;游戏&nbsp;</label>
		<input type="radio" name="apptype" value=6   id="apptype6" /><label for="apptype6">&nbsp;教育&nbsp;</label>
		<input type="radio" name="apptype"  value=0  id="apptype0"  /><label for="apptype0">&nbsp;其他&nbsp;</label>
		<div id="apptypeTip" style="width: 150px"></div>
      </td>
      
  </tr>
  <tr>
    <td>应用平台</td>
  </tr>
  <tr>
    <td>
	    <input type="checkbox"  name="appplat" value="1" id="appplat1" /><label for="appplat1">IOS</label>
	    <input type="checkbox"  name="appplat" value="2" id="appplat2" /><label for="appplat2">Android</label>
	    <input type="checkbox"  name="appplat" value="3" id="appplat3" /><label for="appplat3">Web</label>
	    <input type="checkbox"  name="appplat" value="4" id="appplat4" /><label for="appplat4">PC</label>
	    <input type="checkbox"  name="appplat" value="5" id="appplat5" /><label for="appplat5">其他</label>
	    <div id="appplatTip" style="width: 150px"></div>
	</td>
  </tr>
  <tr>
    <td><button id="btn_submit" type="button" ><img src="../images/tj.png" width="58" height="31" border="0" /></button></td>
  </tr>
</table>
	    </form>
		</div>	</td>
  </tr>
</table>
<script src="js/formValidator/jquery-1.4.4.min.js"
	type="text/javascript"></script>
<link type="text/css" rel="stylesheet"
	href="js/formValidator/style/validator.css"></link>
<script src="js/formValidator/formValidator-4.0.1.js"
	type="text/javascript" charset="UTF-8"></script>
<script type="text/javascript">
$(function() {
	$.formValidator.initConfig({formID:"appform",debug:false,submitOnce:true,
		onError:function(msg,obj,errorlist){
			$("#errorlist").empty();
			$.map(errorlist,function(msg){
				$("#errorlist").append("<li>" + msg + "</li>")
			});
			alert(msg);
		},
		submitAfterAjaxPrompt : '有数据正在异步验证，请稍等...'
	});
	$("#appname").formValidator({onShow:"",onFocus:"应用名称至少2个字符,最多15个字符",onCorrect:""})
	.inputValidator({min:2,max:15,onError:"你输入的应用名称非法,请确认"}).defaultPassed();

	$("input[name='apptype']").formValidator({tipID:"apptypeTip",onShow:"",onFocus:"",onCorrect:"",onEmpty:""})
	.inputValidator({min:1,max:1,onError:"请选择您的应用类型"}).defaultPassed();
	
	$("#callurl").formValidator({empty:true,onShow:"",onFocus:"请输入你的域名，可以为空",onCorrect:"",onEmpty:""}).
	regexValidator({regExp:"^[0-9a-zA-Z]+[0-9a-zA-Z\.-]*\.[a-zA-Z]{2,4}$",onError:"你输入的域名格式不正确"}).defaultPassed();
	
	$(":checkbox[name='appplat']").formValidator({tipID:"appplatTip",onShow:"",onFocus:"",onCorrect:""})
	.inputValidator({min:1,onError:"请选择您的应用平台"}).defaultPassed();
	
	$('#btn_submit').click(function() {
		if(!$.formValidator.pageIsValid('1')) return false; //如果不通过则不提交
		$.ajax({
		 	type : 'POST',
			dataType : "json",
			url : "server/docreateapp.php",
			data:$('#appform').serialize(),
			success : function(data){
				console.log(data);
	            if(data.status==1){            	
	            	window.location.href = "myapp.php";
		        }else {
		        	alert(data.msg);
			    }
			}
		})
	})
})
</script>
<?php 
require('template/foot.temp.php'); //导入尾部
?>