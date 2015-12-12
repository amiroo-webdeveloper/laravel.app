<!doctype html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

<head>
	@include('includes.head')
</head>

<body role="document">
	
	<header id="header">
		@include('includes.header')
	</header>

	<div id="main-wrapper" class="{{ config('config.container') }}">
		<div id="main" role="main" class="row flex-container">

			<div id="sidebar" class="{{ config('config.sidebar-width') }}">
	            @include('includes.sidebar')
	        </div>
			
			<div id="content" class="{{ config('config.main-width') }}">
	            @yield('content')
	        </div>

		</div>
	</div>

	<footer id="footer">
		@include('includes.footer')
	</footer>
	
</body>

</html>