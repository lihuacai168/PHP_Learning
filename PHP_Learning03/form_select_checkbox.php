<?php
/**
 * Created by PhpStorm.
 * User: Rikasai
 * Date: 2018/9/27
 * Time: 23:59
 */
$q = isset($_POST['q'])?$_POST["q"]:'';
if (is_array($q)){
    $site = array(
        'RUNOOB1' => '数组1',
        'RUNOOB2' => '数组2',
        'RUNOOB3' => '数组3',
    );
    foreach ($q as $val){
        echo $site["$val"].PHP_EOL;
    }
}
else {
    ?>
    <form action="" method="post">
        <input type="checkbox" name=q[] value="RUNOOB1">RUNOOB1<br>
        <input type="checkbox" name=q[] value="RUNOOB2">RUNOOB2<br>
        <input type="checkbox" name=q[] value="RUNOOB3">RUNOOB3<br>
        <input type="submit" value="提交">
    </form>
    <?php
}
?>