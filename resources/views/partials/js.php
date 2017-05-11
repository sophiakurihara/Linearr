<script>
$(document).ready(function() {
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
            // run the calendar with no data
            console.log("Error: " + events);
        }
    });
});
</script>