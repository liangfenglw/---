<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>个人-安全设置-修改密码 - 亚媒社</title>
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

<!--个人-安全设置-修改密码-->

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
					<div class="WMain3 WMain3_2 clearfix"><p><i class="LGntas"></i>旧密码：</p>
						<input type="password" name="textfield" id="textfield" class="txt6">
					</div>
					<div class="WMain3 WMain3_2 clearfix"><p><i class="LGntas"></i>新密码：</p>
						<input type="password" name="textfield" id="textfield" class="txt6">
						<div>由字母、数字和特殊符号组成，区分大小写(6~16个字符)。示例：cndns456@#!</div>
					</div>
					<div class="WMain3 WMain3_2 clearfix"><p><i class="LGntas"></i>确认密码：</p>
						<input type="password" name="textfield" id="textfield" class="txt6">
					</div>
					<div class="WMain3 WMain3_2 clearfix" style="margin-top:50px;">
						<input type="submit" value="提交" class="sub5">
					</div>
					<div class="clr"></div>
				</div>
				<div class="safe2_b" style="width:auto;">
<div style="width:440px;margin:0 auto;text-align:left;position:relative;left:25px;">
密码设置技巧<br/>
密码设置至少6位以上，由数字、字母和符号混合而成，安全性较高。<br/>
不要和用户名太相似，这样容易被人猜到。<br/>
不要用手机号、电话号码、生日、学号、身份证号等个人信息。<br/>
<br/>
友情提醒：用户名和密码要做好相应记录，以免忘记。
</div>
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
