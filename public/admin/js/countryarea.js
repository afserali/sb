$(document).ready(function(){
	$('#example').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
	$(".mDown").click(function(){
		$("#subMaster").toggle();
	});
	$("#addArea").click(function(){
		$(".addSection").show();
	});
	$("#area-cancel").click(function(){
		$(".addSection").hide();
	});
	$("#information").on("change",function(){
		if ($(this).val() == "Port" || $(this).val() == "Country" || $(this).val() == "City" ) {
			$(".getDtlsection").css("display","block");
		}else{
			$(".getDtlsection").css("display","none");
		}
	});
});