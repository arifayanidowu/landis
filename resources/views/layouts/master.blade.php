<!DOCTYPE html>
<html lang="en">
<head>
  	<meta charset="utf-8">
    <title>LANDIS Training, Education and Web Technologies | @yield('title')</title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Landis, School for web development and Training">
    <meta name="keywords" content="Landis,Training,Web Development,School">
    <meta name="author" content="Arifayan Idowu Olatubosun">
    <!-- Favicons-->
    <link rel="shortcut icon" href="{{ asset('img/favicons/favicon.ico') }}" type="image/x-icon"/>
    <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('img/favicons/apple-touch-icon-57x57-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="{{ asset('img/favicons/apple-touch-icon-72x72-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('img/favicons/apple-touch-icon-114x114-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('img/favicons/apple-touch-icon-144x144-precomposed.png') }}">
    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link href="{{asset('libs/settings.css')}}" media="screen" rel="stylesheet">
    <!-- CSS -->
    <link href="{{ asset('libs/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/superfish.css')}}" rel="stylesheet">
    <link href="{{ asset('libs/style.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/fontello.css') }}" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>

    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
    <!--[if lt IE 9]>
      <script src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="http://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
      <script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-11097556-8']);
		  _gaq.push(['_trackPageview']);
		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
  </head>
  <body>
    @include('inc.topnav')
    @include('inc.navbar')
    <div>
      @yield('content')
    </div>
    @include('inc.footer')

<script src="{{asset('js/app.js')}}"></script>
<script type="text/javascript" src="{{ asset('libs/js/jquery.themepunch.plugins.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('libs/js/jquery.themepunch.revolution.min.js') }}"></script>
<script type="text/javascript">
		var revapi;
		jQuery(document).ready(function() {
			   revapi = jQuery('.tp-banner').revolution(
				{
					delay:9000,
					startwidth:1700,
					startheight:600,
					hideThumbs:true,
					navigationType:"none",
					fullWidth:"on",
					forceFullWidth:"on"
				});
		})
	</script>
<!-- OTHER JS -->
      <script src="{{ asset('libs/js/superfish.js') }}"></script>
      <script src="{{ asset('libs/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('libs/js/retina.min.js') }}"></script>
      <script src="{{ asset('libs/js/validate.js') }}"></script>
      <script src="{{ asset('libs/js/jquery.placeholder.js') }}"></script>
      <script src="{{ asset('libs/js/functions.js') }}"></script>
      <script src="{{ asset('libs/js/classie.js') }}"></script>
      <script src="{{ asset('libs/js/uisearch.js') }}"></script>
      <script>new UISearch( document.getElementById( 'sb-search' ) );</script>

      @yield('script')
  </body>
</html>
