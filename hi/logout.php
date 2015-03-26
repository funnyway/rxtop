<?php
require("hi_init.php");
session('toprx_api_username',null) ;
session('toprx_api_userid',null);
$url = $_SERVER["HTTP_REFERER"];
header('Location:'.$url);
