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
                        </li>
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
                                <ul class="profileSignout">
                                    <li class="newProfilebox" {{ Request::is('profile/'.Auth::user()->name, 'profile/'.Auth::user()->name . '/edit') ? 'class=active' : null }}> 
                                        {!! HTML::link(url('/profile/'.Auth::user()->name), trans('titles.profile'),array('class' => 'newProfileText')) !!}
                                    </li>
                                    <li class="newSignOutbox">
                                    
                                    <a class="newSignOutTxt" id="logout-btn" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    {!! trans('titles.logout') !!}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                                
                            </li>
                        </ul>
                            </div>
                            <!--Profile Setting Drop Down End-->
                        
                        <!--<li class="sbNotify"> <a id="logout-btn" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    {!! trans('titles.logout') !!}
                                </a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form></li>-->
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
                    
                            <li class="sidebarIcon" id="userMainIcon">
                                <span class="mainIcon">
                                    <span class="iconSide"><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <span class="textSide">User&nbsp;<i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                                </span>
                                <div class="hiddenIcon">
                                    <div class="subIcon">
                                    <span class="iconSide"><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <span class="textSide" {{ Request::is('users', 'users/' . Auth::user()->id, 'users/' . Auth::user()->id . '/edit') ? 'class=active' : null }}>
                                    {!! HTML::link(url('/users'), Lang::get('titles.adminUserList'))!!}
                                    </span>
                                    </div>
                                    <div class="subIcon">
                                        <span class="iconSide"><i class="fa fa-user-plus" aria-hidden="true"></i></span>
                                        <span class="textSide" {{ Request::is('users/create') ? 'class=active' : null }}>
                                        {!! HTML::link(url('/users/create'), Lang::get('titles.adminNewUser')) !!}
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li class="sidebarIcon">
                                <span class="iconSide"><i class="fa fa-file-text" aria-hidden="true"></i></span>
                                <span class="textSide"{{ Request::is('getquotes') ? 'class=active' : null }}>
                                {!! HTML::link(url('/getquotes/'), Lang::get('titles.adminGetquotes')) !!}
                                </span>
                            </li>
                             <li class="sidebarIcon">
                                <span class="iconSide"><i class="fa fa-money" aria-hidden="true"></i></span>
                                <span class="textSide"{{ Request::is('rates') ? 'class=active' : null }}>
                                    {!! HTML::link(url('/rates/'), Lang::get('titles.adminRate')) !!}
                                 </span>
                            </li>
                            <li class="sidebarIcon" id="surchargeIcon">
                                    <span class="mainIcon">
                                    <span class="iconSide"><i class="fa fa-th-list" aria-hidden="true"></i></span>
                                    <span class="textSide">Surcharges&nbsp;<i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                                    </span>
                                    <div class="hiddenIcon2">
                                    <div class="subIcon">
                                    <span class="iconSide"><i class="fa fa-th-list" aria-hidden="true"></i></span>
                                    <span class="textSide"{{ Request::is('surcharges') ? 'class=active' : null }}>
                                        {!! HTML::link(url('/surcharges/'), Lang::get('titles.adminSurcharge')) !!}
                                    </span>
                                </div>
                                <div class="subIcon">
                                    <span class="iconSide"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
                                    <span class="textSide" {{ Request::is('surcharges/create') ? 'class=active' : null }}>
                                        {!! HTML::link(url('/surcharges/create'), Lang::get('titles.adminNewSurcharge')) !!}
                                    </span>
                                </div>
                            </div>
                            </li>
                            <li class="sidebarIcon" id="masterIcon">
                                    <span class="mainIcon">
                                        <span class="iconSide"><i class="fa fa-database" aria-hidden="true"></i></span>
                                        <span class="textSide"> Master&nbsp;<i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                                    </span>
                                    <div class="hiddenIcon3">
                                        <div class="subIcon">
                                            <span class="iconSide"><i class="fa fa-database" aria-hidden="true"></i></span>
                                            <span class="textSide"{{ Request::is('master', 'master/' . Auth::user()->id, 'master/' . Auth::user()->id . '/edit') ? 'class=active' : null }}>
                                                 {!! HTML::link(url('/master'), Lang::get('titles.adminMasterList')) !!}
                                             </span>
                                        </div>
                                        <div class="subIcon">
                                                <span class="iconSide"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                                <span class="textSide"{{ Request::is('master', 'master/createregion' . Auth::user()->id, 'master/createregion' . Auth::user()->id . '/edit') ? 'class=active' : null }}>
                                                    {!! HTML::link(url('/master/createregion'), Lang::get('titles.adminNewRegion')) !!}
                                                </span> 
                                        </div>
                                        <div class="subIcon">
                                            <span class="iconSide"><i class="fa fa-globe" aria-hidden="true"></i></span>
                                            <span class="textSide"{{ Request::is('master', 'master/createcountry' . Auth::user()->id, 'master/createcountry' . Auth::user()->id . '/edit') ? 'class=active' : null }}>
                                                 {!! HTML::link(url('/master/createcountry'), Lang::get('titles.adminNewCountry')) !!}
                                            </span>
                                        </div>
                                        <div class="subIcon">
                                            <span class="iconSide"><i class="fa fa-building" aria-hidden="true"></i></span>
                                            <span class="textSide"{{ Request::is('master', 'master/createcity' . Auth::user()->id, 'master/createcity' . Auth::user()->id . '/edit') ? 'class=active' : null }}>
                                                 {!! HTML::link(url('/master/createcity'), Lang::get('titles.adminNewCity')) !!}
                                            </span> 
                                        </div>
                                        <div class="subIcon">
                                            <span class="iconSide"><i class="fa fa-ship" aria-hidden="true"></i></span>
                                            <span class="textSide"{{ Request::is('master', 'master/createport' . Auth::user()->id, 'master/createport' . Auth::user()->id . '/edit') ? 'class=active' : null }}>
                                                 {!! HTML::link(url('/master/createport'), Lang::get('titles.adminNewPort')) !!}
                                            </span> 
                                        </div>
                                 </div>
                            </li>                          
                            <li class="sidebarIcon" id="commodityIcon">
                                    <span class="mainIcon">
                                        <span class="iconSide"><i class="fa fa-cubes" aria-hidden="true"></i></span>
                                        <span class="textSide"> Commodity&nbsp;<i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                                    </span>
                                    <div class="hiddenIcon4">
                                        <div class="subIcon">
                                            <span class="iconSide"><i class="fa fa-cubes" aria-hidden="true"></i></span>
                                                <span class="textSide"{{ Request::is('commodity', 'commodity/' . Auth::user()->id, 'commodity' . Auth::user()->id . '/edit') ? 'class=active' : null }}>
                                                    {!! HTML::link(url('/commodity/'), Lang::get('titles.adminCommodity')) !!}
                                                </span>
                                         </div>
                                         <div class="subIcon">
                                            <span class="iconSide"><i class="fa fa-pie-chart" aria-hidden="true"></i></span>
                                            <span class="textSide"{{ Request::is('commodity', 'commodity/createsection' . Auth::user()->id, 'commodity/createsection' . Auth::user()->id . '/edit') ? 'class=active' : null }}>
                                                 {!! HTML::link(url('/commodity/createsection'), Lang::get('titles.adminNewSection')) !!}
                                             </span>
                                         </div>
                                         <div class="subIcon">
                                                <span class="iconSide"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
                                                <span class="textSide"{{ Request::is('commodity', 'commodity/createchapter' . Auth::user()->id, 'commodity/createchapter' . Auth::user()->id . '/edit') ? 'class=active' : null }}>
                                                    {!! HTML::link(url('/commodity/createchapter'), Lang::get('titles.adminNewChapter')) !!}
                                                </span> 
                                         </div>
                                         <div class="subIcon">
                                            <span class="iconSide"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
                                            <span class="textSide"{{ Request::is('commodity', 'commodity/createsubchapter' . Auth::user()->id, 'commodity/createsubchapter' . Auth::user()->id . '/edit') ? 'class=active' : null }}>
                                                {!! HTML::link(url('/commodity/createsubchapter'), Lang::get('titles.adminNewsubChapter')) !!}
                                            </span>  
                                         </div>
                                         <div class="subIcon">
                                            <span class="iconSide"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                                            <span class="textSide"{{ Request::is('commodity', 'commodity/commodities' . Auth::user()->id, 'commodity/commodities' . Auth::user()->id . '/edit') ? 'class=active' : null }}>
                                                {!! HTML::link(url('/commodity/commodities'), Lang::get('titles.adminNewcommodities')) !!}
                                            </span> 
                                         </div>
                                    </div>    
                           </li>
                           <li class="sidebarIcon">
                                <span class="iconSide"><i class="fa fa-file" aria-hidden="true"></i></span>
                                <span class="textSide"{{ Request::is('logs') ? 'class=active' : null }}>
                                    {!! HTML::link(url('/logs'), Lang::get('titles.adminLogs')) !!}
                                </span>    
                            </li>
                            <li class="sidebarIcon">
                                <span class="iconSide"><i class="fa fa-info-circle" aria-hidden="true"></i></span>
                                <span class="textSide"{{ Request::is('routes') ? 'class=active' : null }}>
                                    {!! HTML::link(url('/routes'), Lang::get('titles.adminRoutes')) !!}
                                </span>
                            </li>
                            <li class="sidebarIcon">
                                <span class="iconSide"><i class="fa fa-check-circle" aria-hidden="true"></i></span>
                                <span class="textSide"{{ Request::is('active-users') ? 'class=active' : null }}>
                                    {!! HTML::link(url('/active-users'), Lang::get('titles.activeUsers')) !!}
                                </span>
                            </li>
                       
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
                    <li class="sidebarIcon">
                        <span class="minmainIcon" id="minUser">
                            <a href="#" data-toggle="tooltip" title="User"><i class="fa fa-user" aria-hidden="true"></i></a>&nbsp;
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </span>
                        <div class="minhideIcon">
                        <div class="minsubIcon">
                            <span class="iconSide"{{ Request::is('users') ? 'class=active' : null }}>
                            <!--  HTML::link(url('/active-users', array(), array('class' => 'btn')))-->
                             {{ HTML::link('/users', '', array('class' => 'userSIcon'))}}
                            </span>
                        </div>
                        <div class="minsubIcon">
                            <span class="iconSide"{{ Request::is('users/create') ? 'class=active' : null }}>
                            <!--  HTML::link(url('/active-users', array(), array('class' => 'btn')))-->
                                {{ HTML::link('/users/create', '', array('class' => 'adduserSIcon'))}}
                             </span>
                        </div>
                        </div>
                    </li>
                    <li class="sidebarIcon">
                            <span class="iconSide"{{ Request::is('getquotes') ? 'class=active' : null }}>
                                   <!--  HTML::link(url('/active-users', array(), array('class' => 'btn')))-->
                                    {{ HTML::link('/getquotes', '', array('class' => 'getSIcon'))}}
                            </span>
                    </li>
                    <li class="sidebarIcon">
                            <span class="iconSide"{{ Request::is('rates') ? 'class=active' : null }}>
                                   <!--  HTML::link(url('/active-users', array(), array('class' => 'btn')))-->
                                    {{ HTML::link('/rates', '', array('class' => 'rateSIcon'))}}
                            </span>
                    </li>
                    <li class="sidebarIcon">
                            <span class="minmainIcon" id="minSurcharge">
                                    <a href="#" data-toggle="tooltip" title="Surcharges"><i class="fa fa-th-list" aria-hidden="true"></i></a>&nbsp;
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            </span>
                            <div class="minhideIcon2">
                                <div class="minsubIcon">
                                    <span class="iconSide"{{ Request::is('surcharges') ? 'class=active' : null }}>
                                   <!--  HTML::link(url('/active-users', array(), array('class' => 'btn')))-->
                                     {{ HTML::link('/surcharges', '', array('class' => 'surchSIcon'))}}
                                    </span>
                                </div>
                                <div class="minsubIcon">
                                    <span class="iconSide"{{ Request::is('surcharges/create') ? 'class=active' : null }}>
                                            <!--  HTML::link(url('/active-users', array(), array('class' => 'btn')))-->
                                         {{ HTML::link('/surcharges/create', '', array('class' => 'surchcreateSIcon'))}}
                                     </span>
                                </div>
                            </div>
                    </li>
                    <li class="sidebarIcon">
                            <span class="minmainIcon" id="minMaster">
                                    <a href="#" data-toggle="tooltip" title="Master"><i class="fa fa-database" aria-hidden="true"></i></a>&nbsp;
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            </span>
                            <div class="minhideIcon3">
                                <div class="minsubIcon">
                                    <span class="iconSide"{{ Request::is('master', 'master/' . Auth::user()->id, 'master/' . Auth::user()->id . '/edit') ? 'class=active' : null }}>
                                        <!--  HTML::link(url('/active-users', array(), array('class' => 'btn')))-->
                                         {{ HTML::link('/master', '', array('class' => 'mastSIcon'))}}
                                    </span>
                                </div>
                                <div class="minsubIcon">
                                    <span class="iconSide"{{ Request::is('master', 'master/createregion' . Auth::user()->id, 'master/createregion' . Auth::user()->id . '/edit') ? 'class=active' : null }}>
                                        <!--  HTML::link(url('/active-users', array(), array('class' => 'btn')))-->
                                       {{ HTML::link('/master/createregion', '', array('class' => 'regiSIcon'))}}
                                    </span>        
                                </div>
                                <div class="minsubIcon">
                                        <span class="iconSide"{{ Request::is('master', 'master/createcountry' . Auth::user()->id, 'master/createcountry' . Auth::user()->id . '/edit') ? 'class=active' : null }}>
                                            <!--  HTML::link(url('/active-users', array(), array('class' => 'btn')))-->
                                             {{ HTML::link('/master/createcountry', '', array('class' => 'countrySIcon'))}}
                                     </span>
                                </div>
                                <div class="minsubIcon">
                                    <span class="iconSide"{{ Request::is('master', 'master/createcity' . Auth::user()->id, 'master/createcity' . Auth::user()->id . '/edit') ? 'class=active' : null }}>
                                        <!--  HTML::link(url('/active-users', array(), array('class' => 'btn')))-->
                                         {{ HTML::link('/master/createcity', '', array('class' => 'cityrSIcon'))}}
                                     </span>        
                                </div>
                                <div class="minsubIcon">
                                    <span class="iconSide"{{ Request::is('master', 'master/createport' . Auth::user()->id, 'master/createport' . Auth::user()->id . '/edit') ?  'class=active' : null }}>
                                         <!--  HTML::link(url('/active-users', array(), array('class' => 'btn')))-->
                                         {{ HTML::link('/master/createport', '', array('class' => 'portSIcon'))}}
                                     </span>
                                </div>
                            </div>                     
                    </li>
                    <li class="sidebarIcon">
                        <span class="minmainIcon" id="minCommodity">
                                <a href="#" data-toggle="tooltip"  title="Commodity"><i class="fa fa-cubes" aria-hidden="true"></i></a>&nbsp;
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </span>
                        <div class="minhideIcon4">
                            <div class="minsubIcon">
                                <span class="iconSide"{{ Request::is('commodity', 'commodity/' . Auth::user()->id, 'commodity' . Auth::user()->id . '/edit') ? 'class=active' : null }}>
                                <!--  HTML::link(url('/active-users', array(), array('class' => 'btn')))-->
                                     {{ HTML::link('/commodity', '', array('class' => 'commSIcon'))}}
                                </span>
                            </div>
                            <div class="minsubIcon">
                                <span class="iconSide"{{ Request::is('commodity', 'commodity/createsection' . Auth::user()->id, 'commodity/createsection' . Auth::user()->id . '/edit') ? 'class=active' : null }}>
                                 <!--  HTML::link(url('/active-users', array(), array('class' => 'btn')))-->
                                    {{ HTML::link('/commodity/createsection', '', array('class' => 'commcreateSIcon'))}}
                                </span>
                            </div>
                            <div class="minsubIcon">
                                <span class="iconSide"{{ Request::is('commodity', 'commodity/createchapter' . Auth::user()->id, 'commodity/createchapter' . Auth::user()->id . '/edit') ? 'class=active' : null }}>
                                        <!--  HTML::link(url('/active-users', array(), array('class' => 'btn')))-->
                                         {{ HTML::link('/commodity/createchapter', '', array('class' => 'chaptSIcon'))}}
                                 </span>    
                            </div>
                            <div class="minsubIcon">
                                <span class="iconSide"{{ Request::is('commodity', 'commodity/createsubchapter' . Auth::user()->id, 'commodity/createsubchapter' . Auth::user()->id . '/edit') ? 'class=active' : null }}>
                                        <!--  HTML::link(url('/active-users', array(), array('class' => 'btn')))-->
                                         {{ HTML::link('/commodity/createsubchapter', '', array('class' => 'chaptsubSIcon'))}}
                                </span>
                            </div>
                            <div class="minsubIcon">
                                <span class="iconSide"{{ Request::is('commodity', 'commodity/commodities' . Auth::user()->id, 'commodity/commodities' . Auth::user()->id . '/edit') ? 'class=active' : null }}>
                                        <!--  HTML::link(url('/active-users', array(), array('class' => 'btn')))-->
                                         {{ HTML::link('/commodity/commodities', '', array('class' => 'commComSIcon'))}}
                                 </span>
                            </div>        
                        </div>
                    </li>
                    <li class="sidebarIcon">
                            <span class="iconSide"{{ Request::is('logs') ? 'class=active' : null }}>
                                   <!--  HTML::link(url('/active-users', array(), array('class' => 'btn')))-->
                                    {{ HTML::link('/logs', '', array('class' => 'logSIcon'))}}
                            </span>
                    </li>
                    <li class="sidebarIcon">
                            <span class="iconSide"{{ Request::is('routes') ? 'class=active' : null }}>
                                   <!--  HTML::link(url('/active-users', array(), array('class' => 'btn')))-->
                                    {{ HTML::link('/routes', '', array('class' => 'routeSIcon'))}}
                            </span>
                    </li>
                    <li class="sidebarIcon">
                            <span class="iconSide"{{ Request::is('active-users') ? 'class=active' : null }}>
                                   <!--  HTML::link(url('/active-users', array(), array('class' => 'btn')))-->
                                    {{ HTML::link('/active-users', '', array('class' => 'actuserSIcon'))}}
                            </span>
                    </li>
                   
                </ul>
                <!--Mininmize Sidemenu Start-->
            </aside>
            <!-- Js Added for sideMenu -->
            <script>
                $(document).ready(function(){
                    $('[data-toggle="tooltip"]').tooltip();   
                    $("#userMainIcon").click(function(){
                        $(".hiddenIcon").toggle();
                    });
                    $("#surchargeIcon").click(function(){
                        $(".hiddenIcon2").toggle();
                    });
                    $("#masterIcon").click(function(){
                        $(".hiddenIcon3").toggle();
                    });
                    $("#commodityIcon").click(function(){
                        $(".hiddenIcon4").toggle();
                    });
                    $("#minUser").click(function(){
                        $(".minhideIcon").toggle();
                    });
                    $("#minSurcharge").click(function(){
                        $(".minhideIcon2").toggle();
                    });
                    $("#minMaster").click(function(){
                        $(".minhideIcon3").toggle();
                    });
                    $("#minCommodity").click(function(){
                        $(".minhideIcon4").toggle();
                    });
                 });
             </script>