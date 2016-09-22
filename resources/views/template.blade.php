<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel App</title>

	{{-- Test Comment --}}
	<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap_3_3_7/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

	<!--[if lt IE 9]>
      <script src="{{ asset('js/html5shiv_3_7_2.min.js') }}"></script>
      <script src="{{ asset('js/respond_1_4_2.min.js') }}"></script>
    <![endif]-->

</head>
<body>
	<div class="container">
		@include(@navbar)
		@yield('main')
	</div>
	
	@yield('footer')

	<script src="{{ asset('js/jquery_2_2_1.min.js') }}"></script>
    <script src="{{ asset('bootstrap_3_3_7/js/bootstrap.min.js') }}"></script>
</body>
</html>