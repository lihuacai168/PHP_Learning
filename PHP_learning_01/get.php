<?php
header("Context-Type:text/html; charset=utf-8");
/**
 * Created by PhpStorm.
 * User: Rikasai
 * Date: 2018/9/16
 * Time: 18:52
 */
//var_dump($_GET);
$username = $_GET['username'];
$id = $_GET['id'];
echo $username;
echo 'id值是:'+$id;