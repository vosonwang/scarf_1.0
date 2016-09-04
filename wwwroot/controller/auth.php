<?php
/**
 * Created by PhpStorm.
 * User: voson
 * Date: 16/8/13
 * Time: 14:45
 */
session_start();
require "../../global.php";
require 'vendor/autoload.php';
require "config/db.php";
error_reporting(0);


$datas = $database->select("v_user_detail", "*", [
    "AND" => [
        "login_name" => $_POST[login_name],
        "password" => md5($_POST[password])
    ]
]);

if($datas){

    foreach ($datas[0] as $key => $value ){
        $_SESSION[$key]=$value;
    }
    $_SESSION["isLogin"]=1;

    $arr=[1,"window.location.href='index.php'"];
}else{
    $arr=[0,"用户名或密码错误"];
};
$msg=json_encode($arr);
echo $msg;
/*echo $datas;*/
