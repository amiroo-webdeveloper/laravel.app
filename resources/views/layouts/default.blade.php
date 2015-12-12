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

	<div class="container-fluid">
		<div id="main" role="main" class="row">
			@yield('content')
		</div>
	</div>

	<footer id="footer">
		@include('includes.footer')
	</footer>
	
</body>

</html>