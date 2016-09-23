// JavaScript Document
$(".change-password").hide();
$('.forgot-password').click(function(){
			$('.change-password').toggle();
			});
			
$(".signup-form").hide();
$('.signup').click(function(){
			$('.signup-form').toggle();
			});		

			
$(".dropdown").bind('mouseover',function(){
			$(this).find("ul").show();
			});			
$(".dropdown").bind('mouseout',function(){
			$(this).find("ul").hide();
			});