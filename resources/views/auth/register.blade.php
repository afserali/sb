@extends('layouts.before')

@section('content')

<div class="container-fluid platsign-img">
    <div class="row">
        <div class="col-md-12">
            {{-- Signup Box Start--}}
            <div class="platsign-box">
                {{-- Signup Left Side Start--}}
                <div class="platsign-left">
                        <div class="plansign-dtl">
                            <div class="plat-afblogo">
                                <img src="../images/sbnew/logo.png">
                            </div>
                            <p class="text-center signupSocial margin-bottom-2">
                                   Use Social Logins to Register
                                </p>
                            <div>
                                @include('partials.socials')
                            </div>
                        </div>
                </div>
                {{-- Signup Left Side End--}}
                {{-- Signup Right Side Start--}}
            <div class="plansign-right">
                <div class="plansign-rdtl">
                    {{-- Register Page Start--}}
                    <div class="newShippingReg">
                <div class="plan-signnew">Register Now</div>
                <div class="panel-body">

                    {!! Form::open(['route' => 'register', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'POST'] ) !!}

                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                {{--<label for="first_name" class="col-sm-4 control-label">First Name</label>--}}
                                <div class="col-sm-12">
                            
                                    <select class="register_select" id="role" name="role">
                  												<option value="">Select Role</option>
                  												<option value="5">Freight Forwarder/MTO</option>
                  												<option value="6">Custom Broker</option>
                  												<option value="7">Exporter/Importer</option>

                  											</select>
                                        @if ($errors->has('role'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('role') }}</strong>
                                            </span>
                                        @endif
                                </div>
                            </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {{--<label for="name" class="col-sm-4 control-label">Name</label>--}}
                            <div class="col-sm-12">
                                {!! Form::text('name', null, ['class' => 'form-control formColor', 'placeholder' => 'Username', 'id' => 'name', 'required', 'autofocus']) !!}
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{--<div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-sm-4 control-label">First Name</label>
                            <div class="col-sm-6">
                                {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'First Name', 'id' => 'first_name']) !!}
                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>--}}

                        {{--<div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="col-sm-4 control-label">Last Name</label>
                            <div class="col-sm-6">
                                {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Last Name', 'id' => 'last_name']) !!}
                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>--}}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            {{--<label for="email" class="col-sm-4 control-label">E-Mail Address</label>--}}
                            <div class="col-sm-12">
                                {!! Form::email('email', null, ['class' => 'form-control formColor', 'id' => 'email', 'placeholder' => 'E-Mail Address', 'required']) !!}
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                {{--<label for="email" class="col-sm-4 control-label">E-Mail Address</label>--}}
                                <div class="col-sm-2">
                                        {!! Form::text('countrycode', null, ['class' => 'form-control formColor', 'id' => 'countrycode', 'placeholder' => '91', 'required']) !!}
                                        @if ($errors->has('countrycode'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('countrycode') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                <div class="col-sm-10">
                                    {!! Form::text('mobile', null, ['class' => 'form-control formColor', 'id' => 'mobile', 'placeholder' => 'Mobile Number', 'required']) !!}
                                    @if ($errors->has('mobile'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('mobile') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            {{--<label for="password" class="col-sm-4 control-label">Password</label>--}}
                            <div class="col-sm-12">
                                {!! Form::password('password', ['class' => 'form-control formColor', 'id' => 'password', 'placeholder' => 'Password', 'required']) !!}
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            {{--<label for="password-confirm" class="col-sm-4 control-label">Confirm Password</label>--}}
                            <div class="col-sm-12">
                                {!! Form::password('password_confirmation', ['class' => 'form-control formColor', 'id' => 'password-confirm', 'placeholder' => 'Confirm Password', 'required']) !!}
                            </div>
                        </div>
                        @if(config('settings.reCaptchStatus'))
                            <div class="form-group">
                                <div class="col-sm-6 col-sm-offset-1">
                                    <div class="g-recaptcha" data-sitekey="{{ env('RE_CAP_SITE') }}"></div>
                                </div>
                            </div>
                        @endif
                        <div class="form-group margin-bottom-2">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary plan-sub">
                                    Register
                                </button>
                            </div>
                        </div>

                        {{--<p class="text-center margin-bottom-2">
                            Or Use Social Logins to Register
                        </p>--}}

                        <p class="text-center orSignupTxt margin-bottom-2">
                                Or
                        </p>
                        <p class="text-center orSignupTxt margin-bottom-2">
                             Already have an Account? <span class="login-txt"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;Login</span>
                        </p>

                        {{--@include('partials.socials')--}}

                    {!! Form::close() !!}

                </div>
            </div>
                {{-- Register Page End--}}

                {{-- Login Section Start --}}
                    <div class ="loginSignUp">
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



                                                 <div class="input-group checkDiv" style="width:100%;">
                                                                    <div class="chck-input"> <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}></div> <div class="chck-text">Remember Me</div>
                                                            </div>


                                                    <div class="sb-loginbtn">
                                                            <button type="submit" class="btn sb-login">
                                                                Login
                                                            </button>

                                                                                 </div>


                                                    <p class="text-center signupOrlg margin-bottom-3">
                                                        Or Login with
                                                    </p>

                                                    @include('partials.socials-icons')

                                                </form>


                                    </div>
                                </div>
                                </div>
                                <div class="forgetPwdSection">
                                    <div class="forget-box">
                                    <div class="welcomeTxt">Forget Password</div>
                                       @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                                              <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}


                                            <div class="input-group divInput">
                                                <div class="inputGrp">
                                                      <input  id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="EMAIL Id" style="border-right:none; border-top-right-radius:0px; border-bottom-right-radius:0px;">
                                                      <span class="input-group-addon iconDiv fmailIconbg"><i class="fa fa-envelope" aria-hidden="true"></i></span>
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
                                </div>
                                <div class="forget-txt">
                                        <p id="frgtLinkForget">Forget Password?</p>
                                </div>
                                <div class="loginLink-txt">
                                    <p id="loginLinkLogin">Login</p>
                                </div>
                                <div class="newSignup">
                                    <p>New User ? <span id="newSignupregister">Register Now</span></p>
                                </div>
                                <div class="signupHome">
                                    <a href="/index"><img src="/../images/sbnew/home-img.png" style="width:30px;"></a>
                                </div>




                {{-- Login Section End --}}
            </div>
        </div>
        {{-- Signup Right Side Start--}}
        </div>
        {{-- Signup Box End--}}
        </div>
    </div>
</div>

@endsection

@section('footer_scripts')

    <script src='https://www.google.com/recaptcha/api.js'></script>

@endsection
