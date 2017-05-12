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

        <div class="navbar-profile-picture">
            <img src="../../img/default.png" width="50"><span class="navbar-phone-number">818-793-9268</span>
        </div>

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

	<script>
		$(document).ready(function(){

			$('.x').click(function(){
				$('.userLeftControllPanel-sub-sections').addClass('hide');
				$('.settings').addClass('hide');

				$('.userLeftControllPanel').animate({
					"width":"1px",
					"padding":"0",
					"margin":"0"
				}, 400);
				
				setTimeout(function(){
					$('.userLeftControllPanel').fadeOut(100);
				}, 300);

				setTimeout(function(){
					$('.userLeftControllPanel-arrow').fadeIn(100);
					$('.userLeftControllPanel-arrow').animate({
						"width":"10px"
					}, 200);
				}, 300);

				setTimeout(function(){
					$('#calendarContainer').animate({
						"width":"99.4%"
					}, 400);
				}, 400);
			});

			$('.userLeftControllPanel-arrow').click(function(){
				setTimeout(function(){
					$('#calendarContainer').animate({
						"width":"80%"
					}, 400);		
				}, 210);

				$('.userLeftControllPanel-arrow').animate({
					"width":"1px"
				}, 400);


				setTimeout(function(){
					$('.userLeftControllPanel-arrow').fadeOut(10);
					//$('.userLeftControllPanel-arrow').css("background-color", "#114b5f");
				}, 404);

				setTimeout(function(){

					$('.userLeftControllPanel').fadeIn(100);
					$('.userLeftControllPanel').animate({
						"width":"20%",
						"padding":"2.5%"
					}, 300);

					setTimeout(function(){
						$('.userLeftControllPanel-sub-sections').fadeIn(200).removeClass('hide');
						$('.settings').fadeIn(200).removeClass('hide');
					}, 310);
				}, 410);
			});

		});
	</script>

	<script>
		$(document).ready(function(){
			var clicked
			for(let i = 0; i <= 31; i++)
			{
				$(".myBtn" + i).click(function(){
					$("#myModal").css("display", "block");
				});
				$(".close").click(function(){
					$("#myModal").css("display", "none");
				});
			}
		});
	</script>

    @yield('js')

</body>
</html>