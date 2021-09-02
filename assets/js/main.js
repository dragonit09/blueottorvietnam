jQuery(document).ready(function($) {
    var windowOn = jQuery(window);

    /* Preloading */
    windowOn.on('load', function() {
        jQuery("#loading").fadeOut(500);
    });

    var path = document.querySelector(".progress-wrap path");
    var length = path.getTotalLength();

    path.style.transition = path.style.WebkitTransition = "none";

    path.style.strokeDasharray = length + " " + length;
    path.style.strokeDashoffset = length;
    path.getBoundingClientRect();

    path.style.transition = path.style.WebkitTransition = "stroke-dashoffset 10ms linear";

    var set = function() {
        var xAngle = $(window).scrollTop();
        /** @type {number} */
        var con = $(document).height() - $(window).height();
        /** @type {number} */
        var offset = length - xAngle * length / con;
        /** @type {number} */
        path.style.strokeDashoffset = offset;
    };


    windowOn.on("scroll", function() {
        set();

        jQuery(this).scrollTop() > 50 ? jQuery(".progress-wrap").addClass("active-progress") : jQuery(".progress-wrap").removeClass("active-progress")
    })

    jQuery(".progress-wrap").on("click", function(s) { return s.preventDefault(), jQuery("html, body").animate({ scrollTop: 0 }, 550), !1 })




    function mobileNavMenu() {
        if (windowOn.width() < 1024) {
            let inputCheck = jQuery("#mobile-menu-check"),
                navbar = jQuery("#navbar");
            if (inputCheck.hasClass("running")) return;
            if (inputCheck.is(":checked")) {
                navbar.removeAttr("style").addClass("show")
                jQuery("body").css({ "overflow": "hidden" })
                inputCheck.removeClass("running");
            } else {
                navbar.removeClass("show");
                jQuery("body").css({ "overflow": "unset" })

                setTimeout(function() {
                    navbar.css({ "display": "none" })
                    inputCheck.removeClass("running");
                }, 600);

            }
        } else {
            jQuery("#navbar").removeAttr("style");
        }

    }
    jQuery("#header").on('change', '#mobile-menu-check:not(.running)', function(e) {
        e.preventDefault();
        mobileNavMenu();
    })
    mobileNavMenu()
    setTimeout(function() {
        jQuery("#navbar").addClass("animation");
    }, 3000);

    windowOn.on('resize', function() {
        mobileNavMenu();
    });

    new WOW().init();
});