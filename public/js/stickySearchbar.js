$(document).ready(function() {
    // Cache selectors for faster performance.
    var $window = $(window),
        $mainMenuBar = $('.jobs-search-options-right'),
        $mainMenuBarAnchor = $('#mainMenuBarAnchor');

    // Run this on scroll events.
    $window.scroll(function() {
        var window_top = $window.scrollTop();
        var div_top = $mainMenuBarAnchor.offset().top;
        if (window_top > div_top) {
            $mainMenuBarAnchor.height(0);
            // Make the div sticky.
            $mainMenuBar.css("marginTop", "0px");
            $mainMenuBar.addClass('stick');
        }
        else {
            // Unstick the div.
            $mainMenuBar.removeClass('stick');
            $mainMenuBarAnchor.height(0);
        }
    });

    function placeOnRightHandEdgeOfElement(toolbar, pageElement) {
    $(toolbar).css("right", $(window).scrollLeft() + $(window).width()
    - $(pageElement).offset().left
    - parseInt($(pageElement).css("borderLeftWidth"),10)
    - $(pageElement).width() + "px");
    }
        $(window).resize(function() {
            placeOnRightHandEdgeOfElement(".jobs-search-options-right", ".container");
        });
        $(window).scroll(function () { 
            placeOnRightHandEdgeOfElement(".jobs-search-options-right", ".container");
        });
        $(".jobs-search-options-right").resize();
});