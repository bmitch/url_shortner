<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<link rel="stylesheet" href="/css/style.css">
</head>

<body>
	@if (Session::has('flash_message'))
		<div class="alert alert-info alert-dismissable">

			<button type="button" class="close" data-dismiss="alert">&times;</button>
			{{ Session::get('flash_message') }}
		
		</div>
	@endif
	<div class="container">
		@yield('content')
	</div>
	<script src="http://code.jquery.com/jquery-js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>

</html>