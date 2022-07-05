<!DOCTYPE html>
<html lang="en">
  

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jozidagh</title>
    <meta name="description" content="Subsco is a clean, modern, and creative design HTML Template Kits. it is designed for construction, building companies, renovation and remodeling contractor services or business who wants to showcase their work, services and professional way. This template has beautifull and unique design that will be best suited for your online web presence. It has 100% responsive design and tested on all major handheld devices.">
    <meta name="keywords" content="architecture, assembly, building, company, construction, constructor, contractor, development, engineering, industrial, infrastructure, manufacturing, mechanical, planning">
    <meta name="author" content="rudhisasmito.com">  
	
	<!-- ==============================================
	Favicons
	=============================================== -->
	<link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
	<link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png')}}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72.png')}}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114.png')}}">
	
	<!-- ==============================================
	CSS VENDOR
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/vendor/bootstrap.min.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/vendor/owl.carousel.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/vendor/owl.theme.default.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/vendor/magnific-popup.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/vendor/animate.min.css')}}">
	
	<link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/brands.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/solid.css')}}">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Spectral&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Karla:wght@300&display=swap" rel="stylesheet">
	


	<!-- ==============================================
	Custom Stylesheet
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}" />
	
    <script src="{{ asset('js/vendor/modernizr.min.js')}}"></script>

</head>

<body data-spy="scroll" data-target="#navbar-example">

	<!-- LOAD PAGE -->
	<div class="animationload">
		<div class="loader"></div>
	</div>
	
	<!-- BACK TO TOP SECTION -->
	<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

	@include('includes.header')
        @yield('content')
	@include('includes.footer')
	
	<!-- JS VENDOR -->
	<script src="{{ asset('js/vendor/jquery.min.js')}}"></script>
	<script src="{{ asset('js/vendor/bootstrap.min.js')}}"></script>
	<script src="{{ asset('js/vendor/owl.carousel.js')}}"></script>
	<script src="{{ asset('js/vendor/jquery.magnific-popup.min.js')}}"></script>

	<!-- SENDMAIL -->
	<script src="{{ asset('js/vendor/validator.min.js')}}"></script>
	<script src="{{ asset('js/vendor/form-scripts.js')}}"></script>

	<script src="{{ asset('js/script.js')}}"></script>
	
	
</body>


</html>