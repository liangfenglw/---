<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>个人-安全设置 - 亚媒社</title>
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

<!--个人-安全设置-->

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
				<div class="safe_1">
					<div class="safe_1_t clearfix">
						<img src="/images/avatar.jpg" class="l" >
						<div class="r">
							<p>会员帐号：gzanteng@qq.com</p>
							<p>会员等级：直接客户</p>
							<p>注册时间：2016-09-02 22:42:47</p>
						</div>
					</div>
					<div class="safe_1_m clearfix">
						<span class="l">您当前的帐号安全程度</span>
						<span class="r">安全级别：<i>中</i></span>
						<span class="m"><i class="rank_M"></i></span>	<!--	低 rank_L	中 rank_M	高 rank_H	-->
					</div>
					<div class="safe_1_b">
						<ul class="ul_table1">
							<li><span class="sp1">修改密码</span>
								<span class="sp2">安全性高的密码可以使帐号更安全。建议您定期更换密码，设置一个包含字母、符号、数字组成且长度不少于6位的密码。</span>
								<span class="sp3">
									<i class="ok">已设置</i>
								</span>
								<span class="sp4">
									<a href="">修改</a>
								</span>
							</li>
							<li><span class="sp1">绑定手机</span>
								<span class="sp2">您的手机：134*****609。绑定认证后可用于手机找回密码、接收手机动态验证码等，使您的账户更加安全。</span>
								<span class="sp3">
									<i class="ok">已绑定</i>
								</span>
								<span class="sp4">
									<a href="">查看</a>
								</span>
							</li>
							<li><span class="sp1">绑定邮箱</span>
								<span class="sp2">绑定认证后可用于邮箱找回密码、接受订单提醒等，保障您的账户更加安全。</span>
								<span class="sp3">
									<i class="not-ok">未绑定</i>
								</span>
								<span class="sp4">
									<a href="">修改</a>
								</span>
							</li>
							<li><span class="sp1">密保问题</span>
								<span class="sp2">设置安保问题可以进一步提升您的账户安全性。</span>
								<span class="sp3">
									<i class="ok">已设置</i>
								</span>
								<span class="sp4">
									<a href="">修改</a>
								</span>
							</li>
							<li><span class="sp1">证件信息</span>
								<span class="sp2">证件以及个人信息涉及您的隐秘信息，可以用于确认您的身份。</span>
								<span class="sp3">
									<i class="not-ok">未设置</i>
								</span>
								<span class="sp4">
									<a href="">修改</a>
								</span>
							</li>
						</ul>
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
