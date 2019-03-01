$(document).ready(function(){
		pos=$("menuTop").position();
		$(window).scroll(function(){
			var posScroll=$(document).scrollTop();
			if(parseInt(posScroll) > parseInt(pos.top)){
				$("#menuTop").addClass('fixed')

			}else{
				$("#menuTop").removeClass('fixed')
			}
		

	});

});

	