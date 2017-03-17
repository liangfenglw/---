$(function(){
	
//	首页幻灯片
	if( $(".slideBox").length>0 ){
		$(".slideBox").slide({mainCell:".bd ul",effect:"fold",autoPlay:true,delayTime:700});
	}

	
// 首页投放分布
if( $("#tb1").length>0 ){
	var myChart = echarts.init(document.getElementById('tb1'));
	// 指定图表的配置项和数据
	var dataMap = {};
function dataFormatter(obj) {
    var pList = ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'];
    var temp;
    for (var year = 2002; year <= 2002; year++) {
        var max = 0;
        var sum = 0;
        temp = obj[year];
        for (var i = 0, l = temp.length; i < l; i++) {
            max = Math.max(max, temp[i]);
            sum += temp[i];
            obj[year][i] = {
                name : pList[i],
                value : temp[i]
            }
        }
        obj[year + 'max'] = Math.floor(max / 100) * 100;
        obj[year + 'sum'] = sum;
    }
    return obj;
}

dataMap.dataGDPt = dataFormatter({
    //max : 1200,
    
    2002:[1525,211,255,542,12,414,414,201,14,44,41,210] /*网络媒体*/  
});

dataMap.dataGDPs = dataFormatter({
    //max : 500,
  
    2002:[85,14,444,54,41,255,44,51,544,4,21,2] /*户外媒体*/  
});

dataMap.dataGDP = dataFormatter({
    //max : 300,
    
    2002:[1000,32,255,54,325,365,22,51,544,255,21,2] /*平面媒体*/
});

dataMap.dataPI = dataFormatter({
    //max : 250,
  
    2002:[54,542,545,21,20,254,2112,21,12,255,24,225] /*记者预约*/
});

dataMap.dataSI = dataFormatter({
    //max : 200,
   
    2002:[254,247,254,685,62,521,10,255,4,20,45,211] /*广播媒体*/
});

dataMap.dataTI = dataFormatter({
    //max : 150,
    
    2002:[574,1542,524,254,54,11,452,154,21,452,54,125] /*记者预约*/
});

dataMap.dataEstate = dataFormatter({
    //max : 100,
    
    2002:[62,82,95,15,0,594,84,35,652,154,150,41] /*广播媒体*/
});

dataMap.dataFinancial = dataFormatter({
    //max : 50,
    
    2002:[101,20,5,85,84,20,31,156,24,845,45,57] /*电视媒体*/
});


option = {
    baseOption: {
        timeline: {
            // y: 0,
            axisType: 'category',
            // realtime: false,
            // loop: false,
            autoPlay: true,
            // currentIndex: 2,
            playInterval: 1000,
            // controlStyle: {
            //     position: 'left'
            // },
            
            label: {
                formatter : function(s) {
                    return (new Date(s)).getFullYear();
                }
            }
        },
        title: {
           /* subtext: '数据来自国家统计局'*/
        },
        tooltip: {},
        legend: {
            x: 'center',
            data: ['网络媒体', '户外媒体', '平面媒体', '电视媒体', '广播媒体', '记者预约', '内容代写', '宣传定制'],
            
        },
        calculable : true,
        grid: {
            top: 80,
            bottom: 50
        },
        xAxis: [
            {
                'type':'category',
                'axisLabel':{'interval':0},
                'data':[
                    '1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'
                ],
                splitLine: {show: false}
            }
        ],
        yAxis: [
            {
                type: 'value',
                name: '订单数（条）'
            }
        ],
        series: [
            {name: '网络媒体', type: 'bar'},
            {name: '户外媒体', type: 'bar'},
            {name: '平面媒体', type: 'bar'},
            {name: '电视媒体', type: 'bar'},
            {name: '广播媒体', type: 'bar'},
            {name: '记者预约', type: 'bar'},
            {name: '广播媒体', type: 'bar'},
            {name: '记者预约', type: 'bar'},
            {
                name: '分类订单占比',
                type: 'pie',
                center: ['85%', '35%'],
                radius: '28%'
            }
        ]
    },
    options: [
        {
            /*title: {text: '2002全国宏观经济指标'},*/
            series: [
            	{data: dataMap.dataGDPt['2002']},
            	{data: dataMap.dataGDPs['2002']},
                {data: dataMap.dataGDP['2002']},
                {data: dataMap.dataFinancial['2002']},
                {data: dataMap.dataEstate['2002']},
                {data: dataMap.dataPI['2002']},
                {data: dataMap.dataSI['2002']},
                {data: dataMap.dataTI['2002']},


                {data: [
                    {name: '网络媒体', value: dataMap.dataPI['2002sum']},
                    {name: '户外媒体', value: dataMap.dataSI['2002sum']},
                    {name: '平面媒体', value: dataMap.dataTI['2002sum']},
                    {name: '电视媒体', value: dataMap.dataPI['2002sum']},
                    {name: '广播媒体', value: dataMap.dataSI['2002sum']},
                    {name: '记者预约', value: dataMap.dataTI['2002sum']},
                    {name: '内容代写', value: dataMap.dataPI['2002sum']},
                    {name: '宣传定制', value: dataMap.dataSI['2002sum']},

                ]}
            ]
        },
        
    ]
};
	// 使用刚指定的配置项和数据显示图表。
	myChart.setOption(option);	
}

//首页任务管理
	$(".tab1>ul>li>a").click(function(){
		var index=$(this).parent("li").index();
		$(this).parent("li").addClass("cur").siblings("li").removeClass("cur");
		$(this).parents(".tab1").next(".tab1_body").find("table").removeClass("cur").eq(index).addClass("cur");
		return false;
	});


/*	首页表格排序	*/
if( $('#datatable1').length>0 ){
	$('#datatable1').DataTable({
		"searching" : false,
		"paging" : false,
		"lengthChange" : false,
		"info" : false,
		"columnDefs" : [{
        	"targets": 'nosort',
			"orderable": false
		}],
		"order" : [[0,"asc"]]
	});
}
/*	
	$('.data-table').dataTable({
        "searching": false,  //是否允许Datatables开启本地搜索
        "paging": false,  //是否开启本地分页
        "lengthChange": false,  //是否允许用户改变表格每页显示的记录数
        "info": false,   //控制是否显示表格左下角的信息
        "columnDefs": [{
            "targets": 'nosort',  //列的样式名
            "orderable": false    //包含上样式名‘nosort’的禁止排序
        }],
        //跟数组下标一样，第一列从0开始，这里表格初始化时，第四列默认降序
        "order": [3]  //asc升序   desc降序  "order": [[ 3, "desc" ]]默认第四列为降序排列
    });
*/


/*	媒体供应商_活动订单	*/
/*	$(".nav_hdorder .tab li a").click(function(){
		$(this).parent("li").addClass("cur").siblings("li").removeClass("cur");
		return false;
	});
*/







});	


//	首页搜索条左边时间
function showtime(){
	var now = new Date();
	var nmonth = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'][now.getMonth()];		//月份 0-11
	var nday = ['Sun', 'Mon', 'Tue', 'Wed', 'Thr', 'Fri', 'Sat'][now.getDay()];		//星期	Tue
	var ndate = now.getDate();		//日期	18
	var nampm = now.getHours() < 12 ? 'AM' : 'PM';			//上午下午	
	var ntime = now.getHours()+":"+now.getMinutes();	//+":"+now.getSeconds();			//时间	18:20
	$(".s_date").html('<span class="sp1"><span>'+nday+'</span><b>'+ndate+'</b><i>'+nmonth+'</i></span><span class="sp2"><span>'+nampm+'</span><b>'+ntime+'</b></span>');
	setTimeout(function(){
		showtime();
	},1000);
}





function SetFrameHeight(o) {
       var mainheight = $(o).contents().find("body").children("div").height() + 30;
       $(o).height(mainheight);
 }










