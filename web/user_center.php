<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>媒体供应商_用户中心 - 亚媒社</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/style2.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
<script src="js/jquery.touchslider.min.js"  type="text/javascript"></script>

<script type="text/javascript" src="js/jquery.tools.min.js"></script>
</head>
<body >

<?php include("head.php"); ?>

<div class="w100 nav_hdorder clearfix clr">
<div class="content"><div class="Invoice" style="background:#fff;"><div class="INa1dd">
	<div class="w100">
		<ul class="tab">
			<li><a href="huodongorder.php">活动订单</a></li>
			<li><a href="">预约订单</a></li>
			<li><a href="resource_management.php">资源管理</a></li>
			<li><a href="bill_inquiry.php">账单查询</a></li>
			<li class="cur"><a href="user_center.php">用户中心</a></li>
		<ul>
	</div>
</div></div></div>
</div>

<!--用户中心-->
<div class="content"><div class="Invoice">
<div class="INa1dd"><div class="ndt">
	<div class="Ifapiao"><h2>帐户一览</h2></div>
    <div class="lanrenzhijia">
	<div class="tab">
    	<a href="javascript:;" class="on">资料编辑</a>
        <a href="javascript:;">安全设置</a>
        <a href="javascript:;">收款帐号</a>
    </div>
    <div class="Hcontent">
    	<ul>
        	<li style="display:block;">
                <div class="LGnta1 clearfix">
                    <div class="LGnt6"><p><i class="LGntas">*</i>昵称:</p>
                         <input type="text" name="textfield" id="textfield" class="LGnt2"/>
                    </div>
                    <div class="LGnt6"><p><i class="LGntas">*</i>姓名:</p>
                         <input type="text" name="textfield" id="textfield" class="LGnt2"/>
                    </div>
                    <div class="LGnt6"><p><i class="LGntas">*</i>QQ:</p>
                         <input type="text" name="textfield" id="textfield" class="LGnt2"/>
                    </div>
                    <div class="LGnt6"><p><i class="LGntas">*</i>手机:</p>
                         <input type="text" name="textfield" id="textfield" class="LGnt2"/>
                         <span><a href="#">修改</a></span>
                    </div>
                    <div class="LGnt6"><p><i class="LGntas">*</i>邮箱:</p>
                         <input type="text" name="textfield" id="textfield" class="LGnt2"/>
                         <span><a href="#">修改</a></span>
                    </div>
                    <div class="LGnt6"><p><i class="LGntas"></i> &nbsp;</p>
						<input type="submit" value="提 交" class="LGButton4" />
                    </div>
                </div>
            </li>
            <li>安全设置</li>
            <li>收款帐号</li>
        </ul>
    </div>
</div>
</div></div>
</div></div>
<script>
$(function(){
	$(".lanrenzhijia .tab a").click(function(){
		$(this).addClass('on').siblings().removeClass('on');
		var index = $(this).index();
		number = index;
		$('.lanrenzhijia .Hcontent li').hide();
		$('.lanrenzhijia .Hcontent li:eq('+index+')').show();
	});
	
	var auto = 1;  //等于1则自动切换，其他任意数字则不自动切换
	if(auto ==1){
		var number = 0;
		var maxNumber = $('.lanrenzhijia .tab a').length;
		function autotab(){
			number++;
			number == maxNumber? number = 0 : number;
			$('.lanrenzhijia .tab a:eq('+number+')').addClass('on').siblings().removeClass('on');
			$('.lanrenzhijia .Hcontent ul li:eq('+number+')').show().siblings().hide();
		}
		
	  }
});
</script>
<!--会员信息end-->


<?php include("foot.php"); ?>

</div>
</body>
</html>
