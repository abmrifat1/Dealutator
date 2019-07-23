<!--
Au<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>@yield('title')</title>
    <!--css-->

</head>
<body>
<!--header-->
@include('front.includes.header')
<!--header-->
<!--banner-->
@yield('content')
<!--content-->
<!---footer--->
@include('front.includes.footer')
<!--copy-->

</body>
</html>