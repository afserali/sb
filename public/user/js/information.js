$(document).ready(function(){
	$("#information").on("change",function(){
		if ($(this).val() == "Port" || $(this).val() == "Country" || $(this).val() == "City" ) {
			$(".getDtlsection").css("display","block");
		}else{
			$(".getDtlsection").css("display","none");
		}
	});
});