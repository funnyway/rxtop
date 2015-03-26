<?php
require("../hi_init.php");
//var_dump($db->get_all('show tables'));
$key = PAPI_GetSafeParam('key');
$data = array();
if($key == 'username'){
	$value = PAPI_GetSafeParam('us');
	$sql = "select * from publicapi_user where account='$value'";
}elseif($key == 'companyname') {
	$value = PAPI_GetSafeParam('cn');
	$sql = "select * from publicapi_user where cname='$value'";
}
if($rs = $db->get_one($sql)) {
	$data['status'] = 1;
	$data['msg'] = $key.'存在';
	//$data['sql'] = $sql;
}else {
	$data['status'] = 0;
	$data['msg'] =	 $key.'不存在，可以注册';
	//$data['sql'] = $sql;
}
echo json_encode($data);