<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>网络媒体_发布公众号任务 - 亚媒社</title>
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
		
	<!--	发布公众号任务	-->
	<div class="radius1">
		<h3 class="title1"><strong><a href="#">微营销类</a></strong></h3>
		
		<div class="sbox_5">
		
				<div class="WMain1" style="border:none;">
					<div class="WMain2 WMain2_weixin">
						<ul>
							<li style="display:block;">
								<div class="WMain3 WMain3_2"><p><i class="LGntas"></i>发布类型:</p>
									<div id="radio_a1">
										<label><input type="radio" name="type" value="" />快速加粉</label>
										<label class="cur"><input type="radio" name="type" value="" checked />图文阅读</label>
										<label><input type="radio" name="type" value="" />分享转发</label>
										<label><input type="radio" name="type" value="" />原文阅读</label>
										<label><input type="radio" name="type" value="" />图文点赞</label>
										<label><input type="radio" name="type" value="" />朋友圈点赞</label>
										<label><input type="radio" name="type" value="" />官方投票</label>
										<label><input type="radio" name="type" value="" />第三方投票</label>
									</div>
<script type="text/javascript">
	$("#radio_a1 label").click(function(){
		$(this).addClass("cur").siblings("label").removeClass("cur");
	});
</script>
								</div>
								<div class="WMain3 WMain3_2 w50"><p><i class="LGntas"></i>微信原始ID:</p>
									<input type="text" name="textfield" id="textfield" class="txt6" />
									<div class="warm">
										<span>请准确填写，否则数据不一致后果自负</span>
									</div>
								</div>
								<div class="WMain3 WMain3_2 w50"><p><i class="LGntas"></i>每天数量:</p>
									<input type="text" name="textfield" id="textfield" class="txt6" />
								</div>
								
								<div class="WMain3 WMain3_2"><p><i class="LGntas"></i>开始执行时间:</p>
									<input type="text" name="textfield" id="datepicker1" class="txt2 txt2_2"/> &nbsp;至&nbsp;
									<input type="text" name="textfield" id="datepicker2" class="txt2 txt2_2"/>
								</div>							
								<div class="WMain3 WMain3_2"><p><i class="LGntas"></i>间隔时间:</p>
									<select class="sel_2 options_s">
										<option value="">60</option>
										<option value="">120</option>
										<option value="">240</option>
										<option value="">600</option>
										<option value="">3600</option>
									</select> 秒
									<div class="warm">
										<span>请准确填写，否则数据不一致后果自负</span>
									</div>
								</div>
								<div class="WMain3 WMain3_2"><p><i class="LGntas"></i>回复消息:</p>
									<div><textarea name="" class="tarea_1"></textarea></div>
									<div class="warm">
										<span>请准确填写，否则数据不一致后果自负</span>
									</div>
								</div>								
								<div class="WMain3 WMain3_2"><p><i class="LGntas"></i>我的备注:</p>
									<input type="text" name="textfield" id="textfield" class="txt6" />
								</div>
								<div class="WMain3 WMain3_2" style="margin-top:35px;">
									<p><i class="LGntas"></i></p>
									<div class="info_1">
										<h3>发任务前必读</h3>
										<ul>
											<li>标题作为含有哪些关键词要写清楚，关键词最好不要超过2个</li>
											<li>文章要求：关键词有哪些一定要写清楚，关键词文章内要出现几次，是否带连接、联系方式、图片等，如需带请自行准备</li>
										</ul>
									</div>
								</div>
								
								<div class="WMain3 WMain3_2" style="margin-top:35px;">
									<input type="submit" value="提交" class="sub5" />
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
