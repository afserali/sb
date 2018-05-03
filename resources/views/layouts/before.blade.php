<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@if (trim($__env->yieldContent('template_title')))@yield('template_title') | @endif {{ config('app.name', Lang::get('titles.app')) }}</title>
        <meta name="description" content="">
        <meta name="author" content="Afser Ali">
        <link rel="shortcut icon" href="/favicon.ico">
       <link type="text/css" rel="stylesheet" href="css/sbnew/signup.css" />
        <link rel="stylesheet" href="css/fontcss/font-awesome.css">   
        <script type="text/javascript" src="js/sbnew/jquery-2.1.0.min.js"></script>
	    <script type="text/javascript" src="js/sbnew/bootstrap.min.js"></script>
	    <script type="text/javascript" src="js/sbnew/jquery.validate.min.js"></script>
        <script type="text/javascript" src="js/sbnew/signup.js"></script> 
        

        {{-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --}}
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        {{-- Fonts --}}
        @yield('template_linked_fonts')

        {{-- Styles --}}
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

        @yield('template_linked_css')

       

        {{-- Scripts --}}
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>

       

        @yield('head')



       
    </head>
    <body>
        <div id="app">

           


            @yield('content')

        </div>

        {{-- Scripts --}}
        <script src="{{ mix('/js/app.js') }}"></script>

        @if(config('settings.googleMapsAPIStatus'))
            {!! HTML::script('//maps.googleapis.com/maps/api/js?key='.env("GOOGLEMAPS_API_KEY").'&libraries=places&dummy=.js', array('type' => 'text/javascript')) !!}
        @endif

        @yield('footer_scripts')


      

       
        <script src="/user/js/jquery-1.12.3.min.js"></script>
        <script src="/user/js/bootstrap.min.js"></script>
        <script src="/user/js/sidebar.js"></script>
        <script>
            $('#wrapper').sidebar();
        </script>
        <!-- Sidebar Menu end -->
        <script type="text/javascript">jssor_1_slider_init();</script>
        <script src="/user/js/ratesSection.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-82896238-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-82896238-1');
</script>

    </body>
</html>
