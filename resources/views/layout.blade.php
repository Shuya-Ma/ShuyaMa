<!DOCTYPE html>

<html>

<head>

    <title>@yield("title")</title>
    <link rel="icon" href="{!! asset('/assets/icon/favicon.ico') !!}"/>
    <link rel="stylesheet" href="/css/layout.css">

    @yield("styles")

</head>

<body>

		@include('layouts.nav')
		<div class="body_wrapper">
			@yield('content')
		</div>

      	@include('layouts.footer')



</body>

</html>
