$(function(){
    $("#inputTags input").on({
        focusout : function() {
        var txt = this.value.replace(/[^a-z0-9\+\-\.\#]/ig,''); // allowed characters
            if(txt) $("<span/>", {
                text:txt.toLowerCase() + " ",
                insertBefore:this
            });
        this.value = "";
        },
        keyup : function(e) {
            // if: comma|enter (delimit more keyCodes with | pipe)
            if(/(188|13)/.test(e.which)) {
                $(this).focusout();
            }
            $("#submit-button").click(function(){
                $("#skills").val($("#inputTags span").text());

                // var spanTags = document.getElementsByTagName('span');
                // console.log(spanTags[0].innerHTML);


                
                // var tags = $("#skills").val();
                // var tagsArray = tags.split(" ");
                // tagsArray.pop();
                // for(var i = 0; i < tagsArray.length; i++) {
                //     $("#inputTags span").text(tagsArray[i]);
                //     $("#inputTags span").addClass("tag-" + i);
                //     console.log(tagsArray.length);
                //     console.log(tagsArray[i]);
                // }
                // console.log(tagsArray);
            });
        }
    });
    $('#inputTags').on('click', 'span', function() {
        $(this).remove();
    });

    $('.form-register').on('keyup keypress', function(e) {
        var keyCode = e.keyCode || e.which;
        if (keyCode === 13) { 
            e.preventDefault();
            return false;
        }
    });
});
