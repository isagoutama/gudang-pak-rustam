
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	</head>
	<body>
		@include('layouts.navbar')
		<div class="container mt-5">
			@yield('content')
		</div>

		<script src="{{asset('js/jquery.slim.min.js')}}" charset="utf-8"></script>
		<script src="{{asset('js/popper.min.js')}}" charset="utf-8"></script>
		<script src="{{asset('js/bootstrap.min.js')}}" charset="utf-8"></script>
	</body>
</html>
