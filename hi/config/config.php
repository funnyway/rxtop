<?php
//数据库设置
$db_config = array();
$db_config["hostname"] = "localhost"; //服务器地址
$db_config["username"] = "root"; //数据库用户名
$db_config["password"] = "123456"; //数据库密码
$db_config["database"] = "trx"; //数据库名称
$db_config["charset"] = "utf8";//数据库编码
$db_config["pconnect"] = 1;//开启持久连接
$db_config["log"] = 1;//开启日志
$db_config["logfilepath"] =ROOT. '/hi/log/';//开启日志

// global $ecms_config;
// $ecms_config['db']['usedb']='mysql';	//数据库类型
// //$ecms_config['db']['dbver']='5.0';	//数据库版本
// $ecms_config['db']['dbserver']='holddo201475n.mysql.rds.aliyuncs.com';//数据库登录地址
// $ecms_config['db']['dbport']='3306';	//端口，不填为按默认
// $ecms_config['db']['dbusername']='wlhy';	//数据库用户名
// $ecms_config['db']['dbpassword']='wlhy_2013';	//数据库密码
// //$ecms_config['db']['dbname']='toprx';	//数据库名（主机数据库）
// $ecms_config['db']['dbname']='toprx';	//数据库名（非主机数据库，数据库记录中带着“toprx/”这个目录）等以后有了域名要换成16行注释掉的数据库。或者批量替换数据记录中的"toprx/e/"为"e/"
// $ecms_config['db']['setchar']='utf8';	//设置默认编码
// $ecms_config['db']['dbchar']='utf8';	//数据库默认编码
// $ecms_config['db']['dbtbpre']='';	//数据表前缀