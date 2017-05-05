<!DOCTYPE html>
<html lang="en">
<head>
   <title>Linearr</title>

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link rel="stylesheet" href="/css/head.css">
    @yield ('additional_css')
</head>
<body>
	<div class="navBar">
		<div class="logo"><h1>LOGO</h1></div>
	</div>

	<!-- place navbar here in master -->
   @yield('content')
</body>
</html>