<?php
require("../hi_init.php");
if(!isset($_SESSION['toprx_api_userid'])) {
	header('Location:/hi/login.php');
}
$data = array();
$data['cid'] = $_SESSION['toprx_api_userid'];
$data['appname'] = PAPI_GetSafeParam('appname');
$data['appdesc'] = PAPI_GetSafeParam('appdesc');
$data['servertype'] = PAPI_GetSafeParam('servertype');
$data['apptype'] = PAPI_GetSafeParam('apptype');
$data['appplat'] = PAPI_GetSafeParam('appplat');
$data['callurl'] = PAPI_GetSafeParam('callurl');
$data['appkey'] = getSecret(20);
$data['createtime'] = date('Y-m-d H:i:s',time());

$rs = array();
if($db->insert('publicapi', $data)) {
	$rs['status']  = 1;
	$rs['msg'] = '添加成功';
	echo json_encode($rs);
}else {
	$rs['status']  = 0;
	$rs['msg'] = '添加失败';
	echo json_encode($rs);
}