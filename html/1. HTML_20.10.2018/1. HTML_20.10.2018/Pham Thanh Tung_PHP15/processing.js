var state_phone = true;
var state_desktop = true;
$(document).ready(function() {


    $("button#bt_toggler").click(function() {
        $("#navbarContent").slideToggle("slow", "swing", function() {
            // Animation complete.
        })
    });

    $("button#bt_animate_phone").click(function() {
        var div = $("#bt_animate_phone");
        if (state_phone) {
            div.animate({ fontSize: '30px' }, "slow");
            div.html('Subscribed');
        } else {
            div.animate({ fontSize: '20px' }, "slow");
            div.html('Subscribe');
        }
        state_phone = !state_phone;
    });

    $("button#bt_animate_desktop").click(function() {
        var div = $("#bt_animate_desktop");
        if (state_desktop) {
            div.animate({ fontSize: '30px' }, "slow");
            div.html('Subscribed');
        } else {
            div.animate({ fontSize: '20px' }, "slow");
            div.html('Subscribe');
        }
        state_desktop = !state_desktop;
    });
});