<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>订单支付 - 亚媒社</title>
    <link href="css/reset.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/style2.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
<script src="js/jquery.touchslider.min.js"  type="text/javascript"></script>
<script type="text/javascript" src="js/layer/layer.js"></script>
<script type="text/javascript" src="js/main2.js"></script>
<script type="text/javascript" src="js/jquery.tools.min.js"></script>
</head>
<body >

<?php include("head.php"); ?>

<!--用户角色分组列表-->

<div class="content"><div class="Invoice">
<div class="INa1dd"><div class="ndt" style="margin-top:40px;padding-bottom:0;">

	<div class="hdorder radius1">
		<h3 class="title1"><strong><a href="#">用户角色分组列表</a></strong></h3>
		<div class="dhorder_m">
			<div class="Urole">
				<input type="text" name=""  placeholder="请输入角色名"/>
				<input type="submit" value="创建新角色" />
			</div>
			<div class="tab1" style="">
			</div>
			
			<div class="tab1_body" style="min-height:580px;">
<table class="table_in1 cur">
<thead>
	<tr>
		<th>组ID</th>
		<th>组名称</th>
		<th>拥有权限（单位：个）</th>
		<th>状态</th>
		<th>操作</th>
	</tr>
</thead>
<tbody>
	<tr>
		<td>1</td>
		<td>超级管理员</td>
		<td>全部</td>
		<td>开启</td>
		<td><a href="">修改权限</a>|<a href="">删除</a></td>
	</tr>
	<tr>
		<td>2</td>
		<td>供应商</td>
		<td>10</td>
		<td>开启</td>
		<td><a href="">修改权限</a>|<a href="">删除</a></td>
	</tr>
	<tr>
		<td>3</td>
		<td>普通会员</td>
		<td>10</td>
		<td>开启</td>
		<td><a href="">修改权限</a>|<a href="">删除</a></td>
	</tr>
</tbody>
</table>
			</div>
		</div>
	
	</div>

</div></div>
</div></div>

<?php include("foot.php"); ?>



</div>
</body>
</html>
