$(document).ready(function(){
	$(".lclHeading").click(function(){
		$(".fclSection").css("display","none");
		$(".lclSection").css("display","block");
		$(".calend_back1").css("display","block");
		$(".calend_back").css("display","none");
		$(".fclbox1").css("display","block");
        $(".fclbox2").css("display","none");
		$(".fclHeading").css("color","#2c3a5d");
		$(".lclHeading").css("color","#fff");
		$(".lclBox").css({'background' : '#8ec448','margin-top' : '-20px','position' : 'absolute','padding': '8px 10px'});
		$(".fclBox").css({'background' : 'none','margin-top' : '0px','position' : 'unset','padding': '0px'});
	});
	$(".fclHeading").click(function(){
		$(".fclSection").css("display","block");
		$(".lclSection").css("display","none");
		$(".calend_back1").css("display","none");
		$(".calend_back").css("display","block");
        $(".fclbox1").css("display","none");
        $(".fclbox2").css("display","block");
        $(".fclHeading").css("color","#fff");
		$(".lclHeading").css("color","#2c3a5d");
		$(".fclBox").css({'background' : '#8ec448','margin-top' : '-20px','position' : 'absolute','padding': '8px 10px'});
		$(".lclBox").css({'background' : 'none','margin-top' : '0px','position' : 'unset','padding': '0px'});
	});
	$(".sbProfile").click(function(){
		$('#newProfileLiTab').fadeToggle('fast', 'linear', function (){});
     return false;
    });
	$(document).on("click",function(){
		$('#newProfileLiTab').hide();
	});
	$("#myBtn").click(function(){
                 $("#myModal").modal();
    });
	$("#fclmodal").click(function(){
                 $("#myfclModal").modal();
    });
});
$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="boxField"><div>'
			+'<div class="col-md-3 col-sm-3"><div class="input-group">'
			+'<input type="text" placeholder="Length" name="length">'
			+'</div></div>'
			+'<div class="col-md-3 col-sm-3"><div class="input-group">'
			+'<input type="text" placeholder="Width" name="width">'
			+'</div></div>'
			+'<div class="col-md-3 col-sm-3"><div class="input-group">'
			+'<input type="text" placeholder="Height" name="height">'
			+'</div></div>'
			+'<div class="col-md-3 col-sm-3"><div class="input-group">'
			+'<input type="text" placeholder="No. of Boxes" name="noofboxes">'
			+'</div></div>'
			+'</div>'
             +'<div class="addCol"><a href="#" class="gqlclremove_field"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>'
			+'</div></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".gqlclremove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent().parent('.boxField').remove(); x--;
    })
});
$(document).ready(function() {
    var fclmax_fields      = 10; //maximum input boxes allowed
    var fclwrapper         = $(".fclinput_fields_wrap"); //Fields wrapper
    var fcladd_button      = $(".fcladd_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(fcladd_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < fclmax_fields){ //max input box allowed
            x++; //text box increment
            $(fclwrapper).append('<div class="fclboxField">'
			+'<div class="col-md-3 col-sm-3"><div class="input-group">'
			+'<input type="number" placeholder="" name="">'
			+'</div></div>'
			+'<div class="col-md-3 col-sm-3"><div class="input-group">'
			+'<select><option>Standard</option>'
			+'<option>Standard1</option></select>'
			+'</div></div>'
			+'<div class="col-md-2 col-sm-2"><div class="input-group boxDiv">'
			+'<span class="GQcontBox">20\'</span>'
			+'</div></div>'
			+'<div class="col-md-2 col-sm-2"><div class="input-group boxDiv">'
			+'<span class="GQcontBox1">40\'</span>'
			+'</div></div>'
			+'<div class="col-md-2 col-sm-2"><div class="input-group boxDiv">'
			+'<span class="GQcontBox2">45\' HC</span>'
			+'</div></div>'
			+'<div class="addCol"><a href="#" class="gqfclremove_field"><i class="fa fa-minus-circle" aria-hidden="true"></i></a></div>'
			+'</div>');
             //add input box
        }
    });
    
    $(fclwrapper).on("click",".gqfclremove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent().parent('.fclboxField').remove(); x--;
    })
});