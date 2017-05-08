<!DOCTYPE html>
<html lang="en">
<head>
   <title>Linearr</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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

   <!-- Bootstrap JS -->
   <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>