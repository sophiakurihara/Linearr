    $(document).ready(function(){
        var displayTime = 200;
        setTimeout(function(){
            $('.loading').fadeIn(300);
        });

        setTimeout(function(){
            $('.loading').css("display", "none");
            $('.authorized').fadeIn(displayTime + 1000);

            setTimeout(function(){
                $('.content').fadeIn(400);
                $('.profile-content').fadeIn(400);
            }, 200);

            $('.profile-content-under').fadeIn(200);

            $('.left-under-jobs').fadeIn(400);

            $('.profile-content').fadeIn(400);

            $('.jobs-search-options-right').fadeIn(400);

            $('.footer').fadeIn(400);

        }, displayTime);
});