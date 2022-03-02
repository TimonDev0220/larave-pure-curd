<!DOCTYPE html>
<html>
<head>
	<title>Laravel first</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" conent="ie=edge">
	<link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>
		@yield('content')
	<script src="{{ asset('js/app.js')}}" type="text/js"></script>
</body>
</html>