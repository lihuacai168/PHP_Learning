<?php
/**
 * Created by PhpStorm.
 * User: Rikasai
 * Date: 2018/9/27
 * Time: 23:23
 */

$q = $_GET["q"];
if ($q){
    if($q == 'Baidu'){
        echo "https://baidu.com";
    }
    else if ($q == 'Google'){
        echo "https://googl.com";
    }
    else{
        echo "不是谷歌,也不是百度";
    }
}