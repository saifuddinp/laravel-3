<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Deshboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="{{asset('public/BackEnd')}}/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="{{asset('public/BackEnd')}}/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="{{asset('public/BackEnd')}}/css/lines.css" rel='stylesheet' type='text/css' />
<link href="{{asset('public/BackEnd')}}/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="{{asset('public/BackEnd')}}/js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="{{asset('public/BackEnd')}}/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="{{asset('public/BackEnd')}}/js/metisMenu.min.js"></script>
<script src="{{asset('public/BackEnd')}}/js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="{{asset('public/BackEnd')}}/js/d3.v3.js"></script>
<script src="{{asset('public/BackEnd')}}/js/rickshaw.js"></script>
</head>
<body>
@include('BackEnd.partials.header')
@include('BackEnd.partials.sidebar')
        <div id="page-wrapper" class="scrollbar">
       @yield('maincontent')

    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    
    @include('BackEnd.partials.footer')
</body>
</html>
