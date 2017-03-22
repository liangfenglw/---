<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>媒体供应商_帐单查询 - 亚媒社</title>
    <link href="css/reset.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/style2.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
<script src="js/jquery.touchslider.min.js"  type="text/javascript"></script>

<script type="text/javascript" src="js/date.js"></script>
<script type="text/javascript" src="js/main2.js"></script>
<script type="text/javascript" src="js/jquery.tools.min.js"></script>
</head>
<body >

<?php include("head.php"); ?>

<div class="w100 nav_hdorder clearfix clr">
<div class="content"><div class="Invoice" style="background:#fff;"><div class="INa1dd">
	<div class="w100">
		<ul class="tab">
			<li><a href="huodongorder.php">活动订单</a></li>
			<li><a href="">预约订单</a></li>
			<li><a href="resource_management.php">资源管理</a></li>
			<li class="cur"><a href="bill_inquiry.php">账单查询</a></li>
			<li><a href="user_center.php">用户中心</a></li>
		<ul>
	</div>
</div></div></div>
</div>

<!--帐单查询-->

<div class="content"><div class="Invoice"><div class="INa1dd" style="margin-top:20px;">
	<div class="info1 clearfix">
		<div class="info1_l">
			<div class="bill1" style="border-bottom:1px dotted #e5e5e5;">
				<h3>平台打款金额：</h3>
				<p>￥15890.00 元</p></li>
			</div>
			<div class="bill1">
				<h3>余额：</h3>
				<p>￥5890.00 元</p>
			</div>
		</div>
		<div class="info1_m">
			<div class="bill1 bill2">
				<h3>拥有媒体帐号数：</h3>
				<p>84565个</p>
			</div>
			<div class="bill1 bill2" style="margin-top:19px;">
				<h3>已完成订单数：</h3>
				<p>65个</p>
			</div>
		</div>
		<div class="info1_r"><img src="/images/pic6.jpg" ></div>
	</div>
	<!--<div class="info2">
		<div class="info2_l">
			<h3>可接单数：0 单</h3>
			<a href="" class="btn_b">我要去接单</a>
		</div>
		<div class="info2_r">
			<h3>申诉中的单数：</h3>
			<b>0 单</b>
		</div>
	</div>-->
</div></div></div>



<div class="content"><div class="Invoice">
<div class="INa1dd"><div class="ndt" style="margin-top:30px;padding-bottom:0;">

	<div class="hdorder radius1">
		<h3 class="title1"><strong><a href="#">财务明细</a></strong></h3>
		<div class="dhorder_m">
			<div class="tab1">
				<ul>       
					<li class="cur"><a href="#">全部</a></li>
					<li><a href="#">本月</a></li>
					<li><a href="#">上月</a></li>
				</ul>
				<div class="search_2">
					<form action="" method="" name="">
						<div class="l">
							<span>起止时间</span>
						</div>
						<div class="l">
							<input type="text" class="txt2" id="datepicker1" />-<input type="text" class="txt2" id="datepicker2" />
						</div>
						<div class="l">
							<input type="submit" name="submit" class="sub4" value="查询" />
						</div>
					</form>
				</div>
				<a href="" class="daochu">导出财务明细</a>
			</div>
			<div class="tab1_body" style="min-height:515px;">
<table class="table_in1 cur">
<thead>
	<tr>
		<th>日期</th>
		<th>订单号</th>
		<th>订单类型</th>
		<th>订单名称</th>
		<th>截图/链接</th>
		<th>金额</th>
	</tr>
</thead>
<tbody>
	<tr>
		<td colspan="9">
			<div class="nodata">
				<img src="/images/nodata.png" />
				<p>您目前暂无明细信息</p>
			</div>
		</td>
	</tr>
</tbody>
</table>
<table class="table_in1">
<thead>
	<tr>
		<th>日期</th>
		<th>订单号</th>
		<th>订单类型</th>
		<th>订单名称</th>
		<th>截图/链接</th>
		<th>金额</th>
	</tr>
</thead>
<tbody>
	<tr>
		<td>2016.8.18</td>
		<td>24r34f66</td>
		<td>新闻任务</td>
		<td>秒分必争创业</td>
		<td><a href="" target="_blank"><img class="link" src="/images/ico_link.png" alt="链接/截图" /></a></td>
		<td><span class="color_red2">80元</span></td>
	</tr>
</tbody>
</table>
<table class="table_in1">
<thead>
	<tr>
		<th>日期</th>
		<th>订单号</th>
		<th>订单类型</th>
		<th>订单名称</th>
		<th>截图/链接</th>
		<th>金额</th>
	</tr>
</thead>
<tbody>
	<tr>
		<td>2016.8.18</td>
		<td>24r34f66</td>
		<td>新闻任务</td>
		<td>秒分必争创业</td>
		<td><a href="" target="_blank"><img class="link" src="/images/ico_link.png" alt="链接/截图" /></a></td>
		<td><span class="color_red2">80元</span></td>
	</tr>
</tbody>
</table>
			</div>
			
		</div>
	
	</div>





</div></div>
</div></div>


<?php include("foot.php"); ?>

<script type="text/javascript">
/*	日历	*/
var picker1 = new Pikaday({
	field: document.getElementById('datepicker1'),
	firstDay: 1,
	minDate: new Date('2000-01-01'),
	maxDate: new Date('2020-12-31'),
	yearRange: [2000,2020]
});
var picker2 = new Pikaday({
	field: document.getElementById('datepicker2'),
	firstDay: 1,
	minDate: new Date('2000-01-01'),
	maxDate: new Date('2020-12-31'),
	yearRange: [2000,2020]
});
</script>

</div>
</body>
</html>
