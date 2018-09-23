<?php
header("Context-Type:text/html; charset=utf-8");
/**
 * Created by PhpStorm.
 * User: Rikasai
 * Date: 2018/9/16
 * Time: 18:52
 */
//var_dump($_GET);
$name = $_POST['username'];
$pwd = $_POST['password'];

$ck_name = $_POST['fav'];
$ck_id = $_POST['fav_id'];

$server = $_SERVER;
echo 'post方法获取的用户名:'.$name;
echo "<br/>";
echo 'post方法获取的密码:'.$pwd;

//echo "<br/>name获取的fav :".$ck_name+"<br/>";
//echo "<br/>id获取的fav :".$ck_id;
//echo "服务器:".$server;
var_dump($server);
echo implode(',',$ck_name);