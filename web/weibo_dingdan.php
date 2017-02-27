<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>网络媒体_微博订单 - 亚媒社</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<link href="css/reset.css" rel="stylesheet" type="text/css" />
	<link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
	
    <link href="css/style.css" rel="stylesheet" type="text/css" />
	<link href="css/style2.css" rel="stylesheet" type="text/css" />

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
	<script src="js/jquery.touchslider.min.js"  type="text/javascript"></script>

	<script type="text/javascript" charset="utf-8" src="ueditor.config.js"></script>
	<script type="text/javascript" charset="utf-8" src="ueditor.all.min.js"> </script>
	<script type="text/javascript" charset="utf-8" src="zh-cn.js"></script>

	<script type="text/javascript" src="js/date.js"></script>
	<script type="text/javascript" src="js/main2.js"></script>

<script type="text/javascript" src="js/jquery.tools.min.js"></script>
</head>
<body>

<?php include("head.php"); ?>



<div class="content"><div class="Invoice">
<div class="INa1dd"><div class="ndt">
		
	<!--	微博订单	-->
	<div class="radius1">
		<h3 class="title1"><strong><a href="#">微博订单</a></strong></h3>
		
		<div class="sbox_5">
		
				<div class="WMain1" style="border:none;">
					<div class="WMain2 WMain2_weixin">
						<ul>
							<li style="display:block;">
								<div class="WMain3"><p><i class="LGntas">*</i>合作形式:</p>
									<select class="sel_2"><option value="">任务类型</option>
										<option value="">11111</option>
										<option value="">2</option>
									</select>
								</div>
								<div class="WMain3"><p><i class="LGntas">*</i>名称:</p>
									<input type="text" name="textfield" id="textfield" class="txt6" placeholder="可输入25个汉字" />
								</div>
								<div class="WMain3 WMain3_2"><p><i class="LGntas">*</i>描述:</p>
									<div><textarea name="" class="tarea_1"></textarea></div>
									<span>请填写产品、品牌或推广活动（时间、地点及活动内容）简介，让预约对象大致了解此次推广活动，请勿超过1000字</span>
								</div>								
								<div class="WMain3 WMain3_2"><p><i class="LGntas">*</i>开始时间:</p>
									<div>
										<input type="text" name="textfield" id="datepicker1" class="txt2 txt2_2"/> &nbsp;至&nbsp;
										<input type="text" name="textfield" id="datepicker2" class="txt2 txt2_2"/>
										<span class="remark">请选择当前时间15分钟后，7天之内的时间</span>
									</div>
								</div>
								<div class="WMain3 WMain3_2"><p><i class="LGntas">*</i>预约结果反馈时间:</p>
									<div>
										<input type="text" name="textfield" id="datepicker3" class="txt2 txt2_2"/> 
										<span class="remark">我们将在反馈时间之前，告知您所选择的网红是否接受您的预约订单。反馈时间必须晚于当前时间24小时。</span>
									</div>
								</div>
								<div class="WMain3 WMain3_2"><p><i class="LGntas"></i>上传附件:</p>
									<div class="txt_up">
										<button type="button" name="textfield" id="textfield" class="txt8"/>上传</button>
										<input type="file" name="input_file" class="input_file" id="input_file" />
										<input type="text" class="path_file" id="path_file" readonly="readonly" />
									</div>
									<span class="remark_br">您可以上传活动文档（txt、doc或docx格式）或活动图片（gif、jpg、jpeg或png格式），文件大小请控制在2M以下</span>
								</div>
								<div class="WMain3 WMain3_2"><p><i class="LGntas"></i>是否短信通知:</p>
									<label><input type="checkbox" name="ifsms" /><b>手机短信通知</b></label>
									<div><label><input type="checkbox" name="admit" id="admit" /><b>同意相关 <a href="">服务协议</a></b></label></div>
								</div>
								<div class="WMain3 WMain3_2" style="margin-top:45px;">
									<input type="submit" name="submit" value="发布" class="sub5" />
								</div>
								
							</li>
						</ul>
					</div>
				</div>

		</div>
	</div>
	
</div></div>
</div></div>


<?php include("foot.php"); ?>

<script type="text/javascript">
/*	上传文件右边显示文件名	*/
$("#input_file").change(function(){
	var path=$(this).val();
	var path1 = path.lastIndexOf("\\");
	var name = path.substring(path1+1);
	$("#path_file").val(name);
})

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
var picker3 = new Pikaday({
	field: document.getElementById('datepicker3'),
	firstDay: 1,
	minDate: new Date('2000-01-01'),
	maxDate: new Date('2020-12-31'),
	yearRange: [2000,2020]
});

</script>


</body>
</html>
