<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>任务管理- 亚媒社</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<link href="css/reset.css" rel="stylesheet" type="text/css" />
	<link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
	
	<link href="css/style2.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
	<script src="js/jquery.touchslider.min.js"  type="text/javascript"></script>

	<script type="text/javascript" src="js/date.js"></script>
	<script type="text/javascript" src="js/main2.js"></script>

<script type="text/javascript" src="js/jquery.tools.min.js"></script>
</head>
<body>

<?php include("head.php"); ?>

<div class="content"><div class="Invoice"><div class="INa1dd">
<div class="main" style="margin-top:40px;">
		
	<!--	活动订单	-->
	<div class="hdorder radius1">
		<h3 class="title1"><strong><a href="#">任务管理</a></strong>
			<div class="search_1">
				<form action="" method="" name="">
					<div class="l">
						<span>起始时间</span>
					</div>
					<div class="l">
						<input type="text" class="txt2" id="datepicker1" />-<input type="text" class="txt2" id="datepicker2" />
					</div>
					<div class="l">
						<select class="sel1">
							<option value="">平台</option>
							<option value="">ID号</option>
							<option value="">名称</option>
							<option value="">类型</option>
							<option value="">时间</option>
							<option value="">实费</option>
						</select>
					</div>
					<div class="l">
						<input type="text" class="txt5" placeholder="活动名称" />
						<input type="text" class="txt5" placeholder="资源名称" />
						<input type="submit" name="submit" class="sub4" value="查询" />
					</div>
				</form>
			</div>
			<div class="clr"></div>
		</h3>
		<div class="dhorder_m">
			<div class="tab1">
				<ul>       
					<li class="cur"><a href="#">全部订单</a></li>
					<li><a href="#">已派单</a></li>
					<li><a href="#">已完成</a></li>
					<li><a href="#">未完成</a></li>
					<li><a href="#">需修改订单</a></li>
					<li><a href="#">已流单</a></li>
					<li><a href="#">已拒单</a></li>
					<li><a href="#">已取消</a></li>
				</ul>
			</div>
			<div class="tab1_body">
<table class="table_in1 cur">
<thead>
	<tr>
		<th>订单号</th>
		<th>活动名称</th>
		<th>订单类型</th>
		<th>所属用户</th>
		<th>用户角色</th>
		<th>开始时间</th>
		<th>结束时间</th>
		<th>价格</th>
		<th>订单状态</th>
		<th>完成链接/截图</th>
		<th>备注</th>
		<th>操作</th>           
	</tr>
</thead>
<tbody>
	<tr>
		<td>24r34f66</td>
		<td>秒分必争创业</td>
		<td>新闻任务</td>
		<td>13711174990</td>
		<td>会员</td>
		<td>2016.8.18</td>
		<td>2016.8.27</td>
		<td><span class="color_red1">￥2830</span></td>
		<td>未完成</td>
		<td><a href="" target="_blank"><img class="link" src="/images/ico_link.png" alt="完成链接/截图" /></a></td>
		<td>备注</td>
		<td><select>
				<option>查看</option>
				<option>删除</option>
			</select></td>
	</tr>
	<tr>
		<td>24r34f66</td>
		<td>秒分必争创业</td>
		<td>新闻任务</td>
		<td>13711174990</td>
		<td>供应商</td>
		<td>2016.8.18</td>
		<td>2016.8.27</td>
		<td><span class="color_red1">￥2830</span></td>
		<td>未完成</td>
		<td><a href="" target="_blank"><img class="link" src="/images/ico_link.png" alt="完成链接/截图" /></a></td>
		<td>备注</td>
		<td><select>
				<option>查看</option>
				<option>删除</option>
			</select></td>
	</tr>
</tbody>
</table>
<table class="table_in1">
<thead>
	<tr>
		<th>订单号</th>
		<th>活动名称</th>
		<th>订单类型</th>
		<th>所属用户</th>
		<th>用户角色</th>
		<th>开始时间</th>
		<th>结束时间</th>
		<th>价格</th>
		<th>订单状态</th>
		<th>完成链接/截图</th>
		<th>备注</th>
		<th>操作</th>           
	</tr>
</thead>
<tbody>
	<tr>
		<td>24r34f66</td>
		<td>秒分必争创业</td>
		<td>新闻任务</td>
		<td>13711174990</td>
		<td>会员</td>
		<td>2016.8.18</td>
		<td>2016.8.27</td>
		<td><span class="color_red1">￥2830</span></td>
		<td>流单</td>
		<td><a href="" target="_blank"><img class="link" src="/images/ico_link.png" alt="完成链接/截图" /></a></td>
		<td>备注</td>
		<td><select>
				<option>查看</option>
				<option>删除</option>
			</select></td>
	</tr>
	<tr>
		<td>24r34f66</td>
		<td>秒分必争创业</td>
		<td>新闻任务</td>
		<td>13711174990</td>
		<td>供应商</td>
		<td>2016.8.18</td>
		<td>2016.8.27</td>
		<td><span class="color_red1">￥2830</span></td>
		<td>拒单</td>
		<td><a href="" target="_blank"><img class="link" src="/images/ico_link.png" alt="完成链接/截图" /></a></td>
		<td>备注</td>
		<td><select>
				<option>查看</option>
				<option>删除</option>
			</select></td>
	</tr>
</tbody>
</table>

			</div>
			<div style="padding:30px 33px;background:#fff;">
				<div class="info_hdorder clearfix">
					<strong>本月订单统计</strong>
					<ul>
						<li>总订单数0个/0元</li>
						<li>已完成0个/0元</li>
						<li>流单数0个/0元</li>
						<li>取消数0个/0元</li>
						<li>拒单数0个/0元</li>
					</ul>
				</div>
			</div>
			
		</div>
	
	</div>


	<div class="clr"></div>
</div>
</div></div></div>

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


</body>
</html>
