<?php
print_r($_POST);die;
require("../hi_init.php");
$account = PAPI_GetSafeParam('us');
$password = PAPI_GetSafeParam('password');
$cname = PAPI_GetSafeParam('cname');
if($db->get_one("select * from publicapi_user where cname='$account'")) {
	die('账户已存在');
}
if($db->get_one("select * from publicapi_user where cname='$cname'")) {
	die('企业名称已存在');
}
$cid = time();
if($db->get_one("select * from publicapi_user where cname='$cid'")) {
	die('访问频繁，请稍等');
}
$data['cid'] = time();
$data['account']  = $account;
$data['password'] = md5($password);
$data['cname'] = $cname;
$data['secret'] = getSecret(40);
$data['createtime'] = date('Y-m-d H:i:s',$cid);
$rs = array();
if($db->insert('publicapi_user', $data)) {
	$rs['status']  = 1;
	$rs['msg'] = '注册成功';
	echo json_encode($rs);
}else {
	$rs['status']  = 0;
	$rs['msg'] = '注册失败';
	echo json_encode($rs);
}