<!--<div id="content-wrapper">-->
            <nav class="navbar navbar-default navbar-static-top">
                
                <!--Header Rightside Section End-->
                <div class="search_full_bg">
                    <ul class="sbRightHeader">
                        <!--Notification Section start-->
                         {{-- Authentication Links --}}
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">{!! trans('titles.login') !!}</a></li>
                    <li><a href="{{ route('register') }}">{!! trans('titles.register') !!}</a></li>
                @else
                        <li class="sbNotify"><a href="#"><i class="fa fa-bell-o" aria-hidden="true"></i></a></li>
                         <li class="sbNotify" {{ Request::is('profile/'.Auth::user()->name, 'profile/'.Auth::user()->name . '/edit') ? 'class=active' : null }}>
                         {!! HTML::decode(link_to(url('/profile/'.Auth::user()->name),
    '<i class="fa fa-user" aria-hidden="true"></i>')) !!}
                         </li>
                          
                        <!--Notification Section End-->
                        <li class="sbNotify sbProfile">
                        
                            <span class="sbUsername">
                                <p>{{ Auth::user()->name }} </p>
                            </span>
                            <span class="sbUserimg"> @if ((Auth::User()->profile) && Auth::user()->profile->avatar_status == 1)
                                <img src="{{ Auth::user()->profile->avatar }}" alt="{{ Auth::user()->name }}" class="sbUserPic">
                            @else
                                <div class="user-avatar-nav"></div>
                            @endif</span>
                            <!--Profile Setting Drop Down Start-->
                            <div class="newprofileDiv" id="newProfileLiTab">
                                <div class="settingsProfileBG">
                                    <div class="nameRole">
                                        <span class="boxuserName">{{ Auth::user()->first_name}} {{ Auth::user()->last_name}}  </span>
                                        <span class="boxuserRole" id="role-name"> You have
                @role('admin')
                   Admin
                @endrole
                @role('user')
                   User
                @endrole
                @role('vendor')
                  Vendor
                @endrole
            Access </span>
                                       
                                    </div>
                                </div>
                                <div class="profileSignout">
                                    <div class="newProfilebox" {{ Request::is('profile/'.Auth::user()->name, 'profile/'.Auth::user()->name . '/edit') ? 'class=active' : null }}> {!! HTML::link(url('/profile/'.Auth::user()->name), trans('titles.profile'),array('class' => 'newProfileText')) !!}
                                    
                              
                                    </div>
                                    <div class="newSignOutbox">
                                    
                                    <a class="newSignOutTxt" id="logout-btn" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    {!! trans('titles.logout') !!}
                                </a>
                                
                                    </div>
                                </div>
                            </div>
                            <!--Profile Setting Drop Down End-->
                        </li>
                        <li class="sbNotify"> <a id="logout-btn" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    {!! trans('titles.logout') !!}
                                </a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form></li>
                         @endif
                    </ul>
                </div>
                <!--Header Rightside Section End-->
            </nav>
        </div>


 <div id="wrapper" class="sbbgImg">
 <aside id="side-wrapper">
			    <!--Sidemenu End-->
                <ul class="nav nav-pills nav-stacked">
					<li>
						<div class="container-fluid side_line_bg1">
							<div class="logo_bg">
							 {{-- Branding Image --}}
            <a  href="{{ url('/') }}">
              <img src="/user/images/logo.png" style="width:100%;"/>
            </a>
						</div>
						<div class="navbar-header headerIcon"> 
							<a data-toggle="sidebar" class="navbar-brand" href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a> 
						</div>
						</div>
					</li>
                      @role('admin')
                    
                            <li {{ Request::is('users', 'users/' . Auth::user()->id, 'users/' . Auth::user()->id . '/edit') ? 'class=active' : null }}>{!! HTML::link(url('/users'), Lang::get('titles.adminUserList')) !!}
                            
                            </li> <li {{ Request::is('users/create') ? 'class=active' : null }}>{!! HTML::link(url('/users/create'), Lang::get('titles.adminNewUser')) !!}</li>
                               <li {{ Request::is('getquotes') ? 'class=active' : null }}>{!! HTML::link(url('/getquotes/'), Lang::get('titles.adminGetquotes')) !!}</li>
                             <li {{ Request::is('rates') ? 'class=active' : null }}>{!! HTML::link(url('/rates/'), Lang::get('titles.adminRate')) !!}</li>
                            
                                <li {{ Request::is('surcharges') ? 'class=active' : null }}>{!! HTML::link(url('/surcharges/'), Lang::get('titles.adminSurcharge')) !!}</li>
                            <li {{ Request::is('surcharges/create') ? 'class=active' : null }}>{!! HTML::link(url('/surcharges/create'), Lang::get('titles.adminNewSurcharge')) !!}</li>

                           <li {{ Request::is('master', 'master/' . Auth::user()->id, 'master/' . Auth::user()->id . '/edit') ? 'class=active' : null }}>{!! HTML::link(url('/master'), Lang::get('titles.adminMasterList')) !!}
                           
                           </li>
                            <li {{ Request::is('master', 'master/createregion' . Auth::user()->id, 'master/createregion' . Auth::user()->id . '/edit') ? 'class=active' : null }}>{!! HTML::link(url('/master/createregion'), Lang::get('titles.adminNewRegion')) !!}
                           
                           </li>
                            <li {{ Request::is('master', 'master/createcountry' . Auth::user()->id, 'master/createcountry' . Auth::user()->id . '/edit') ? 'class=active' : null }}>{!! HTML::link(url('/master/createcountry'), Lang::get('titles.adminNewCountry')) !!}
                           
                           </li>
                            <li {{ Request::is('master', 'master/createcity' . Auth::user()->id, 'master/createcity' . Auth::user()->id . '/edit') ? 'class=active' : null }}>{!! HTML::link(url('/master/createcity'), Lang::get('titles.adminNewCity')) !!}
                           
                           </li>
                            <li {{ Request::is('master', 'master/createport' . Auth::user()->id, 'master/createport' . Auth::user()->id . '/edit') ? 'class=active' : null }}>{!! HTML::link(url('/master/createport'), Lang::get('titles.adminNewPort')) !!}
                           
                           </li>
                            <li {{ Request::is('commodity', 'commodity/' . Auth::user()->id, 'commodity' . Auth::user()->id . '/edit') ? 'class=active' : null }}>{!! HTML::link(url('/commodity/'), Lang::get('titles.adminCommodity')) !!}
                           
                           </li>
                             <li {{ Request::is('commodity', 'commodity/createsection' . Auth::user()->id, 'commodity/createsection' . Auth::user()->id . '/edit') ? 'class=active' : null }}>{!! HTML::link(url('/commodity/createsection'), Lang::get('titles.adminNewSection')) !!}
                           
                           </li>
                           <li {{ Request::is('commodity', 'commodity/createchapter' . Auth::user()->id, 'commodity/createchapter' . Auth::user()->id . '/edit') ? 'class=active' : null }}>{!! HTML::link(url('/commodity/createchapter'), Lang::get('titles.adminNewChapter')) !!}
                           
                           </li>
                            <li {{ Request::is('commodity', 'commodity/createsubchapter' . Auth::user()->id, 'commodity/createsubchapter' . Auth::user()->id . '/edit') ? 'class=active' : null }}>{!! HTML::link(url('/commodity/createsubchapter'), Lang::get('titles.adminNewsubChapter')) !!}
                           
                           </li>
                           <li {{ Request::is('commodity', 'commodity/commodities' . Auth::user()->id, 'commodity/commodities' . Auth::user()->id . '/edit') ? 'class=active' : null }}>{!! HTML::link(url('/commodity/commodities'), Lang::get('titles.adminNewcommodities')) !!}
                           
                           </li>
                            <li {{ Request::is('logs') ? 'class=active' : null }}>{!! HTML::link(url('/logs'), Lang::get('titles.adminLogs')) !!}</li>
                            
                            <li {{ Request::is('routes') ? 'class=active' : null }}>{!! HTML::link(url('/routes'), Lang::get('titles.adminRoutes')) !!}</li>
                            <li {{ Request::is('active-users') ? 'class=active' : null }}>{!! HTML::link(url('/active-users'), Lang::get('titles.activeUsers')) !!}</li>
                       
                @endrole
                   
                    
                </ul>
                <!--Sidemenu End-->
                <!--Mininmize Sidemenu Start-->
                <ul class="minimize_icons">
					<li class="minListlogo">
						<div class="navbar-header headerIcon minBg"> 
							<a data-toggle="sidebar" class="navbar-brand" href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a> 
						</div>	 
					</li>
                    
                   
                </ul>
                <!--Mininmize Sidemenu Start-->
            </aside>