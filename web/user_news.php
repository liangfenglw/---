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
		
	<!--	添加新用户	-->
	<div class="hdorder radius1">
		<h3 class="title1"><strong><a href="#">添加新用户</a></strong>
		</h3>
		<div class="dhorder_m">
			<div class="IF1">
				<div class="Urole_home">
					<div class="IF3"><p>用户名:</p>
						<input type="text" name="textfield2" id=" FLnome"  class="LGnt2"/>
					</div>
					<div class="IF3"><p>登录密码:</p>
						<input type="text" name="textfield2" id=" FLnome"  class="LGnt2"/>
					</div>
					<div class="IF3"><p>确认密码:</p>
						<input type="text" name="textfield2" id=" FLnome"  class="LGnt2"/>
					</div>
					<div class="XZFL"><p>用户角色:</p>
						<select name="select" id="select">
		                    <option>超级管理员</option>
		                    <option>供应商</option>
		                    <option>普通会员</option>
		                    <option>高级会员</option>
		                </select>
					</div>
					<div class="IF3" style="padding-top: 1.5%"><p>联系人:</p>
						<input type="text" name="textfield2" id=" FLnome"  class="LGnt2"/>
					</div>
					<div class="IF3"><p>电子邮箱:</p>
						<input type="text" name="textfield2" id=" FLnome"  class="LGnt2"/>
					</div>
					<div class="IF3"><p>联系电话:</p>
						<input type="text" name="textfield2" id=" FLnome"  class="LGnt2"/>
					</div>
					<div class="IF3"><p>是否禁用:</p>
						<input type="radio" name="radio" id="radio1" value="radio1"/>
		                &nbsp;开启&nbsp;&nbsp;&nbsp;&nbsp;
		                <input type="radio" name="radio" id="radio2" value="radio2" />
		                &nbsp;禁用
					</div>
					<div class="IF3"><input type="submit" name="button" id="button" value="提  交" class="LGButton3" style="margin-top:7%;" /></div>
					<p>&nbsp;</p>
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


</body>
</html>
