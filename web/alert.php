<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>网络媒体_论坛 - 亚媒社</title>
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
	
	<script type="text/javascript" src="js/layer/layer.js"></script>
	<script type="text/javascript" src="js/date.js"></script>
	<script type="text/javascript" src="js/main2.js"></script>
	

</head>
<body>

<?php include("head.php"); ?>

<!--	论坛	-->
<div class="clr"></div>
<div class="content"><div class="Invoice">
<div class="INa1dd"><div class="ndt">
	
	<div id="x">点击弹出提示</div>
	
		
</div></div>
</div></div>


<?php include("foot.php"); ?>

<script type="text/javascript">
$("#x").click(function(){

/*
	layer.msg('请求成功',{
		time:2000
	});
	layer.open({
		type: 1,
		skin: 'layui-layer-demo', //样式类名
		closeBtn: 1, //不显示关闭按钮
		anim: 2,
		time:5000,
		shadeClose: true, //开启遮罩关闭
		content: '内容'
	});
*/
	
	layer.open({
		title: '提示'
		,content: '请求成功'
		,time: 30000
		,btn: ""
	});
 

});
</script>

</body>
</html>
