<!DOCTYPE html>

<html>

<head>

    <title>@yield("title")</title>
    <link rel="icon" href="{!! asset('/assets/icon/favicon.ico') !!}"/>
    <link rel="stylesheet" href="/css/layout.css">

    @yield("styles")

<!--     <style type="text/css" media="screen">
    	#spinner {
    		position: fixed;
    		top: 50%;
    		left: 50%;
    	}
    </style> -->

</head>

<body>

		@include('layouts.nav')
<!-- 
		<div id="spinner" style="display: none;">
			<img id="img-spinner" src="spinner.gif" alt="Loading"/>
		</div> -->

		<div class="body_wrapper">
			@yield('content')
		</div>

      	@include('layouts.footer')



</body>

</html>
