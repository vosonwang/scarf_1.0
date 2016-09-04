<?php
/**
 * Created by PhpStorm.
 * User: Voson_2
 * Date: 2016/8/29
 * Time: 21:45
 */

require __DIR__ . "/controller/loginCheck.php";
require __DIR__ . "/../template/favicon.php";
require __DIR__ . "/../template/nav.php";
error_reporting(0);
session_start();
date_default_timezone_set('prc');
?>
<!DOCTYPE html>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/table.css" rel="stylesheet">

<title>后道厂收货记录</title>




<body style="font-family: 微软雅黑,Arial">


<div class="container" id="receiving" >
    <div class="row">
        &nbsp;
    </div>
    <div class="row" style="background-color: white">
        <div class="col-xs-12">
            <div style="height: 50px; padding: 10px 0;">
                <h4 style="margin-bottom: 0;font-weight: bold;width: 100px;display:inline">收货记录</h4>

                <div class="pull-right" style="display: inline">
                    <button class="btn btn-default" @click="insert">保存</button>
                    <button class="btn btn-default right" @click="delete">删除</button>
                    <button class="btn btn-default right" data-toggle="modal" data-target="#new_records">增加</button>
                </div>
            </div>
        </div>
        <div class="col-xs-12">
            <table
                class="table table-striped table-bordered table-hover table-bordersed table-condensed text-center unselectable">
                <thead>
                <tr>
                    <th class="text-center border">No</th>
                    <th class="text-center">收货日期</th>
                    <th class="text-center">单号</th>
                    <th class="text-center">花型</th>
                    <th class="text-center">条数</th>
                    <th class="text-center">匹数</th>
                    <th class="text-center">发货人</th>
                </tr>
                </thead>
                <tbody>
                <template v-for="(index,item) in records | orderBy 'receipt_date' ">
                    <tr @click="getId(item,$event)" id="i{{item.id}}">
                        <th class="border text-center change_to_add">{{index+1}}</th>
                        <td>{{item.receipt_date | dateFormat}}</td>
                        <td>{{item.order_no}}</td>
                        <td>{{item.pattern}}</td>
                        <td>{{item.pieces}}</td>
                        <td>{{item.trips}}</td>
                        <td>{{item.user_name}}</td>
                    </tr>
                </template>

                </tbody>
            </table>
        </div>

    </div>

    <div class="modal fade " role="dialog" aria-labelledby="gridSystemModalLabel" id="new_records">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <table
                                class="table table-striped table-bordered table-hover table-bordersed table-condensed text-center unselectable">
                                <thead>
                                <tr>
                                    <th class="text-center border">No</th>
                                    <th class="text-center">收货日期</th>
                                    <th class="text-center">单号</th>
                                    <th class="text-center">花型</th>
                                    <th class="text-center">条数</th>
                                    <th class="text-center">匹数</th>
                                    <th class="text-center">发货人</th>
                                </tr>
                                </thead>
                                <tbody>
                                <template v-for="(index,item) in new_records ">
                                    <tr>
                                        <td class="border">
                                            <input class="addRow" disabled="disabled" value={{index+1}}>
                                        </td>
                                        <td><input class="addRow" v-model="item.receipt_date" value='<?php echo date('m-d h:i',time()); ?>'></td>
                                        <td><input class="addRow" type="text" v-model="item.order_no"></td>
                                        <td><input class="addRow" type="text" v-model="item.pattern"></td>
                                        <td><input class="addRow" type="number" v-model="item.pieces"></td>
                                        <td><input class="addRow" type="number" v-model="item.trips"></td>
                                        <td><input class="addRow" type="text" v-model="item.user_name" value=<?php echo $_SESSION['user_name'] ?>></td>
                                    </tr>
                                </template>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" @click="insert">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

</div>

<script src="js/jquery.min.js"></script>
<script src="js/vue.js"></script>
<script src="vm/receiving.js"></script>


<script src="js/bootstrap.min.js"></script>

<script src="js/moment.min.js"></script>
<script src="js/moment.zh-cn.js"></script>


</body>
</html>