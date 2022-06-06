<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title>App Name - @yield('title')</title>
	<meta charset="UTF-8"> 
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body bgcolor="#f0f3f5"> 
	<div id="page">
		@yield('content')
	</div> 
</body>
</html>