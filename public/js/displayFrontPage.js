    $(document).ready(function(){
        var displayTime = 200;
        setTimeout(function(){
            $('.loading').fadeIn(300);
        });

        setTimeout(function(){
            $('.loading').css("display", "none");
            $('.authorized').fadeIn(displayTime + 1000);

            // $('.container').animate({
            //     "width":"1004px"
            // }, 500);

            setTimeout(function(){
                $('.login-main').fadeIn(400);
                $('.profile-content').fadeIn(400);
            }, 400);

            $('.profile-content-under').fadeIn(800);

            $('.left-content-under').animate({
                "width":"700px",
                "marginTop": "10px",
                "marginBottom": "14px"
            }, 800);

            $('.left-content-under').fadeIn(800);

            $('.profile-content').fadeIn(400);

            setTimeout(function(){
                $('.jobs-search-options-right').fadeIn(800);
                setTimeout(function(){
                    $('.footer').fadeIn(400);
                }, 400);
            }, 750);

        }, displayTime);
});