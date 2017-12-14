<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	@include('res.head')
</head>
<body>
	@yield('content')
	@include('res.foot')
</body>
</html>