/* Sidebar Menu*/
$(document).ready(function(){

      $(".header").click(function()
      { var arrow = $(this).find("span.arrow");

        if(arrow.hasClass("up"))
        {
          arrow.removeClass("up");
          arrow.addClass("down");
        }
        else if(arrow.hasClass("down"))
        {
          arrow.removeClass("down");
          arrow.addClass("up");
        }
		if ($(this).attr('class') != 'active'){
		  $('.menu').slideUp();
		  $(this).next().slideToggle();
		  $('.menu li').removeClass('active');
		  $(this).addClass('active');
		}
		
      });
});


/* 
$(document).ready(function(){

      $(".header").click(function()
      {
        var arrow = $(this).find("span.arrow");

        if(arrow.hasClass("up"))
        {
          arrow.removeClass("up");
          arrow.addClass("down");
        }
        else if(arrow.hasClass("down"))
        {
          arrow.removeClass("down");
          arrow.addClass("up");
        }
		 $(this).next(".menu").slideToggle("slow") 
      });
    });

Top Stats Show Hide */
$(document).ready(function(){
	 $(".sidepanel").css("display","none");
	 $(".IMenuda").css("display","none");
    $(".sidepanel-open-button").click(function(){
        $(".sidepanel").toggle(100); 
    });
});

$(document).ready(function(){  
    $(".menu a").each(function(){  
        $this = $(this);  
        if($this[0].href==String(window.location)){  
            $this.addClass("hover");  
        }  
    });  
}); 


/* Sidebar Show-Hide On Mobile */
$(document).ready(function(){
    $(".sidebar-open-button-mobile").click(function(){
        $(".sidebar").toggle(150);
    });
});


/* Sidebar Show-Hide */
$(document).ready(function(){

    $('.sidebar-open-button').on('click', function(){
        if($('.sidebar').hasClass('hidden')){
            $('.sidebar').removeClass('hidden');
      $(".sidebar").show();
            $('.content').css({
                'marginLeft' : 245
            });  
        }else{
            $('.sidebar').addClass('hidden');
      $(".sidebar").css("display","none")
      $(".sidebar-open-button").hide();
      $(".menuntda").show();
            $('.content').css({
                'marginLeft' : 0
            });    
        }
    
    });
   $('.menuntda').on('click', function(){
        if($('.sidebar').hasClass('hidden')){
            $('.sidebar').removeClass('hidden');
      $(".sidebar-open-button").show();
      $(".menuntda").hide();
      $(".sidebar").show();
            $('.content').css({
                'marginLeft' : 245
            });  
        }
    
    });

});


/* ===========================================================
PANEL TOOLS
===========================================================*/
/* Minimize */
$(document).ready(function(){
  $(".panel-tools .minimise-tool").click(function(event){
  $(this).parents(".panel").find(".panel-body").slideToggle(100);

  return false;
}); 

 }); 

/* Close */
$(document).ready(function(){
  $(".panel-tools .closed-tool").click(function(event){
  $(this).parents(".panel").fadeToggle(400);

  return false;
}); 

 }); 

 /* Search */
$(document).ready(function(){
  $(".panel-tools .search-tool").click(function(event){
  $(this).parents(".panel").find(".panel-search").toggle(100);

  return false;
}); 

 }); 




/* expand */
$(document).ready(function(){

    $('.panel-tools .expand-tool').on('click', function(){
        if($(this).parents(".panel").hasClass('panel-fullsize'))
        {
            $(this).parents(".panel").removeClass('panel-fullsize');
        }
        else
        {
            $(this).parents(".panel").addClass('panel-fullsize');
 
        }
    });

});


/* ===========================================================
Widget Tools
===========================================================*/


/* Close */
$(document).ready(function(){
  $(".widget-tools .closed-tool").click(function(event){
  $(this).parents(".widget").fadeToggle(400);

  return false;
}); 

 }); 


/* expand */
$(document).ready(function(){

    $('.widget-tools .expand-tool').on('click', function(){
        if($(this).parents(".widget").hasClass('widget-fullsize'))
        {
            $(this).parents(".widget").removeClass('widget-fullsize');
        }
        else
        {
            $(this).parents(".widget").addClass('widget-fullsize');
 
        }
    });

});

/* Kode Alerts */
/* Default */
$(document).ready(function(){
  $(".kode-alert .closed").click(function(event){
  $(this).parents(".kode-alert").fadeToggle(350);

  return false;
}); 

 }); 


/* Click to close */
$(document).ready(function(){
  $(".kode-alert-click").click(function(event){
  $(this).fadeToggle(350);

  return false;
}); 

 }); 



/* Tooltips 
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

/* Popover
$(function () {
  $('[data-toggle="popover"]').popover()
})  */


/* Page Loading */
$(window).load(function() {
  $(".loading").fadeOut(750);
})