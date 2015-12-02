<?php
/**
 * Created by PhpStorm.
 * User: eureka
 * Date: 11/27/15
 * Time: 12:50 AM
 */
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<ul class="nav nav-tabs  navbar-inverse navbar-fixed-top">
    <li role="presentation" class="active"><a href="#">Home</a></li>
    <li role="presentation"><a href="#">Profile</a></li>
    <li role="presentation"><a href="#">Messages</a></li>
</ul>
<div class="container-fluid">
    <div class="row">

<div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
        <li><a href="#">func1</a></li>
        <li><a href="#">func2</a></li>
        <li><a href="#">func3</a></li>
    </ul>

</div>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">推荐函数</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr><th>case得分</th><th>case名称</th><th>case输入</th><th>case输出</th><th>操作</th></tr>
            </thead>
            <tbody>
            <tr><td>case得分</td><td>case名称</td><td>case输入</td><td>case输出</td><td>操作</td></tr>

            </tbody>
        </table>

    </div>

</div>
    </div>
</div>
</body>

</html>