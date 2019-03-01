$(document).ready(function(){

	$("#menu li").hover(function(){
		$(this).find("ul:first").show();
	},function(){
		$(this).find("ul:first").hide();
	})
});