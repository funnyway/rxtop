<?php
require('../../class/connect.php'); //引入数据库配置文件和公共函数文件
require('../../class/db_sql.php'); //引入数据库操作文件
$link=db_connect(); //连接MYSQL
$empire=new mysqlquery(); //声明数据库操作类
$editor=1; //声明目录层次
$context='Hello, World!'; //定义显示内容
require('template/index.temp.php'); //导入模板文件

db_close(); //关闭MYSQL链接
$empire=null; //注消操作类变量
?>