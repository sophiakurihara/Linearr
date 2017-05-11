<!DOCTYPE html>
<html lang="en">
<head>
    <title>Linearr</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="/css/head.css">
        <link rel="stylesheet" href="/css/footer.css">
        <!-- <script src="/js/jquery/jquery-ui.js"></script> -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @yield ('additional_css')
</head>
<body>
	<div class="logo">
        <a href="/">
		    <img class="linearr" src="/img/Linearr_logo_transparent.png">
        </a>
	</div>

	<!-- place navbar here in master -->
  @yield('content')

  @include('partials.below_banner')

  <!-- Bootstrap JS -->
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- jQuery JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

</body>
</html>