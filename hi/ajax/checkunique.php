<?php
require("../hi_init.php");
//var_dump($db->get_all('show tables'));
$key = PAPI_GetSafeParam('key');
$value = PAPI_GetSafeParam('us')?PAPI_GetSafeParam('us'):PAPI_GetSafeParam('cn');
$data = array();
if($key == 'username'){
	$sql = "select * from publicapi_user where account='$value'";
}elseif($key == 'companyname') {
	$sql = "select * from publicapi_user where cname='$value'";
}
if($rs = $db->get_one($sql)) {
	$data['status'] = 0;
	$data['msg'] = $key.'已存在';
}else {
	$data['status'] = 1;
	$data['msg'] =	 $key.'可以注册';
}
echo json_encode($data);