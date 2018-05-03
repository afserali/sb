$(document).ready(function() {
	$(".login-txt").on("click",function(){
		$(".newShippingReg").css("display","none");
		$(".loginSignUp").css("display","block");
		$(".forget-txt").css("display","block");
		$(".loginLink-txt").css("display","none");
		$(".newSignup").css("display","block");

	});
	$("#frgtLinkForget").on("click",function(){
		$(".forgetPwdSection").css("display","block");
		$(".newShippingReg").css("display","none");
		$(".loginSignUp").css("display","none");
		$(".forget-txt").css("display","none");
		$(".loginLink-txt").css("display","block");
		$(".newSignup").css("display","block");
	});
	$("#loginLinkLogin").on("click",function(){
		$(".forgetPwdSection").css("display","none");
		$(".newShippingReg").css("display","none");
		$(".loginSignUp").css("display","block");
		$(".forget-txt").css("display","block");
		$(".loginLink-txt").css("display","none");
		$(".newSignup").css("display","block");
	});
$("#newSignupregister").on("click",function(){
		$(".newShippingReg").css("display","block");
		$(".loginSignUp").css("display","none");
		$(".forget-txt").css("display","none");
		$(".forgetPwdSection").css("display","none");
		$(".loginLink-txt").css("display","none");
		$(".newSignup").css("display","none");
});
	/*$("#platsign-form").validate({
		rules:{
			role: {
				required: true
			},
			companyname: {
				required: true
			},
			contactname: {
				required: true
			},
			mobile: {
				required: true,
				number: true,
				maxlength: 10
			},
			email: {
				required: true,
				email: true
			},
			city: {
				required: true
			}				
		},
		messages: {
						role: {
							required:"Select options"							
						},
						companyname: {
							required: "Please Enter Company Name"
							
						},
						contactname: {
							required: "Please Enter Contact Name"
							
						},
						mobile: {
							required: "Please Enter Mobile Number",
							number:"Enter Numbers Only",
							maxlength:"No More than 10 Numbers"
						},
						email: {
							required: "Please Enter  Email Id",
							email: "Enter Valid Email Id"
						},
						city: {
							required: "Please Enter  City"
						}															
					},
		submitHandler: function(form) {
			form.submit();
		}
	});*/
});