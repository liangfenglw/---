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
			<div class="tab1">
				<ul>       
					<li class="cur"><a href="huodonglist_paidan.php">未读消息</a></li>
					<li><a href="huodonglist_yuyue.php">已读消息</a></li>
				</ul>
			</div>
			<div class="tab1_body">
                <table class="table_in1 cur">
                <tbody>
                    <tr>
                        <td><a href="xitong_read.php"><div class="XTnews_list">你的任务已经被某某媒体商确认电视广告精准投放已经实现</div><div class="XTRnews_list">2017-2-22</div></a></td>
                    </tr>
                    <tr>
                        <td><a href="xitong_read.php"><div class="XTnews_list">你的任务已经被某某媒体商确认电视广告精准投放已经实现</div><div class="XTRnews_list">2017-2-22</div></a></td>
                    </tr>
                    <tr>
                        <td><a href="xitong_read.php"><div class="XTnews_list">你的任务已经被某某媒体商确认电视广告精准投放已经实现</div><div class="XTRnews_list">2017-2-22</div></a></td>
                    </tr>
                    <tr>
                        <td><a href="xitong_read.php"><div class="XTnews_list">你的任务已经被某某媒体商确认电视广告精准投放已经实现</div><div class="XTRnews_list">2017-2-22</div></a></td>
                    </tr>
                </tbody>
                </table>
                <table class="table_in1 cur">
                <tbody>
                    <tr>
                        <td><a href=""><div class="XTnews_list">你的任务已经被某某媒体商确认电视广告精准投放已经实现</div><div class="XTRnews_list">2017-2-22</div></a></td>
                    </tr>
                </tbody>
                </table>
			</div>
					
			<div class="page_1" style="margin-top:15px;padding-bottom:30px;">
				<span class="info">显示第 0 至 0 项结果，共 0 项</span>
				<span class="pages">
<a href="" class="prev">上一页</a>
<a href="" class="cur">1</a>
<a href="">2</a>
<a href="">3</a>
<a href="">4</a>
<a href="">5</a>
<span class="sus">...</span>
<a href="">248</a>
<a href="" class="next">下一页</a>
				</span>
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
