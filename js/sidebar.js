$(document).ready(function () {

    $(".sidebar-dropdown > a").click(function () {
        $(".sidebar-submenu").slideUp(200);
        if (
            $(this)
            .parent()
            .hasClass("active")
        ) {
            $(".sidebar-dropdown").removeClass("active");
            $(this)
                .parent()
                .removeClass("active");
        } else {
            $(".sidebar-dropdown").removeClass("active");
            $(this)
                .next(".sidebar-submenu")
                .slideDown(200);
            $(this)
                .parent()
                .addClass("active");
        }
    });

    $("#close-sidebar").click(function () {
        fechaSideBar();
    });

    $("#show-sidebar").click(function () {
        //$(".page-wrapper").addClass("toggled");

        $("#sidebar").animate({
            left: '0px'
        }, 40);

        $(".page-content").css("padding-left", "250px");

        $("#show-sidebar").animate({
            left: '-40px'
        }, 40);
    });

    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        fechaSideBar();
    }

    function fechaSideBar() {
        $("#sidebar").animate({
            left: '-300px'
        }, 40);

        $(".page-content").css("padding-left", 0);

        $("#show-sidebar").animate({
            left: '0px'
        }, 10);
    }

});
