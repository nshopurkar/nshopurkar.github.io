$(function(){
		$("h3").fadeIn(2000);
		$("span").fadeIn(6000);
	$("#links a").click(function(){
		$("#head").animate({ height: 150 }, 1000);
		$("#links").hide();
		$("h3").hide();
		$("#fmenu").show(500);
		$("#fmenu a").fadeIn(6000);
	});
	$(".me").click(function(){
		$("#fmenu a").css("color","white");
		$("#work").fadeOut(200,function(){
			$("#blog").fadeOut(200,function(){
				$("#contact").fadeOut(200,function(){
					$("#me").fadeIn(3000);
					$(".me").css("color","yellow");
				});
			});
		});	
	});
	$(".work").click(function(){
		$("#fmenu a").css("color","white");
		$("#me").fadeOut(200,function(){
			$("#blog").fadeOut(200,function(){
				$("#contact").fadeOut(200,function(){
					$("#work").fadeIn(3000);
					$(".work").css("color","yellow");
				});
			});
		});	
	});
	$(".blog").click(function(){
		$("#fmenu a").css("color","white");
		$("#work").fadeOut(200,function(){
			$("#me").fadeOut(200,function(){
				$("#contact").fadeOut(200,function(){
					$("#blog").fadeIn(3000);
					$(".blog").css("color","yellow");
				});
			});
		});	
	});
	$(".contact").click(function(){
		$("#fmenu a").css("color","white");
		$("#work").fadeOut(200,function(){
			$("#blog").fadeOut(200,function(){
				$("#me").fadeOut(200,function(){
					$("#contact").fadeIn(3000);
					$(".contact").css("color","yellow");
				});
			});
		});	
	});	
	$(".three").click(function(){
		$("#dspl").fadeOut(500);
		$("#message").fadeIn(5000);
	});
	$("#notif").click(function(){
	 	$("#notif").fadeOut();
	})
});
