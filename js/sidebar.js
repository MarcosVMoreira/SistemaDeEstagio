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
        //$(".page-wrapper").removeClass("toggled");
        
        $("#sidebar").animate({
            left: '-250px'
        }, 40);
        
        $(".page-content").css("padding-left", 0);
        
        $("#show-sidebar").animate({
            left: '0px'
        }, 10);
    });

    $("#show-sidebar").click(function () {
        //$(".page-wrapper").addClass("toggled");
        
        $("#sidebar").animate({
            left: '0px'
        }, 40);
        
        $(".page-content").css("padding-left", "300px");
        
        $("#show-sidebar").animate({
            left: '-40px'
        }, 40);
    });

});
