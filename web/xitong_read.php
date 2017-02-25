<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>活动列表( 预约类 ) - 个人及代理商 - 亚媒社</title>
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
		
	<!--	最新消息-->
	<div class="hdorder radius1">
		<h3 class="title1"><strong><a href="#">最新消息</a></strong>
			
		</h3>
		<div class="dhorder_m">
			<div class="FLnt1">
				<p>最新消息</p>
				<span>当前位置：<a href="xitongxiaoxi.php">未读消息</a> > 阅读消息 </span>
			</div>
			<div class="XTread">
				<div class="XTxiaoxi">
					<h1>新闻标题新闻标题新闻标题新闻标题</h1>
					<span>发布时间：2017-2-22  作者：喇叭传媒</span>
					<p>中新社北京2月20日电 每年全国两会，中国中央政府各部委局办“掌门人”都是外界关注焦点。从发布会上的“金句”连连到“部长通道”上的“围追堵截”，媒体希望从他们的讲话中解读出未来一年中国各领域政策走向。</p>
					<p>中新社北京2月20日电 每年全国两会，中国中央政府各部委局办“掌门人”都是外界关注焦点。从发布会上的“金句”连连到“部长通道”上的“围追堵截”，媒体希望从他们的讲话中解读出未来一年中国各领域政策走向。</p>
					<div class="sxiap">
						<p>上一篇：落实“十四年抗战”概念 中小学相关教材已完成修改</p>
						<p style="text-align:right;">下一篇：落实“十四年抗战”概念 中小学相关教材已完成修改</p>
					</div>
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
$(function(){		/*	取消切换事件，变成跳转	*/
	$(".tab1>ul>li>a").unbind("click");
});
</script>


</body>
</html>
