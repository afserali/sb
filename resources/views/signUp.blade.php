<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">

    <meta name="keywords" content="">

    <meta name="author" content="">

    <title>Shipping Bazaar</title>

    <!--favicon-->

    <link rel="shortcut icon" href="../images/sbnew/fav.png" type="image/x-icon" />

    <!--css-->

    <link rel="stylesheet" type="text/css" href="../css/sbnew/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="../css/sbnew/style.css">

    <link rel="stylesheet" href="../css/fontcss/font-awesome.css">

    <!-- <script src="../js/sbnew/vendor.min.js" language="javascript"></script>

    <script src="../js/sbnew/scripts.min.js" language="javascript"></script>--> 
    
	<script type="text/javascript" src="../js/sbnew/jquery-2.1.0.min.js"></script>
	<script type="text/javascript" src="../js/sbnew/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/sbnew/jquery.validate.min.js"></script>
	<script src="../js/sbnew/signup.js" language="javascript"></script>
	<script src="../js/sbnew/newLogin.js" language="javascript"></script>
    <link type="text/css" rel="stylesheet" href="../css/sbnew/style2.css" />
    
     <link type="text/css" rel="stylesheet" href="../css/sbnew/signup.css" />

    <link type="text/css" rel="stylesheet" href="../css/sbnew/swiper.min.css" />

</head>

<body>
	<div class="container-fluid platsign-img">
		<div class="">
			<div class="platsign-box">
				<div class="platsign-left">
					<div class="plansign-dtl">
						<div class="plat-afblogo">
							<img src="../images/sbnew/logo.png">
						</div>
						<div class="platsign-soc">
							<p>Follow Us</p>
								<span class="plat-signsoc-icon">
								<a href="#" target="_blank"><img
										src="../images/sbnew/googleicon.png"></a>
								<a href="#" target="_blank"><img
										src="../images/sbnew/fbicon.png"></a>
								<a href="#" target="_blank"><img
										src="../images/sbnew/twiticon.png"></a>
								<a href="#" target="_blank"><img
										src="../images/sbnew/linkicon.png"></a></span>
						</div>
					</div>
				</div>
				<div class="plansign-right">
					<div class="plansign-rdtl">
						<div class="newShippingReg">
						<div class="plan-signnew">
							<p>Register Now</p>
						</div>
						<form id="platsign-form">
							<div class="planentry-dtls">
								<div class="form-group">
									<select class="register_select" id="" name="role">
												<option value="">Select Role</option>									
												<option value="IATA AGENT">IATA Agent</option>
												<option value="FREIGHT FORWARDER">Freight Forwarder</option>	
												<option value="IMPORTER">Importer (BETA)</option>
												<option value="EXPORTER">Exporter (BETA)</option>
												<option value="CHA">Custom Broker(CHA)</option>																		
											</select>
								</div>
								<div class="form-group">
									<input type="text" class="" name="companyname" placeholder="Company Name">
									<label class=""> 
									</label>
								</div>
								<div class="form-group">
									<input type="text" class="" name="contactname" placeholder="Contact Name">
									<label class=""> 
									</label>
								</div>
								<div class="form-group mob-form">
									<span class="mob-select"><select class="mobile-select">
										<option value="1">91</option>
									</select>
									</span>
									<span class="mob-number"><input type="text" class="mobile-input" name="mobile" placeholder="Mobile Number">
									<label class=""> 
									</label></span>
								</div>
								<div class="form-group">
									<input type="email" class="" name="email" placeholder="Email">
									<label class=""> 
									</label>
								</div>
								<div class="form-group">
									<input type="text" class="" name="city" placeholder="City">
									<label class=""> 
									</label>
								</div>
							  </div>
							<div class="plan-subbtn">
								<button type="submit" class="btn plan-sub">Sign Up</button>
							</div>
						</form>
						</div>
						<div class="loginSignUp">
							<div class="loginNewSection">
							<div class="welText">Welcome Back!</div>
        					<form id="sb-login">
        					<div class="input-group divInput">
        						<div class="inputGrp">
      							<input id="email" type="text" class="form-control" name="email" placeholder="Email">
      							<span class="input-group-addon iconDiv"><i class="fa fa-envelope" aria-hidden="true"></i></span>
      							<label for="email" generated="true" class="error" style="display: none;">Please Enter  Email Id</label>
      							</div>   
    						</div>
    						<div class="input-group divInput">
    							<div class="inputGrp">
      								<input id="password" type="password" class="form-control" name="password" placeholder="Password">
      								<span class="input-group-addon iconDiv"><i class="fa fa-lock" aria-hidden="true" style="font-size:18px;"></i></span>
      								<label for="password" generated="true" class="error"  style="display: none;">Please Enter Password</label>
      							</div>
    						</div>
    						<div class="input-group" style="width:100%;">
    							<div class="chck-input"><input type="checkbox" name="terms" value="terms" checked></div>
    							<div class="chck-text">I accept Terms Of Use </div>
    						</div>
    						
    					<div class="sb-loginbtn">
							<button type="submit" class="btn sb-login">Login</button>
					    </div>
        	</form>
        	</div>
        	<div class="forgetPwdSection">
        		<div class="forgetText">Forget Password</div>
        		<form id="forgetForm">
        			<div class="input-group divInput">
        				<div class="inputGrp">
      						<input id="email" type="email" class="form-control" name="email" placeholder="Email" style="border-right:none; border-top-right-radius:0px; border-bottom-right-radius:0px;">
      						<span class="input-group-addon iconDiv"><i class="fa fa-envelope" aria-hidden="true"></i></span>
      						<label for="email" generated="true" class="error" style="display: none;">Please Enter  Email Id</label>
      					</div>   
    				</div>
    				<div class="divInput">
        				<div class="inputGrp">
      						<input type="text" class="form-control secInput" name="security" placeholder="Security Code">
      						<span class="hintBox"><button type="button" class="btn hintBtn">Hint</button></span>
      					</div>
      					<label for="security" generated="true" class="error" style="display:none;">Please Enter Security Code.</label>   
    				</div>
    				<div class="submitClearDiv">
    					<button type="submit" class="btn frgtSubBtn">Submit</button>
    					<button type="button" class="btn frgtClrBtn">Clear</button>
    				</div>
        		</form>
        	</div>
        	<div class="forget-txt">
        		<p id="forgetLink">Forget Password?</p>
        		<p id="frgtLoginLink">Login</p>
        	</div>
        </div>
						
						<div class="ortxt">
							<p>OR</p>
						</div>
						<div class="allogtxt">
							<p id="loginPtag"><span>Already have an account ?</span>&nbsp;<span class="login-txt"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;Login</span></p>
							<p id="signupPtag"><span>New User ? Register Now</span>&nbsp;<span class="newSignupLink">Sign Up</span></p>
						</div>
						<div class="home-image">
							<a href="index.html"><img src="../images/sbnew/home-img.png" style="width:30px;"></a>
						</div>
					
					</div>
				</div>
			</div>
		</div>
	 
	</div>
    

<!--     <section id="parallax_bnr1">

        <div class="container">

            <h2 data-ix="scroll-fade-out-8">Lorem ipsum dolor sit amet, <br>

consectetur adipiscing elit</h2>

            		<div class="get_quote_sec">

			<form>

				<h3>GET A QUOTE</h3>

				<input type="text" class="form-control" id="departure" placeholder="DEPARTURE" autocomplete="off">

				<input type="text" class="form-control" id="destination" placeholder="DESTINATION" autocomplete="off">

				<input type="text" class="form-control" id="date" placeholder="DATE" autocomplete="off">

				<input type="text" class="form-control" id="weight" placeholder="WEIGHT" autocomplete="off">

				<button class="btn btn-primary submit-button">GET</button>

			</form>				

		</div>

            <div data-ix="scroll-fade-out-9" class="sign_up_btn" style="text-align:center;"><a class="hvr-sweep-to-top" href="#">Lorem ipsum</a></div>

        </div>

    </section> -->
    
<!--     <footer>
        <div class="footer_sec">

            <div class="container">
                <div class="col-md-12 border-left">
                    <div class="col-md-6 both-border">
                        <div class="col-md-6">
                            <h3>SEARCH</h3>

                            <ul>

                                <li><a href="fclRates.html">FCL Rate Search

</a></li>

                                <li><a href="lclRates.html">LCL Rate Search

</a></li>

                                <li><a href="specialCargo.html">Special Cargo

</a></li>

                                <li><a href="sailSchedule.html">Sailing Schedule

</a></li>

                                <li><a href="contractRates.html">Contract Rates

</a></li>

                                <li><a href="portTariff.html">Port Tariff

</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 localcharge">
                            <ul>
                                <br>
                                <li><a href="localCharge.html">Local Charges

</a></li>
                                <li><a href="inlandTariff.html">Inland Tariff

</a></li>

                                <li><a href="detentDemo.html">Detention & Demorrage

</a></li>

                                <li><a href="vesselBerth.html">Vessel Berthing

</a></li>

                                <li><a href="tracking.html">Tracking

</a></li>

                                <li><a href="scacPort.html">SCAC |Port | Country

</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 both-border left-padding-align">
                        <h3>SERVICES</h3>

                        <ul>

                            <li><a href="cfsOperators.html">CFS operators</a></li>

                            <li><a href="steveMarine.html">Stevedoring

Marine Insurance

</a></li>

                            <li><a href="dgrPacking.html">DGR PackingIMDG

</a></li>

                            <li><a href="vesselCharter.html">Vessel Charter

</a></li>

                            <li> &nbsp;</li>
                            <li>&nbsp;</li>

                        </ul>
                    </div>
                    <div class="col-md-3 right-text paddinf-right-box">
                        <h3>SHIPPING BAZAAR</h3>

                        <ul>

                            <li><a href="aboutusNew.html">About Us</a></li>

                            <li><a href="sitemapNew.html">Site Map</a></li>

                            <li><a href="termofuseNew.html">Terms of use</a></li>

                            <li><a href="privacyCookieNew.html">Privacy & Cookie Policy</a></li>

                            <li><a href="disclaimNew.html">Disclaimer</a></li>

                            <li><a href="allRightnew.html">All Right Reserved</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-12 footer-two">
                    <div class="col-md-3">
                        <h3>FEE</h3>

                        <ul>

                            <li><a href="fees.html">Fees</a></li>

                            <li><a href="mode.html">Mode</a></li>

                            <li><a href="accountInfrm.html">Account Information</a></li>

                        </ul>
                    </div>

                    <div class="col-md-6 download-logo"> <img src="../images/sbnew/app-store.png"> <img src="../images/sbnew/google-store.png"> </div>
                    <div class="col-md-3 right-text">
                        <h3>SUPPORT</h3>

                        <ul>

                            <li><a href="advert.html">Advertisement</a></li>

                            <li><a href="faqNew.html">FAQs</a> | <a href="contactUs.html">Contact Us</a> </li>

                            <li><a href="feedbackNew.html">Feedback</a> | <a href="workWithus.html">Work With Us</a> </li>

                        </ul>
                    </div>
                </div>

                <div class="col-md-12 footer-three">

                    <div class="col-md-6">

                        © Copyright 2018 Shipping Bazaar | Designed by <a href="http://www.anantyatechsolutions.com/" target="_blank">AnantyaTechSolutions<a>

                    </div>

                    <div class="col-md-6 right-text">
                        <div class="social_right">

                            <div class="ftr_menu">

                                <a href="#" class="sc_ico" target="new"><i class="fa fa-facebook" aria-hidden="true"></i></a>

                                <a href="#" class="sc_ico" target="new"><i class="fa fa-twitter" aria-hidden="true"></i></a>

                                <a href="#" class="sc_ico" target="new"><i class="fa fa-linkedin" aria-hidden="true"></i></a>

                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>

    </footer> -->

<!--     <div id="menu-container">

        <ul>

            <li>
                <div class="menu">
                    <a href="#rate">
                        <div class="menu-tab">
                            <div class="menu-title">Rates</div>
                            <div class="icon"><img src="../images/sbnew/nav-rates.png"></div>
                        </div>
                    </a>
                </div>
            </li>

            li><div class="menu"><a href="#members"><div class="menu-tab"><div class="menu-title t-text"><span>Platinum Members</span></div><div class="icon"><img src="images/nav-members.png"></div></div></a></div></li

            <li>
                <div class="menu">
                    <a href="#media">
                        <div class="menu-tab">
                            <div class="menu-title">Media</div>
                            <div class="icon"><img src="../images/sbnew/nav-features.png"></div>
                        </div>
                    </a>
                </div>
            </li>

            <li>
                <div class="menu">
                    <a href="#business">
                        <div class="menu-tab">
                            <div class="menu-title">Business</div>
                            <div class="icon"><img src="../images/sbnew/nav-price.png"></div>
                        </div>
                    </a>
                </div>
            </li>

            <li>
                <div class="menu">
                    <a href="#exclusive-features">
                        <div class="menu-tab">
                            <div class="menu-title">Features</div>
                            <div class="icon"><img src="../images/sbnew/nav-chat.png"></div>
                        </div>
                    </a>
                </div>
            </li>

            <li>
                <div class="menu">
                    <a href="#vendors">
                        <div class="menu-tab">
                            <div class="menu-title t-text"><span>Our Vendors</span></div>
                            <div class="icon"><img src="../images/sbnew/nav-products.png"></div>
                        </div>
                    </a>
                </div>
            </li>

            <li>
                <div class="menu">
                    <a href="#information">
                        <div class="menu-tab">
                            <div class="menu-title">Information</div>
                            <div class="icon"><img src="../images/sbnew/nav-software.png"></div>
                        </div>
                    </a>
                </div>
            </li>

            li><div class="menu no-border"><a href="#testimonials"><div class="menu-tab"><div class="menu-title">Testimonials</div><div class="icon"><img src="images/nav-testimonials.png"></div></div></a></div></li

        </ul>

    </div> -->

    <!-- Modal -->

 <!--    <div id="myModal" class="modal fade" role="dialog">

        <div class="modal-dialog">

            Modal content

            <div class="modal-content">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <h4 class="modal-title">Pricing List</h4>

                </div>

                <div class="modal-body">

                    <p>Form will come here</p>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                </div>

            </div>

        </div>

    </div> -->

   

<!--     <div class="header_top" id="fixednav">

        <div class="header_sec inner-header-sec" data-ix="scroll-fade-out-6">

            <div class="container">

                <div class="fix-logo ">
                    <a href="index.html"><img src="../images/sbnew/logo-fixed.png" /></a>
                </div>

                <div class="social_right">

                    <a class="sign_af" href="coming.html" style="border: none;">Login </a><span style="color: rgba(0,0,0,.6);">/</span>

                    <a class="sign_af" href="coming.html" style="border: none;">Sign up</a>
                    <a class="sc_ico" href="#" style="border: none;" target="new"><i style="font-size: 24px; top: 3px; position: relative; color: #163081;" class="fa fa-android"  aria-hidden="true"></i></a>

                    <a class="sc_ico" href="#" style="border: none; margin: 0;"><i style="font-size: 24px; top: 3px; position: relative; color: #163081;" class="fa fa-apple" aria-hidden="true" target="new"></i></a>

                    <a class="sc_ico dsmbn" href="#" target="new"><i class="fa fa-facebook" aria-hidden="true"></i></a>

                    <a class="sc_ico dsmbn" href="#" target="new"><i class="fa fa-twitter" aria-hidden="true"></i></a>

                    <a class="sc_ico dsmbn" href="#" target="new"><i class="fa fa-linkedin" aria-hidden="true"></i></a>

                </div>

            </div>

        </div>

        

    </div> -->

<!--     <div class="mob-nav">

        <div class="navbar navbar-inverse navbar-fixed-top">

            <div class="container">

                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                    </button>

                    <a class="navbar-brand" href="../index"><img src="../images/sbnew/logo-fixed.png" /></a>

                </div>

                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav">

                        <li>
                            <div class="mmenu">
                                <a href="#rate">
                                    <div class="menu-tab">
                                        <div class="menu-title">Rates</div>
                                        <div class="icon"><img src="../images/sbnew/nav-rates.png"></div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        li><div class="menu"><a href="#members"><div class="menu-tab"><div class="menu-title t-text"><span>Platinum Members</span></div><div class="icon"><img src="images/nav-members.png"></div></div></a></div></li

                        <li>
                            <div class="mmenu">
                                <a href="#media">
                                    <div class="menu-tab">
                                        <div class="menu-title">Media</div>
                                        <div class="icon"><img src="../images/sbnew/nav-features.png"></div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="mmenu">
                                <a href="#business">
                                    <div class="menu-tab">
                                        <div class="menu-title">Business</div>
                                        <div class="icon"><img src="../images/sbnew/nav-price.png"></div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="mmenu">
                                <a href="#exclusive-features">
                                    <div class="menu-tab">
                                        <div class="menu-title">Features</div>
                                        <div class="icon"><img src="../images/sbnew/nav-chat.png"></div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="mmenu">
                                <a href="#vendors">
                                    <div class="menu-tab">
                                        <div class="menu-title t-text"><span>Our Vendors</span></div>
                                        <div class="icon"><img src="../images/sbnew/nav-products.png"></div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="mmenu">
                                <a href="#information">
                                    <div class="menu-tab">
                                        <div class="menu-title">Information</div>
                                        <div class="icon"><img src="../images/sbnew/nav-software.png"></div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        li><div class="menu no-border"><a href="#testimonials"><div class="menu-tab"><div class="menu-title">Testimonials</div><div class="icon"><img src="images/nav-testimonials.png"></div></div></a></div></li

                        li><div class="mmenu no-border"><a href="#testimonials"><div class="mmenutext">Testimonials</div><div class="micon"><img src="images/nav-testimonials.png"></div></a></div></li

                        <li class="misgn_sb"><a class="msign_af" href="coming.html" style="border: none;">Login</a></li>

                        <li class="misgn_sb"> <a class="msign_af" href="coming.html" style="border: none;">Sign up</a></li>

                    </ul>

                </div>
                /.nav-collapse

            </div>

        </div>

    </div> -->

<!--     <div class="mobscrolldwn">

        <a href="#media">

            <div class="scroll-down2">

                <span>

                <i style="font-size:22px;" class="fa fa-angle-double-down "></i>

            </span>

            </div>

        </a>

    </div> -->

    <!---js--->

    <script type="text/javascript" src="../js/sbnew/jquery-1.11.3.min.js"></script>

    <script type="text/javascript" src="../js/sbnew/bootstrap.min.js"></script>

    <!--script type="text/javascript" src="js/woozy.js"></script-->

    <!--for vertical-tab-->

    <script>
      /*  $(window).scroll(function() {

    if ($(this).scrollTop()>150)
     {
	 
		$('.fix-logo').fadeIn();
		$('.logo_sec').fadeOut();
		$("#fixednav").addClass("bgwhite");	
    }
	else {
		$('.fix-logo').fadeOut();
		$('.logo_sec').fadeIn();
		 $("#fixednav").removeClass("bgwhite");
		
	}
});

        $(window).scroll(function() {

            if ($(this).scrollTop() > 300)

            {

                $('.mobscrolldwn').fadeOut();

            } else {

                $('.mobscrolldwn').fadeIn();

            }

        });*/

        $(document).ready(function() {

            $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {

                e.preventDefault();

                $(this).siblings('a.active').removeClass("active");

                $(this).addClass("active");

                var index = $(this).index();

                $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");

                $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");

            });

        });
    </script>

    <!--for multi step form-->

    <script>
        $(document).ready(function() {

            $('.registration-form fieldset:first-child').fadeIn('slow');

            $('.registration-form input[type="text"]').on('focus', function() {

                $(this).removeClass('input-error');

            });

            // next step

            $('.registration-form .btn-next').on('click', function() {

                var parent_fieldset = $(this).parents('fieldset');

                var next_step = true;

                parent_fieldset.find('input[type="text"],input[type="email"]').each(function() {

                    var value1 = $('#origin').val();

                    var value2 = $('#destination').val();

                    var value3 = $('#weight').val();

                    var value4 = $('#box').val();

                    var value5 = $('#type_of_commodity').val();

                    var value6 = $('#contact_number').val();

                    var value7 = $('#email').val();

                    var email1 = $('#email').val();

                    var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/igm;

                    if (($(this).val() == "") || (value1.length < 3) || (value2.length < 3) || (value3.length < 1) || (value5.length < 1) || (value6.length < 10) || (re.test(email1) == false)) {

                        if ($(this).val() == "") {

                            $(this).addClass('input-error');

                        }

                        if (value5.length < 1) {

                            $('#type_of_commodity').addClass('input-error');

                            $('#type_of_commodity').tooltip({
                                'title': 'Enter Type of Commodity'
                            });
                            $('#type_of_commodity').tooltip('show');

                            $('#type_of_commodity').addClass('input-error');

                            next_step = false;

                        } else {

                            $('#type_of_commodity').removeClass('input-error');

                            $('#type_of_commodity').tooltip('destroy');

                            var vali = 0;

                        }

                        if (value6.length < 10) {

                            $('#contact_number').addClass('input-error');

                            $('#contact_number').tooltip({
                                'title': 'Enter 10 Digits'
                            });
                            $('#contact_number').tooltip('show');

                            $('#contact_number').addClass('input-error');

                            next_step = false;

                        } else {

                            $('#contact_number').removeClass('input-error');

                            $('#contact_number').tooltip('destroy');

                            var vali = 0;

                        }

                        if (value1.length < 3) {

                            $('#origin').addClass('input-error');

                            $('#origin').tooltip({
                                'title': 'Enter at least 3 characters',
                            });
                            $('#origin').tooltip('show');

                            $('#origin').addClass('input-error');

                            next_step = false;

                        } else {

                            $('#origin').removeClass('input-error');

                            $('#origin').tooltip('destroy');

                            var vali = 0;

                        }

                        if (value2.length < 3) {

                            $('#destination').addClass('input-error');

                            $('#destination').tooltip({
                                'title': 'Enter at least 3 characters'
                            });
                            $('#destination').tooltip('show');

                            $('#destination').addClass('input-error');

                            next_step = false;

                        } else {

                            $('#destination').removeClass('input-error');

                            $('#destination').tooltip('destroy');

                            var vali = 0;

                        }

                        if (value3.length < 1) {

                            $('#weight').addClass('input-error');

                            $('#weight').tooltip({
                                'title': 'Can\'t be empty'
                            });
                            $('#weight').tooltip('show');

                            $('#weight').addClass('input-error');

                            next_step = false;

                        } else {

                            $('#weight').removeClass('input-error');

                            $('#weight').tooltip('destroy');

                            var vali = 0;

                        }

                        var email1 = $('#email').val();

                        var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/igm;

                        if (re.test(email1) == false) {

                            $('#email').addClass('input-error');

                            $('#email').tooltip({
                                'title': 'Enter valid email id'
                            });
                            $('#email').tooltip('show');

                            $('#email').addClass('input-error');

                            next_step = false;

                        } else {

                            $('#email').removeClass('input-error');

                            $('#email').tooltip('destroy');

                            var vali = 0;

                        }

                        next_step = false;

                    } else {

                        $(this).removeClass('input-error');

                    }

                });

                if (next_step) {

                    parent_fieldset.fadeOut(400, function() {

                        $(this).next().fadeIn();

                    });

                }

            });

            // previous step

            $('.registration-form .btn-previous').on('click', function() {

                $(this).parents('fieldset').fadeOut(400, function() {

                    $(this).prev().fadeIn();

                });

            });

            // submit

            $('.registration-form').on('submit', function(e) {

                $(this).find('input[type="text"],input[type="email"]').each(function() {

                    if ($(this).val() == "") {

                        e.preventDefault();

                        $(this).addClass('input-error');

                    } else {

                        $(this).removeClass('input-error');

                    }

                });

            });

        });

        $('#close').click(function() {

            $('#quote_btn').css({

                'display': 'block'

            });

            $('#quote_btn2').css({

                'display': 'none'

            });

        });

        $('#close2').click(function() {

            $('#quote_btn').css({

                'display': 'block'

            });

            $('#quote_btn3').css({

                'display': 'none'

            });

        });

        if ($(window).width() > 739) {

            $(window).scroll(function() {

                if ($(this).scrollTop() > 300)

                {

                    $('#quote_btn2').fadeOut();

                    $('#quote_btn3').fadeOut();

                    $('#quote_btn').css({

                        'display': 'block'

                    });

                }

            });

        }

        $('#get-quote').hover(

            function() {
                $('#quote_btn2').fadeIn();

                $('#quote_btn').css({

                    'display': 'none'

                });
            }

        )

        $(document).ready(function() {

            var max_fields = 25; //maximum input boxes allowed

            var wrapper = $(".input_fields_wrap"); //Fields wrapper

            var add_button = $(".add_field_button"); //Add button ID

            var min_fields = 1;

            var x = 1; //initlal text box count

            $(add_button).click(function(e) { //on add input button click

                e.preventDefault();

                if (x < max_fields) { //max input box allowed

                    x++; //text box increment

                    $(wrapper).append('<div class="boxset1"><input type="text" name="l[]" placeholder="LENGTH" class="form-email form-control boxes"> <input type="text" name="w[]" placeholder="WIDTH" class="form-email form-control boxes"> <input type="text" name="h[]" placeholder="HEIGHT" class="form-email form-control boxes"> <input type="text" name="h[]" placeholder="NO.OF BOXES" class="form-email form-control boxes lstinput"> <a href="#" class="remove_field"><i class="fa fa-minus-circle" aria-hidden="true"></i></a></div>'); //add input box

                    if (x > min_fields) {

                        $('#apply-check').addClass("apply-hidden");

                    } else {

                        $('#apply-check').removeClass("apply-hidden");

                    }

                }

            });

            $(wrapper).on("click", ".remove_field", function(e) { //user click on remove text

                e.preventDefault();
                $(this).parent('div').remove();
                x--;

                if (x > min_fields) {

                    $('#apply-check').addClass("apply-hidden");

                } else {

                    $('#apply-check').removeClass("apply-hidden");

                }

            })

        });

        $('#apply').change(function() {

            if ($(this).is(":checked")) {

                $('.boxset1').addClass("apply-hidden");

                $('.add_field_button').addClass("box-hidden");

            } else {

                $('.boxset1').removeClass("apply-hidden");

                $('.add_field_button').removeClass("box-hidden");

            }

        });

        $('.myCheckbox').click(function() {

            $(this).siblings('input:checkbox').prop('checked', false);

        });

        function isNumber(evt) {

            evt = (evt) ? evt : window.event;

            var charCode = (evt.which) ? evt.which : evt.keyCode;

            if (charCode > 31 && (charCode < 48 || charCode > 57)) {

                return false;

            }

            return true;

        }
    </script>

    <!-- multi step form end-->

    <script type="text/javascript" src="js/swiper.min.js"></script>

    <!-- Initialize Swiper -->












<!-- scrool secound script-->
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top-50
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>


<!-- scrool secound script end-->






















    <script>
        var swiper = new Swiper('.swiper-container', {

            pagination: '.swiper-pagination',

            nextButton: '.swiper-button-next',

            prevButton: '.swiper-button-prev',

            paginationClickable: true,

            spaceBetween: 0,

            centeredSlides: true,

            autoplay: 3500,

            speed: 1500,

            autoplayDisableOnInteraction: false

        });

        $(function() {

            var hash = window.location.hash;

            hash && $('ul.nav a[href="' + hash + '"]').tab('show');

            $('.nav-tabs a').click(function(e) {

                $(this).tab('show');

                var scrollmem = $('body').scrollTop() || $('html').scrollTop();

                window.location.hash = this.hash;

                $('html,body').scrollTop(scrollmem);

            });

        });

        $('.menu a').click(function() {
            $('html, body').animate({
                scrollTop: $($(this).attr('href')).offset().top - 50
            }, 500);
            return false;
        });
        $('.nav-tabs li a').click(function(e) {
            e.preventDefault();
            $(this).tab('show');
            $('.tab-content > .tab-pane.active').jScrollPane();
        });
        $('.mobscrolldwn a').click(function() {
            $('html, body').animate({
                scrollTop: $($(this).attr('href')).offset().top - 50
            }, 500);
            return false;
        });


        $(document).click(function(e) {

$(".navbar-collapse").removeClass('in');


  
});

 $('.nav.navbar-nav li').click(function(e) {
           $(".nav.navbar-nav li").removeClass('active');

            $(this).addClass('active');
           
        });
    </script>

    <!-- FORM TABS -->

    <!--js end-->

</body>

</html>