$(document).ready(function(){
	$("#txtSearch").keyup(function(){
		k=$("#txtSearch").val();
		if(k=="")
		{
			$(".quick-result").css("display","none");
		}else{
				$.ajax({
					url:"js/xuly_search.php",
					type:"get",
					data:"search="+k,
					async:true,
					success:function(kq){
						$(".quick-result").html(kq);
						$(".quick-result").css("display","block");
					}
				});
				return false;
		}
	});

});

	