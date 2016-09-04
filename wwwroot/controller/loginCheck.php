<?php
/**
 * Created by PhpStorm.
 * User: Voson_2
 * Date: 2016/9/4
 * Time: 16:58
 */

session_start();

$url = $_SERVER['PHP_SELF'];
//截取文件名称
$name = substr($url, strrpos($url, '/') + 1);

if (!isset($_SESSION['isLogin'])) {
    if ($name != 'login.php') {
        header("Location:login.php");
        exit;
    }
} else {
    if ($name == "login.php") {
        header("Location:index.php");
        exit;
    }

}

?>


