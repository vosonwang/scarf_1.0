<?php
/**
 * Created by PhpStorm.
 * User: Voson_2
 * Date: 2016/9/4
 * Time: 14:03
 */

require __DIR__ . "/controller/loginCheck.php";
require __DIR__ . "/../template/favicon.php";
require __DIR__ . "/../template/nav.php";
error_reporting(0);
?>


<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">




<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-sm-3 ">
            <div style="background-color: white;width: 100%;" class="jumbotron">
                <h2 class="text-center">
                    <a href="receiving.php" style="text-decoration: none;">收货记录</a>
                </h2>
            </div>
        </div>
        <div class="col-sm-3">
            <div style="background-color: white;width: 100%;" class="jumbotron">
                <h2 class="text-center">
                    <a href="delivery.php" style="text-decoration: none;">发货记录</a>
                </h2>
            </div>
        </div>
        <div class="col-sm-3">

        </div>
        <div class="col-sm-3">

        </div>
    </div>
</div>



</html>

