<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vigley</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/css/head.css">
        <link rel="stylesheet" href="/css/footer.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
        .footer {
            height: 170px;
            padding-bottom: 60px;
            width: 100%;
            clear:left;
            margin-top: 200px;
            background-color: black;
            position: fixed; 
            bottom: 0;
            left: 0;
            right: 0;
        }
        </style>
        @yield ('additional_css')
</head>
<body>
	<div class="header">
        <div class="vigleyLogoContainer">
            <a href="{{ url('/') }}"><div class="vigleyLogo"></div></a>
        </div>  
	</div>

	<!-- place navbar here in master -->
  @yield('content')

  @include('partials.below_banner')

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <!-- Bootstrap JS -->
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- jQuery JS -->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    <script>
    var footerResize = function() {
        $('.footer').css('position', $("body").height() + $("#footer").innerHeight() > $(window).height() ? "inherit" : "fixed");
    };
    $(window).resize(footerResize).ready(footerResize);
    </script>
</body>
</html>