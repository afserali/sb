$(document).ready(function() {
	$("#logindiv").on("click" , function(){
		$(".login").css("display","block");
	});
	$("#frgtLinkForget").on("click" , function(){
		$("#frgtLinkForget").css("display","none");
		$(".login-box").css("display","none");
		$(".forget-box").css("display","block");
		$("#frgtLinkLogin").css("display","block");
	});
	$("#frgtLinkLogin").on("click" , function(){
		$("#frgtLinkForget").css("display","block");
		$(".login-box").css("display","block");
		$(".forget-box").css("display","none");
		$("#frgtLinkLogin").css("display","none");
	});
/*	$('body').click(function(){
	    $('.login').remove();
	});*/
	$("#sb-login").validate({
		rules:{
			email: {
				required: true,
				email: true
			},
			password: {
				required: true
			}				
		},
		messages: {
						email: {
							required: "Please Enter  Email Id",
							email: "Enter Valid Email Id"
						},
						password: {
							required: "Please Enter Password"
						}															
					},
		submitHandler: function(form) {
			form.submit();
		}
	});
	$("#forgetForm").validate({
		rules:{
			email: {
				required: true,
				email: true
			},
			security:{
				required: true
			}			
		},
		messages: {
						email: {
							required: "Please Enter  Email Id",
							email: "Enter Valid Email Id"
						},
						security: {
							required: "Please Enter Security Code"
						}															
					},
		submitHandler: function(form) {
			form.submit();
		}
	});
});