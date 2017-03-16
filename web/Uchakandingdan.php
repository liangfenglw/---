<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>媒体供应商_活动订单 - 亚媒社</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<link href="css/reset.css" rel="stylesheet" type="text/css" />
	<link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
	
    <link href="css/style.css" rel="stylesheet" type="text/css" />
	<link href="css/style2.css" rel="stylesheet" type="text/css" />

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
	<script src="js/jquery.touchslider.min.js"  type="text/javascript"></script>

	<script type="text/javascript" src="js/date.js"></script>
	<script type="text/javascript" src="js/main2.js"></script>
	<script type="text/javascript" src="js/layer/layer.js"></script>

	<script type="text/javascript" charset="utf-8" src="ueditor.config.js"></script>
	<script type="text/javascript" charset="utf-8" src="ueditor.all.min.js"> </script>
	<script type="text/javascript" charset="utf-8" src="zh-cn.js"></script>

<script type="text/javascript" src="js/jquery.tools.min.js"></script>


<link rel="stylesheet" href="//apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css">
<script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
</head>
<body>

<?php include("head.php"); ?>

<div class="content"><div class="Invoice"><div class="INa1dd">
<div class="main" style="margin-top:20px;">
		
	<!--	添加新用户	-->
	<div class="hdorder radius1" style="float: left; margin-bottom: 50px;">
		<h3 class="title1"><strong><a href="#">订单详情</a></strong>
		</h3>
		<div class="dhorder_m">
			<div class="IF1">
				<div class="FLmeiti2">
					<div class="IF3"><p>订单号:</p>
						<input type="text" name="textfield2"  class="FLn3"/>
					</div>
					<div class="IF3"><p>订单状态:</p>
						<input type="text" name="textfield2" class="FLn3"/>
					</div>
					<div class="IF3"><p>活动名称:</p>
						<input type="text" name="textfield2" class="FLn3"/>
					</div>
					<div class="XZFL"><p>订单类型:</p>
						<select name="select" id="select">
		                    <option>新闻任务</option>
		                    <option>百科营销</option>
		                </select>
					</div>
					<div class="IF3"><p>所属用户:</p>
						<input type="text" name="textfield2"  class="FLn3"/>
					</div>
					<div class="IF3"><p>用户角色:</p>
						<select name="select" id="select">
		                    <option>会员</option>
		                    <option>高级会员</option>
		                </select>
					</div>
					<div class="WMain3 WMain3_2"><p style="width: 100px; text-align: right;padding-right: 10px;">开始时间:</p>
						<input type="text" name="textfield" id="datepicker1" class="txt2"/>
						<select class="sel_t1 options_h"></select>时
						<select class="sel_t1 options_m"></select>分
					</div>
					<div class="WMain3 WMain3_2"><p style="width: 100px; text-align: right;padding-right: 10px;">截止时间:</p>
						<input type="text" name="textfield" id="datepicker2" class="txt2"/>
						<select class="sel_t1 options_h"></select>时
						<select class="sel_t1 options_m"></select>分
					</div>
					<div class="IF3"><p>订单备注:</p>
						<textarea name="textfield3" class="IFN3"></textarea>
					</div>
					<div class="IF3"><p>价格：</p>
						<input type="text" name="textfield2" id="FLsorting"  class="FLn1"/><span>元</span>
					</div>
					<div class="IF3"><p>完成链接:</p>
						<input type="text" name="textfield2"  class="FLn3"/>
					</div>
					<div class="IF3"><p>完成截图:</p>
						<div class="LGnt11">
                         	<img src="img/bn66.png" />
                            <p>上传图片</p>
                         </div>
					</div>
					<div class="IF3"><p>备注:</p>
						<textarea name="textfield3" class="IFN3"></textarea>
					</div>
					<input type="submit" name="button" value="提  交" class="LGButton3" style="margin: 5% 30%">
				</div>	
			</div>
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
<script type="text/javascript">
/*	小时、分钟 列表	*/
	var options_h="";
	var options_m="";
	for(i=0;i<24;i++){
		if(i<10){	options_h+="<option value=0'"+i+"'>0"+i+"</option>";
		}else{		options_h+="<option value='"+i+"'>"+i+"</option>";			}
	}
	$(".options_h").html(options_h);
	
	for(i=0;i<60;i++){
		if(i<10){	options_m+="<option value=0'"+i+"'>0"+i+"</option>";
		}else{		options_m+="<option value='"+i+"'>"+i+"</option>";			}
	}
	$(".options_m").html(options_m);
</script>

</body>
</html>
