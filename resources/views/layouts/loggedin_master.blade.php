<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Linearr</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
        <link href='/css/fullcalendar.min.css' rel='stylesheet' />
        <link href='/css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
        <link rel="stylesheet" href="/css/head.css">
        <link rel="stylesheet" href="/css/footer.css">
        @yield ('additional_css')
</head>
<body>
	<div class="logo">
        <a href="/">
		    <img class="linearr" src="/img/Linearr_logo_transparent.png">
        </a>
	</div>
        <!-- place navbar here in master -->
        @yield('loggedin_content')

        @include('partials.below_banner')

        <!-- Bootstrap JS -->
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- jQuery JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>

        <script src='/js/lib/moment.min.js'></script>
        <script src='/js/lib/jquery.min.js'></script>
        <script src='/js/fullcalendar.min.js'></script>

  <script src='/js/lib/moment.min.js'></script>
  <script src='/js/lib/jquery.min.js'></script>
  <script src='/js/fullcalendar.min.js'></script>

  @include('partials.js')

</body>
</html>