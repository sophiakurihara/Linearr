<!DOCTYPE html>
<html lang="en">
<head>
   <title>Linearr</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="/css/head.css">
    @yield ('additional_css')
</head>
<body>
	<div class="logo">

		<img class="linearr" src="/img/Linearr_logo_transparent.png">
	</div>

	<!-- place navbar here in master -->
  @yield('content')

  <!-- Bootstrap JS -->
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- jQuery JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
</body>
</html>