<?php
/**
 * Created by PhpStorm.
 * User: Voson_2
 * Date: 2016/9/4
 * Time: 22:14
 */
error_reporting(0);

?>




<body style="background-color:rgb(240,243,244);font-family: '微软雅黑'">

<div style="background-color: white;height: 40px;vertical-align: middle;">
    <!--<button class="btn btn-default"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></button>-->

    <div class="pull-right" style="display: inline-block;margin-right: 20px;">
        <span style="font-size: 16px;line-height:40px;height: 40px;">
                <?php echo $_SESSION[user_name] ?>
</span>
</div>

<div class="pull-right"
     style="font-size:30px;line-height:30px;display: inline-block;padding: 5px;">
    <i class="fa fa-user" style="vertical-align: middle"></i>
</div>

</div>

</body>