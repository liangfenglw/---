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

<!--订单回收站-->

<div class="content"><div class="Invoice">
<div class="INa1dd"><div class="ndt" style="margin-top:40px;padding-bottom:0;">

	<div class="hdorder radius1">
		<h3 class="title1"><strong><a href="#">已删除订单<i>（51）</i></a></strong></h3>
		<div class="dhorder_m">
			
			<div class="tab1" style="height:30px;">
			</div>
			
			<div class="tab1_body" style="min-height:580px;">
<table class="table_in1 cur">
<thead>
	<tr>
		<th>订单ID</th>
		<th>定单类型</th>
		<th>活动标题</th>
		<th>删除时间</th>
		<th>价格</th>
		<th>状态</th>
	</tr>
</thead>
<tbody>
	<tr>
		<td>生成订单ID</td>
		<td>定单类型</td>
		<td>活动标题</td>
		<td>删除时间</td>
		<td><span class="color_red2">80元</span></td>
		<td><a href="">恢复</a>|<a href="">删除</a></td>
	</tr>
	<tr>
		<td>生成订单ID</td>
		<td>定单类型</td>
		<td>活动标题</td>
		<td>删除时间</td>
		<td><span class="color_red2">80元</span></td>
		<td><a href="">恢复</a>|<a href="">删除</a></td>
	</tr>
</tbody>
</table>
			
		</div>
	
	</div>

</div></div>
</div></div>

<?php include("foot.php"); ?>


<script type="text/javascript">


/*	删除选中订单	*/
$("#delorder").click(function(){
	event.preventDefault();
	layer.confirm("确定要永久删除选中的订单吗？",{
		btn:["确定","取消"]
	},function(){
		$("input[name='checkItem']").each(function(){
			if( $(this).is(":checked") ){
				$(this).closest("tr").remove();
			}
		});	
		layer.msg('删除成功', {icon: 1});
		reset_total();
	},function(){
		layer.msg('删除已取消', {icon: 1});
	});
});

</script>


</div>
</body>
</html>
