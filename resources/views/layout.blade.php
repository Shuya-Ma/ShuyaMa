<!DOCTYPE html>

<html>

<head>

    <title>@yield("title")</title>
    <link rel="icon" href="{!! asset('/assets/icon/icon.ico') !!}"/>
    <link rel="stylesheet" href="/css/layout.css">

    @yield("styles")

</head>

<body>





		@include('layouts.nav')




        @yield('content')




      	@include('layouts.footer')



</body>

</html>
