// JavaScript Document
$(".dropdown").bind('mouseover',function(){
			$(this).find("ul").show();
			});
$(".dropdown").bind('mouseout',function(){
			$(this).find("ul").hide();
			});
			 $(function() {
$( "#accordion" ).accordion();
});