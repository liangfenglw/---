<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>个人-安全设置 - 亚媒社</title>
    <link href="css/reset.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/style2.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
 //导航定位
 $(function(){
	// $(".nav li:eq(2) a:first").addClass("navCur")
	 //验证手机 邮箱 
	 $(".selyz").change(function(){
	   var selval=$(this).find("option:selected").val();
		 if(selval=="0"){
			 $(".sel-yzsj").show()
			 $(".sel-yzyx").hide()
			 }
		 else if(selval=="1"){
			 $(".sel-yzsj").hide()
			 $(".sel-yzyx").show()
			 }
		 })
	 })
</script>

</head>
<body style="background:url(img/RELogin.jpg) repeat-x top;">
    <div id=RELogin style="">
        <div style=" width:250px; margin:auto;"><a href="index.php"><img src="img/logolaba.png" style=" width:250px; height:auto"></a></div>
        <div style="width: 850px;HEIGHT: 600px;background:#fff;border-radius:10px;">
            <div class=LoginHead>
               <H1>找回密码</H1>
               <div class=LGRight>&nbsp;</DIV>
            </div>
            <div class="web-width">
                 <div class="for-liucheng">
                      <div class="liulist for-cur"></div>
                      <div class="liulist for-cur"></div>
                      <div class="liulist"></div>
                      <div class="liulist"></div>
                      <div class="liutextbox">
                           <div class="liutext for-cur"><em>1</em><br /><strong>输入用户名</strong></div>
                           <div class="liutext for-cur"><em>2</em><br /><strong>验证身份</strong></div>
                           <div class="liutext"><em>3</em><br /><strong>重置密码</strong></div>
                           <div class="liutext"><em><img src="img/Bpass1.png" /></em><br /><strong>完成</strong></div>
                      </div>
                 </div>
                 <div class="forget-pwd">
                    <div class="Bp_zh"><p>验证方式:</p>
                     <select class="selyz">
                      <option value="0">已验证手机</option>
                      <option value="1">已验证邮箱</option>
                     </select>
                    </div>
                    <div class="LGnt6"><p>用户名:</p>
                       <input type="text" name="textfield" id="textfield"  class="Bpass_name"/>
                    </div>
                    <div class="LGnt6 sel-yzsj"><p>验证手机:</p>
                       <input type="text" name="textfield" id="textfield"  class="Bpass_name"/>
                    </div>
                    <div class="LGnt6 sel-yzyx"><p>验证邮箱:</p>
                       <input type="text" name="textfield" id="textfield"  class="Bpass_name"/>
                    </div>
                    <div class="LGnt6" style=" margin-top:15px; margin-bottom:10%;"><p>验证码:</p>
                       <input type="text" name="textfield" id="textfield"  class="Bpass_"/>
                       <div class="LGnt4"><input type="submit" name="button1" value="获取验证码" class="LGn3"/></div>
                    </div>
                    <input type="submit" name="button" id="button" value="提 交" class="LGButton3" style="margin-bottom:50px;"  onclick="window.location='forgetPwd3.php'"/>
                 </div>
           </div>
      	</div>
    </div>
</body>
</html>
