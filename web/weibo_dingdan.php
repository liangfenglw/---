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

</head>
<body>

<?php include("head.php"); ?>



<div class="content"><div class="Invoice">
<div class="INa1dd"><div class="ndt">
		
	<!--	微博订单	-->
	<div class="radius1">
		<h3 class="title1"><strong><a href="#">微博订单</a></strong></h3>
		
		<div class="sbox_5">
		
				<div class="WMain1">
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
									<input type="text" name="textfield" id="datepicker1" class="txt2 txt2_2"/> 至 
									<input type="text" name="textfield" id="datepicker2" class="txt2 txt2_2"/><br/>
									<span>须晚于当前时间至少30分钟 建议您至少提前一天派单，或提前与客服确认相应公众号的可执行时间，以提高成单率</span>
								</div>

								
								
								<div class="WMain3 WMain3_2"><p><i class="LGntas"></i>直发类型:</p>
									<label><input type="radio" name="ifchangetime" checked />指定直发内容</label>
									<label><input type="radio" name="ifchangetime" />帐号自拟直发内容</label><br/>
								</div>
								<div class="WMain3 WMain3_2"><p><i class="LGntas"></i>直发配图:</p>
									<button type="button" name="textfield" id="textfield" class="txt8"/>上传</button><label style="margin-left:20px;"><input type="checkbox" name="" />封面图是否在正文中显示</label>
									<br/>
									<span>支持jpg、jpeg、png、gif格式的图片，大小请控制在2M以下；建议尺寸：单图文、多图文第一条，900 * 500像素；多图文第2~N条，200*200像素。</span>
								</div>
								<div class="WMain3 WMain3_2"><p><i class="LGntas"></i>订单备注:</p>
									<div><textarea name="" class="tarea_1"></textarea></div>
									<span>选填，您可以进一步明确发布要求。</span>
								</div>
								<div class="WMain3 WMain3_2"><p><i class="LGntas"></i>正品证明:</p>
									<button type="button" name="textfield" id="textfield" class="txt8"/>上传</button>
									<br/>
									<span>支持jpg、jpeg、png、gif格式的图片，大小请控制在2M以下；若您推广的产品为知名品牌，请务必上传正品证明供平台审核。</span>
								</div>
								<div class="WMain3 WMain3_2"><p><i class="LGntas"></i>是否短信通知:</p>
									<label><input type="checkbox" name="ifsms" />手机短信通知</label>
									<div><label><input type="checkbox" name="admit" id="admit" />同意相关 <a href="">服务协议</a></label></div>
									<br/>
								</div>
							</li>
						</ul>
					</div>
				</div>
					<div style="margin:40px 0 80px 0; float:left; left:30%; position:relative;">
						<a href=""><img src="img/WLButton.png" /></a>
					</div>
	<script>
	$(function(){
		$(".WMain1 .tab a").click(function(){
			$(this).addClass('on').siblings().removeClass('on');
			var index = $(this).index();
			number = index;
			$('.WMain1 .WMain2 li').hide();
			$('.WMain1 .WMain2 li:eq('+index+')').show();
		});
		
		var auto = 1;  //等于1则自动切换，其他任意数字则不自动切换
		if(auto ==1){
			var number = 0;
			var maxNumber = $('.WMain1 .tab a').length;
			function autotab(){
				number++;
				number == maxNumber? number = 0 : number;
				$('.WMain1 .tab a:eq('+number+')').addClass('on').siblings().removeClass('on');
				$('.WMain1 .WMain2 ul li:eq('+number+')').show().siblings().hide();
			}
			
		  }
	});
	</script>

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

$(".sbox_1_item .m ul li a").click(function(){
	$(this).addClass("cur").parent("li").siblings("li").find("a").removeClass("cur");
	var option=$(this).parents(".m").prev("span").attr("data");
	var value=$.trim($(this).html());
	var li="<li data='"+option+"'><a href=''>"+value+"</a></li>";
	if( value=="不限" ){
		$(".sbox_2 .m li[data='"+option+"']").remove();
	}else if( $(".sbox_2 .m li[data='"+option+"']").length>0 ){
//		$(".sbox_2 .m li[data='"+option+"']").remove();
		$(".sbox_2 .m li[data='"+option+"']").find("a").html(value);
	}else{
		$(".sbox_2 .m").append(li);
	}
	return false;
});
$(".sbox_2 .m").on("click","li a",function(){
	var option=$(this).parent("li").attr("data");
	var value=$.trim($(this).html());
	$(this).parent("li").remove();
	$(".sbox_1_item span.l[data='"+option+"']").next(".m").find("ul li a").removeClass("cur");
	$(".sbox_1_item span.l[data='"+option+"']").next(".m").find("ul li:first-child a").addClass("cur");
	return false;
});
$(".sbox_1_item .r a").click(function(){
	if( $(this).attr("data")=="on" ){
		$(this).attr("data","off");
		$(this).parent().siblings(".m").find("ul").css("height","25px");
		$(this).parents(".sbox_1_item").css("height","73px");
	}else{
		$(this).attr("data","on");
		$(this).parent().siblings(".m").find("ul").css("height","auto");
		$(this).parents(".sbox_1_item").css("height","auto");
		var height=$(this).parents(".sbox_1_item").height();
	//	console.log(height);
		$(this).parents(".sbox_1_item").find(".l").css("height",height);
	}
	return false;
});
</script>

<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');
    function isFocus(e){
        alert(UE.getEditor('editor').isFocus());
        UE.dom.domUtils.preventDefault(e)
    }
    function setblur(e){
        UE.getEditor('editor').blur();
        UE.dom.domUtils.preventDefault(e)
    }
    function insertHtml() {
        var value = prompt('插入html代码', '');
        UE.getEditor('editor').execCommand('insertHtml', value)
    }
    function createEditor() {
        enableBtn();
        UE.getEditor('editor');
    }
    function getAllHtml() {
        alert(UE.getEditor('editor').getAllHtml())
    }
    function getContent() {
        var arr = [];
        arr.push("使用editor.getContent()方法可以获得编辑器的内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getContent());
        alert(arr.join("\n"));
    }
    function getPlainTxt() {
        var arr = [];
        arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getPlainTxt());
        alert(arr.join('\n'))
    }
    function setContent(isAppendTo) {
        var arr = [];
        arr.push("使用editor.setContent('欢迎使用ueditor')方法可以设置编辑器的内容");
        UE.getEditor('editor').setContent('欢迎使用ueditor', isAppendTo);
        alert(arr.join("\n"));
    }
    function setDisabled() {
        UE.getEditor('editor').setDisabled('fullscreen');
        disableBtn("enable");
    }

    function setEnabled() {
        UE.getEditor('editor').setEnabled();
        enableBtn();
    }

    function getText() {
        //当你点击按钮时编辑区域已经失去了焦点，如果直接用getText将不会得到内容，所以要在选回来，然后取得内容
        var range = UE.getEditor('editor').selection.getRange();
        range.select();
        var txt = UE.getEditor('editor').selection.getText();
        alert(txt)
    }

    function getContentTxt() {
        var arr = [];
        arr.push("使用editor.getContentTxt()方法可以获得编辑器的纯文本内容");
        arr.push("编辑器的纯文本内容为：");
        arr.push(UE.getEditor('editor').getContentTxt());
        alert(arr.join("\n"));
    }
    function hasContent() {
        var arr = [];
        arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
        arr.push("判断结果为：");
        arr.push(UE.getEditor('editor').hasContents());
        alert(arr.join("\n"));
    }
    function setFocus() {
        UE.getEditor('editor').focus();
    }
    function deleteEditor() {
        disableBtn();
        UE.getEditor('editor').destroy();
    }
    function disableBtn(str) {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            if (btn.id == str) {
                UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
            } else {
                btn.setAttribute("disabled", "true");
            }
        }
    }
    function enableBtn() {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
        }
    }

    function getLocalData () {
        alert(UE.getEditor('editor').execCommand( "getlocaldata" ));
    }

    function clearLocalData () {
        UE.getEditor('editor').execCommand( "clearlocaldata" );
        alert("已清空草稿箱")
    }
</script>

</body>
</html>
