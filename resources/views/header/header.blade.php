<div class="header_top" id="fixednav">

    <div class="header_sec inner-header-sec" data-ix="scroll-fade-out-6">

        <div class="container">

            <div class="fix-logo ">
                <a href="index"><img src="../images/sbnew/logo-fixed.png" /></a>
            </div>

            <div class="social_right">

            @if (Route::has('login'))
               
                    @if (Auth::check())
                        <a href="{{ url('/home') }}" class="sign_af" style="border: none;">Dashbaord</a> | 
                        <a  class="sign_af" style="border: none;" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    {!! trans('titles.logout') !!}
                                </a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                    @else
                        <a href="#" class="sign_af"  id="logindiv" style="border: none;">Login</a>
                        <span style="color: rgba(0,0,0,.6);">/</span>
                        <a href="{{ url('/register') }}" class="sign_af" style="border: none;">Sign up</a>
                    @endif
               
            @endif

           
      
               

             
                <!-- <a class="sc_ico" href="#" style="border: none;" target="new"><i style="font-size: 24px; top: 3px; position: relative; color: #163081;" class="fa fa-android"  aria-hidden="true"></i></a>

                <a class="sc_ico" href="#" style="border: none; margin: 0;"><i style="font-size: 24px; top: 3px; position: relative; color: #163081;" class="fa fa-apple" aria-hidden="true" target="new"></i></a>
-->
                <a class="sc_ico dsmbn" href="#" target="new"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a class="sc_ico dsmbn" href="#" target="new"><i class="fa fa-twitter" aria-hidden="true"></i></a>

                <a class="sc_ico dsmbn" href="#" target="new"><i class="fa fa-linkedin" aria-hidden="true"></i></a>

            </div>

        </div>

    </div>
  <div class="login">
        <div class="arrow-up"></div>
        <div class="login-box">
        <div class="welcomeTxt">Welcome Back!</div>
        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}" id="sb-login">
                        {{ csrf_field() }}
		 <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
		 <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
         <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span> 
		 @if ($errors->has('email'))
		<span class="help-block">
		<strong>{{ $errors->first('email') }}</strong>
		</span>
		@endif
		 </div>
  <div class="input-group {{ $errors->has('password') ? ' has-error' : '' }}">
                  <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                  <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true" style="font-size:21px;"></i></span>
              @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
            </div>



                     <div class="input-group" style="width:100%;">
                                        <div class="chck-input"> <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}></div> <div class="chck-text">Remember Me</div>
                                </div>
                           

                        <div class="sb-loginbtn">
                                <button type="submit" class="btn sb-login">
                                    Login
                                </button>

                                                     </div>
                       

                        <p class="text-center margin-bottom-3">
                            Or Login with
                        </p>

                        @include('partials.socials-icons')

                    </form>
        

        </div>
        <div class="forget-box">
        <div class="welcomeTxt">Forget Password</div>
         @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                <form id="forgetForm" class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                 {{ csrf_field() }}
                <div class="input-group divInput">
                    <div class="inputGrp">
                          <input  id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email" style="border-right:none; border-top-right-radius:0px; border-bottom-right-radius:0px;">
                          <span class="input-group-addon iconDiv"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                          @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                      </div>   
                </div>
               
                <div class="submitClearDiv">
                    <button type="submit" class="btn frgtSubBtn">Submit</button>
                    <button type="button" class="btn frgtClrBtn">Clear</button>
                </div>
            </form>
        </div>
        <div class="forget-txt">
            <p id="frgtLinkForget">Forget Password?</p>
            <p id="frgtLinkLogin">Login</p>
        </div>
    
    
    </div>

    

</div>