<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>个人-安全设置-证件信息 - 亚媒社</title>
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

<!--个人-安全设置-证件信息-->

<div class="content"><div class="Invoice">
<div class="INa1dd"><div class="ndt" style="margin-top:40px;padding-bottom:180px;">

	<div class="hdorder radius1">
		<h3 class="title1"><strong><a href="#">会员信息</a></strong></h3>

		<div class="dhorder_m">
			<div class="tab1">
				<ul style="margin-left:30px;">       
					<li><a href="#">资料编辑</a></li>
					<li class="cur"><a href="#">安全设置</a></li>

				</ul>
			</div>
			<div class="tab1_body">
				<div class="safe_2 clearfix">
					<div class="WMain3 WMain3_2 clearfix"><p><i class="LGntas"></i>会员帐号：</p>
						gzanteng@qq.com
					</div>
					<div class="WMain3 WMain3_2 clearfix"><p><i class="LGntas"></i>证件类型：</p>
						<select class="sel_2">
							<option value="">身份证</option>
							<option value="">驾驶证</option>
							<option value="">。。。。。。。</option>
						</select>
					</div>
					<div class="WMain3 WMain3_2 clearfix"><p><i class="LGntas"></i>上传证件副件：</p>
						<div class="img_up" id="img_up">
							<a href=""><img src="/images/img_up.jpg" ></a>
						</div>
					</div>
					
					<div class="WMain3 WMain3_2 clearfix" style="margin-top:110px;">
						<input type="submit" value="提交" class="sub5">
					</div>
					<div class="clr"></div>
				</div>
				<div class="safe2_b">
					友情提醒：用户名和密码要做好相应记录，以免忘记。
				</div>
			</div>
			
		</div>
	</div>

</div></div>
</div></div>

<?php include("foot.php"); ?>

<script>
$(function(){
	$(".tab1>ul>li>a").unbind("click");
});
</script>

</div>
</body>
</html>
