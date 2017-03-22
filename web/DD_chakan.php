<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>媒体供应商_活动订单 - 亚媒社</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<link href="css/reset.css" rel="stylesheet" type="text/css" />
	<link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
	
	<link href="css/style2.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
	<script src="js/jquery.touchslider.min.js"  type="text/javascript"></script>

<script type="text/javascript" src="js/jquery.tools.min.js"></script>
</head>
<body>

<?php include("head.php"); ?>

<div class="content"><div class="Invoice"><div class="INa1dd">
<div class="main" style="margin-top:20px;">
		
	<!--	查看订单详情	-->
	<div class="hdorder radius1" style="float: left; margin-bottom: 50px;">
		<h3 class="title1"><strong><a href="#">查看详情</a></strong>
		</h3>
		<div class="IF1">
				<div class="FLmeiti2">
					<div class="IF3"><p>订单号:</p>
						<input type="text" name="textfield2" id=" FLnome"  class="LGnt2"/>
					</div>
					<div class="IF3"><p>订单流程:</p>
						<input type="text" name="textfield2" id=" FLnome"  class="LGnt2"/>
					</div>
					<div class="IF3"><p>活动类型:</p>
						<select name="select" id="select">
		                    <option>完成</option>
		                    <option>未完成</option>
		                    <option>预约状态</option>
		                    <option>流放</option>
		                    <option>退还</option>
		                </select>
					</div>
					<div class="IF3"><p>活动名称:</p>
						<input type="text" name="textfield2" id="FLnome"  class="IFN2"/>
					</div>

					<div class="IF3"><p>价格：</p>
						<input type="text" name="textfield2" id="FLsorting"  class="FLn1"/><span>元</span>
					</div>
					<div class="IF3"><p>订单备注:</p>
						<div class="chakan">订单备注</div>
					</div>
					<div class="IF3"><p>订单状态:</p>
						<select name="select" id="select">
		                    <option>确认完成</option>
		                    <option>订单反馈</option>
		                </select>
					</div>
					<div class="IF3"><p>完成链接:</p>
						<input type="text" name="textfield2" id="FLnome"  class="IFN2"/>
					</div>
					<div class="IF3"><p>完成截图:</p>
                         <div class="LGnt11">
                         	<img src="img/bn66.png" />
                            <p>上传图片</p>
                         </div>
                    </div>
                    <div class="IF3"><p>供应商反馈:</p>
						<div class="chakan">供应商反馈</div>
					</div>
                    <div class="IF3"><p>会员反馈:</p>
						<textarea name="textfield3" class="IFN3"></textarea>
					</div>
				</div>
				
				<input type="submit" name="button" value="提  交" class="LGButton3" style="margin: 5% 30%" />
			</div>
	</div>
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
