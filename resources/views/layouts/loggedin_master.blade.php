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
        @yield ('additional_css_tables')
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
        <div class="userLeftControllPanel-sub-sections sub-section-text"><a id="createEvent"href="create-event">Create Event</a></div>
        <div id="contacts" class="userLeftControllPanel-sub-sections sub-section-text"><a href="/contacts">Contacts</a></div>
        <div class="userLeftControllPanel-sub-sections sub-section-text"><a href="logout">Logout</a></div>
        
        <a id="settings "href="settings"><div class="settings"></div></a>
    </div>

    <div class="loading"><img src="../../img/loading-large.gif" width="40"></div>

    @yield('loggedin_content')

	<script src="/js/jquery/10.8.3/jquery.min.js" type="text/javascript"></script>
	<script src="/js/jquery/jquery-3.2.0.min.js" type="text/javascript"></script>

    <script>
    $(document).ready(function(){
        setTimeout(function(){
            $('.loading').fadeOut(200);
        }, 300);

        setTimeout(function(){
            $('.x').fadeIn(600);
            $("#calendarContainer").fadeIn(600);
            $("#calendarContainer").css("background-color", "white");
        }, 500);

        // Speed up calls to hasOwnProperty
        var hasOwnProperty = Object.prototype.hasOwnProperty;

        function isEmpty(obj) {

            // null and undefined are "empty"
            if (obj == null) return true;

            // Assume if it has a length property with a non-zero value
            // that that property is correct.
            if (obj.length > 0)    return false;
            if (obj.length === 0)  return true;

            // If it isn't an object at this point
            // it is empty, but it can't be anything *but* empty
            // Is it empty?  Depends on your application.
            if (typeof obj !== "object") return true;

            // Otherwise, does it have any properties of its own?
            // Note that this doesn't handle
            // toString and valueOf enumeration bugs in IE < 9
            for (var key in obj) {
                if (hasOwnProperty.call(obj, key)) return false;
            }

            return true;
        }

        setTimeout(function(){
            $.ajax({
                url: '/get-calendar-events',
                method: "GET",
                dataType: "JSON",
                success: function(events) {
                        var array = [];
                        for(var i = 0; i < events.length; i++) {
                            array.push({
                                id: events[i].id,
                                title: events[i].title,
                                start: events[i].date_of_event
                            });
                        }

                        if(!isEmpty(events[0].title)) {
                            $('#calendar').fullCalendar({
                                defaultDate: '2017-05-12',
                                editable: true,
                                eventLimit: true, // allow "more" link when too many events
                                events: array
                            });
                        } else {
                            $('#calendar').fullCalendar({
                                defaultDate: '2017-05-12',
                                editable: true,
                                eventLimit: true // allow "more" link when too many events
                            });
                        }
                    // run the calendar - with populated data
                }, error: function(events) {
                    console.log("Error");
                }
            });
        }, 480);
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
						"width":"99%"
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
		$(document).ready(function()
		{
			$("a#createEvent").click(function(e){
				e.preventDefault();
				$("#myModal").css("display", "block");
			});
			$(".close").click(function(){
				$("#myModal").css("display", "none");
			});
		});
	</script>

    @yield('js')

</body>
</html>