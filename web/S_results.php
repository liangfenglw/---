<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>搜索结果 - 亚媒社</title>
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

<!--订单支付-->

<div class="content"><div class="Invoice">
<div class="INa1dd"><div class="ndt" style="margin-top:40px;padding-bottom:0;">

	<div class="hdorder radius1">
		<h3 class="title1"><strong><a href="#">搜索关键词：新闻 <i>（51）</i></a></strong></h3>
		<div class="dhorder_m">
			
			<div class="tab1" style="height:30px;">
			</div>
			
			<div class="tab1_body" style="min-height:515px;">
<table class="table_in1 cur">
<thead> 
	<tr>
		<th>订单号 </th>
		<th>活动名称</th>
		<th>订单类型</th>
		<th>开始时间</th>
		<th>结束时间</th>
		<th>价格</th>
		<th>订单状态</th>
		<th>完成链接/截图</th>
		<th>操作</th>
	</tr>
</thead>
<tbody>
	<tr>
		<td>12345668</td>
		<td>企业新闻发布</td>
		<td>新闻任务</td>
		<td>2017-3-10 9:12</td>
		<td>2017-3-10 9:12</td>
		<td>￥50.00</td>
		<td>未完成</td>
		<td></td>
		<td><a href="">查看</a><a href="">删除</a></td>
	</tr>
	<tr>
		<td>12345668</td>
		<td>企业新闻发布</td>
		<td>新闻任务</td>
		<td>2017-3-10 9:12</td>
		<td>2017-3-10 9:12</td>
		<td>￥50.00</td>
		<td>未完成</td>
		<td></td>
		<td><a href="">查看</a><a href="">删除</a></td>
	</tr>
	<tr>
		<td>12345668</td>
		<td>企业新闻发布</td>
		<td>新闻任务</td>
		<td>2017-3-10 9:12</td>
		<td>2017-3-10 9:12</td>
		<td>￥50.00</td>
		<td>未完成</td>
		<td></td>
		<td><a href="">查看</a><a href="">删除</a></td>
	</tr>
</tbody>
</table>
			</div>
			
			
		</div>
	
	</div>

</div></div>
</div></div>

<?php include("foot.php"); ?>

<!--	支付弹窗	-->
<div class="pay_info">
	<h3>总金额</h3>
	<h4 class="sum" id="sum2">￥<b>0.00</b></h4>
	<p>任务将由所下单媒体审核，若资源审核成功后便会执行发布，稍后注意前往我的喇叭传媒平台查看</p>
	<form action="" method="post" id="form1">
		<div class="item">
			<input type="password" name="pass" placeholder="请输入您的平台支付密码" class="pass" />
		</div>
		<div class="item">
			<button type="submit" class="sub">支付</button>
		</div>
	</form>
</div>

<script type="text/javascript">
/*	计算金额	*/
function reset_total(){
	var total=0;
	var rows_order=0;
	$("input[name='checkItem']").each(function(){
		var price=parseFloat($(this).attr("data-price"));
		if( $(this).is(":checked") ){
			total += price;
			rows_order++;
		}
	});
	$("#rows_order").text(rows_order);
	$("#sum b").text(total);
	$("#sum2 b").text(total);
}
$(".table_in1 input:checkbox").change(function(){
	reset_total();
});

/*	全选	*/
$("#checkall").on("click",function(){
	if( $(this).is(":checked") ) {
		$("input[name='checkItem']").prop("checked",true);
	}else{
		$("input[name='checkItem']").prop("checked",false);
	}
	reset_total();
});

/*	删除选中订单	*/
$("#delorder").click(function(){
	event.preventDefault();
	layer.confirm("确定要删除选中的订单吗？",{
		btn:["确定2","取消1"]
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
/*	点击结算弹出支付	*/
$("#settle").click(function(){
	event.preventDefault();
	layer.open({
		type: 1,
		title: " ",
		shadeClose: true, //开启遮罩关闭
		skin: 'pay_info_w', //加上class设置样式
		area: ['430px'], //宽高
		content: $(".pay_info")
	});
});
reset_total();
</script>


</div>
</body>
</html>
