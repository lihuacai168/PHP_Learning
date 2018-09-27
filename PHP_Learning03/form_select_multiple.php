<?php
/**
 * Created by PhpStorm.
 * User: Rikasai
 * Date: 2018/9/27
 * Time: 23:23
 */

$q = $_POST["q"];
//if (is_array($q)){
//    foreach ($q as $val);
//        echo $val.PHP_EOL;
//}

if(is_array($q)) {
    $sites = array(
        'RUNOOB' => '菜鸟教程: http://www.runoob.com',
        'GOOGLE' => 'Google 搜索: http://www.google.com',
        'TAOBAO' => '淘宝: http://www.taobao.com',
    );
    foreach($q as $val) {
        // PHP_EOL 为常量，用于换行
        echo $sites[$val] . PHP_EOL;
    };
}