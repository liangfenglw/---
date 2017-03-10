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

<!--修改权限-->

<div class="content"><div class="Invoice">
<div class="INa1dd"><div class="ndt" style="margin-top:40px;padding-bottom:0;">

	<div class="hdorder radius1">
		<h3 class="title1"><strong><a href="#">修改角色权限</a></strong></h3>
		<div class="premissions">
			<h3>组名称：供应商</h3>
			<div style="width: 100%; height: auto;float: left; padding-bottom: 3%;min-height: 500px;">
				<div class="PRlist">
					<p>1、特别权限（仅超级管理员使用）</p>
					<li><input type="checkbox" name="checkbox" />可进行任意操作</li>
				</div>
				<div class="PRlist">
					<p>2、用户管理</p>
					<li><input type="checkbox" name="checkbox" />会员升级</li>
					<li><input type="checkbox" name="checkbox" />添加资源</li>
					<li><input type="checkbox" name="checkbox" />修改账户资料</li>
					<li><input type="checkbox" name="checkbox" />发布订单任务</li>
					<li><input type="checkbox" name="checkbox" />接收活动订单</li>
					<li><input type="checkbox" name="checkbox" />恢复删除活动订单</li>
				</div>
				<div class="PRlist">
					<p>3、系统管理</p>
					<li><input type="checkbox" name="checkbox" />查看系统日志</li>
				</div>
			</div>
		</div>
	
	</div>

</div></div>
</div></div>

<?php include("foot.php"); ?>

</div>
</body>
</html>
