<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <link href="css/reset.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/style2.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/jquery.touchslider.min.js"  type="text/javascript"></script>
<script type="text/javascript" src="js/layer/layer.js"></script>
<script type="text/javascript" src="js/main2.js"></script>
<script type="text/javascript" src="js/jquery.tools.min.js"></script>
</head>
<body >

<?php include("head.php"); ?>

<!--会员信息-->
<div class="content"><div class="Invoice">
<div class="INa1dd"><div class="ndt">
	<div class="Ifapiao"><h2>会员信息</h2></div>
    <div class="lanrenzhijia">
	<div class="tab">
    	<a href="javascript:;" class="on">资料编辑</a>
        <a href="javascript:;">安全设置</a>
    </div>
    <div class="Hcontent">
    	<ul>
        	<li style="display:block;">
                <div class="LGnta1" style="float:left;">
                    <div class="LGnt6"><p><i class="LGntas">*</i>个人头像:</p>
                         <div class="LGnt11">
                         	<img src="img/bn66.png" />
                            <p>上传头像</p>
                         </div>
                    </div>
                    <div class="LGnt6"><p><i class="LGntas">*</i>企业名称:</p>
                         <input type="text" name="textfield" id="textfield"  class="LGnt2"/>
                    </div>
                    <div class="LGnt6"><p><i class="LGntas">*</i>联系人:</p>
                         <input type="text" name="textfield" id="textfield"  class="LGnt2"/>
                    </div>
                    <div class="LGnt6"><p><i class="LGntas">*</i>QQ:</p>
                         <input type="text" name="textfield" id="textfield"  class="LGnt2"/>
                    </div>
                    <div class="LGnt6"><p><i class="LGntas">*</i>手机:</p>
                         <input type="text" name="textfield" id="textfield"  class="LGnt2"/>
                         <span><a href="#" id="TSxiugei">修改</a></span>
                    </div>
                    <div class="LGnt6"><p><i class="LGntas">*</i>邮箱:</p>
                         <input type="text" name="textfield" id="textfield"  class="LGnt2"/>
                         <span>绑定</span>
                    </div>
                    <i style=" padding-left:80px; font-size:12px; color:#999; float:left;">温馨提示：请填写有效邮箱地址，以便接受通知及订单信息，建议使用QQ，hotmail等邮箱</i>
                    <div style="margin-top:40px; float:left; width:100%">
                        <input type="submit" name="button" id="button" value="提 交" class="LGButton3" />
                    </div>
                </div>
                <div class="LGnta2">
                    <h4>完善资料</h4>
                    <span>资料更完整，账号更安全。完善资料将帮助我们更好的提供服务。</span>
                </div>
            </li>
            <li>安全设置</li>
        </ul>
    </div>
</div>
</div></div>
</div></div>

<!--修改手机号弹窗提示-->
<div class="xiugai_info">
    <p class="xiugainame">重置手机号</p>
    <p style="font-size: 15px;color: #333; line-height: 25px; width:80%; margin: auto; margin-top: 60px;">修改手机号将会影响登录用户名，若非手机号遗失等情况，建议不要随便修改手机号。</p>
    <p  style="font-size: 14px;color: #ccc; line-height: 25px; width: 80%; margin: auto; margin-bottom: 60px;">您是否确定继续修改手机号？</p>
    <input type="submit" name="button" id="button" value="确 认" class="xg_Button"/>
    <input type="reset" name="button" id="button" value="取 消" class="zz_Button"/>
</div>

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

/*  点击修改弹出修改手机号提示    */
$("#TSxiugei").click(function(){
    event.preventDefault();
    layer.open({
        type: 1,
        title: " ",
        shadeClose: true, //开启遮罩关闭
        skin: 'xiugai_info_w', //加上class设置样式
        area: ['600px'], //宽高
        content: $(".xiugai_info")
    });
});
reset_total();

</script>
<!--会员信息end-->


<?php include("foot.php"); ?>

</div>
</body>
</html>
