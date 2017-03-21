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
<script src="js/jquery.touchslider.min.js"  type="text/javascript"></script>
<script type="text/javascript" src="js/layer/layer.js"></script>
<script type="text/javascript" src="js/main2.js"></script>
<script type="text/javascript" src="js/jquery.tools.min.js"></script>
</head>
<body >

<?php include("head.php"); ?>

<!--账户提现-->
<div class="content"><div class="Invoice">
<div class="INa1dd"><div class="ndt">
	<div class="Ifapiao"><h2>账户提现</h2></div>
    <div style=" width: 50%; margin: auto; padding-top: 5%;">
    	<div class="IF3"><p>可提现金额:</p>
             <input type="text" name="textfield" id="textfield"  class="IFN1"/>
             <span>元</span>
        </div>
        <div class="IF3"><p>提现金额:</p>
             <input type="text" name="textfield" id="textfield"  class="IFN1"/>
             <span>元</span>
        </div>
        <div class="IF3"><p>提现方式:</p>
             <select name="select" id="select">
                <option>支付宝</option>
               <!-- <option>微信</option>
                <option>银联</option>-->
            </select>
        </div>
        <div class="IF3"><p>提现账户:</p>
             <input type="text" name="textfield" id="textfield"  class="IFN1"/>
        </div>
        <div class="IF3" style="margin-top:20px;">
            <p>&nbsp;</p>
      		<input type="submit" name="button" id="tixian_at" value="立即提现" class="Button" />
        </div>
    </div>
</div></div>
</div></div>


<?php include("foot.php"); ?>

<!--    支付弹窗    -->
<div class="pay_info">
    <h3>提现金额</h3>
    <h4 class="sum" id="sum2">￥<b>0.00</b></h4>  
     <p>尊敬的用户，您的提现金额将会在24小时后到账。</p>  
    <form action="" method="post" id="form1">
        <div class="item">
            <input type="password" name="pass" placeholder="请输入您的支付宝密码" class="pass" />
        </div>
        <div class="item">
            <button type="submit" class="sub">确 定</button>
        </div>
    </form>
</div>

<script type="text/javascript">
/*  点击结算弹出支付    */
$("#tixian_at").click(function(){
    event.preventDefault();
    layer.open({
        type: 1,
        title: " ",
        shadeClose: true, //开启遮罩关闭
        skin: 'pay_info_w', //加上class设置样式
        area: ['430px'], //宽高
        content: $(".pay_info")
    });
});
reset_total();
</script>


</body>
</html>
