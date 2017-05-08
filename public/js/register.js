
$(document).ready(function(){

    $('.loading').fadeIn(300);
    $('.loading').fadeOut(200);

    setTimeout(function(){
        $(".content-main-right").fadeIn(400);
        $(".content-main-left").fadeIn(400);
    }, 501);

    // <!--var inputName = "<?php echo $keys ?>";
    // var array = inputName.split(",");

    // for(var i = 0; i < array.length; i++) {
    //     if(array[i] === 'username') {
    //         $("#uname").css("borderBottom", "2px solid red");
    //     }
    //     if(array[i] === 'password') {
    //         $("#pword").css("borderBottom", "2px solid red");
    //     }
    //     if(array[i] === 'email') {
    //         $("#email").css("borderBottom", "2px solid red");
    //     }
    //     if(array[i] === 'firstname') {
    //         $("#fname").css("borderBottom", "2px solid red");
    //     }
    //     if(array[i] === 'lastname') {
    //         $("#lname").css("borderBottom", "2px solid red");
    //     }
    // }-->
});
