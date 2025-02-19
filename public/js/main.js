(function ($) {
    "use strict";
    function mobileMenuHide() {
        var windowWidth = $(window).width(),
            siteHeader = $("#site_header");
        if (windowWidth < 1025) {
            siteHeader.addClass("mobile-menu-hide");
            $(".menu-toggle").removeClass("open");
            setTimeout(function () {
                siteHeader.addClass("animate");
            }, 500);
        } else {
            siteHeader.removeClass("animate");
        }
    }
    $(window)
        .on("load", function () {
            $(".preloader").fadeOut(800, "linear");
            var ptPage = $(".animated-sections");
            if (ptPage[0]) {
                PageTransitions.init({ menu: "ul.main-menu" });
            }
        })
    $(document).on("ready", function () {
   
        $(".menu-toggle").on("click", function () {
            $("#site_header").addClass("animate");
            $("#site_header").toggleClass("mobile-menu-hide");
            $(".menu-toggle").toggleClass("open");
        });
        $(".main-menu").on("click", "a", function (e) {
            mobileMenuHide();
        });
        $(".sidebar-toggle").on("click", function () {
            $("#blog-sidebar").toggleClass("open");
        });
        $('#designation').carousel({
            interval: 3000
          });
    });
})(jQuery);
