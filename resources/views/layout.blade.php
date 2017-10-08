<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>GAMEchanging</title>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name = "viewport" content = "width = device-width">
		<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#1057a1">
		<meta name="theme-color" content="#c0c0c0">
	</head>
	<body>
	@yield('content')
	<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
	</body>
</html>
