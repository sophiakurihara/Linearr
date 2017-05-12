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
        <a href="/">Vigley</a>
	</div>
        

    <div class="userLeftControllPanel-arrow"></div>

    <div class="userLeftControllPanel">
        <div class="x">←</div>
        <div id="myEvents" class="userLeftControllPanel-sub-sections firstControlPanel-sub-section sub-section-text"><a href="/">My Events</a></div>
        <div id="createEvent" class="userLeftControllPanel-sub-sections sub-section-text"><a href="create-event">Create Event</a></div>
        <div id="contacts" class="userLeftControllPanel-sub-sections sub-section-text"> Contacts</div>
        <div id="editProfile" class="userLeftControllPanel-sub-sections sub-section-text">Edit Profile</div>
        <div class="userLeftControllPanel-sub-sections sub-section-text"><a href="logout">Logout</a></div>
        
        <div class="settings"></div>
    </div>

	<div id="calendarContainer">
		<div id="calendar"></div>
	</div>

    @yield('loggedin_content')

	<script src="/js/jquery/10.8.3/jquery.min.js" type="text/javascript"></script>
	<script src="/js/jquery/jquery-3.2.0.min.js" type="text/javascript"></script>

    <script>
    $(document).ready(function(){ 
        $("#calendarContainer").fadeIn(400);
    });
    </script>
    @yield('js')

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


  @include('partials.js')

</body>
</html>