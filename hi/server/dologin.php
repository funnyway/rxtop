<?php
require("../hi_init.php");
$account = PAPI_GetSafeParam('us');
$password = PAPI_GetSafeParam('password');
$preurl = PAPI_GetSafeParam('http_refer');
if(!$account||!$password) {
	$rs['status']  = 0;
	$rs['msg'] = '请输入账号和密码';
	echo json_encode($rs);
}

$rs = array();
$sql = "select cid,account,password,cname from  publicapi_user where account='$account'";
if($row = $db->get_one($sql)) {
	if($row['password'] == md5($password)) {
		$rs['status']  = 1;
		$rs['msg'] = '登录成功';
		session('toprx_api_username',$row['cname']) ;
		session('toprx_api_userid',$row['cid']) ;
		echo json_encode($rs);
	}else {
		$rs['status']  = 2;
		$rs['msg'] = '密码错误';
		echo json_encode($rs);
	}
}else {
	$rs['status']  = 3;
	$rs['msg'] = '账号不存在';
	echo json_encode($rs);
}