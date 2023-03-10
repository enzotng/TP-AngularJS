$(window).on("load", function () {
    $(".loader").fadeTo(1500, 1).fadeOut(300);
    setTimeout(function () {
        $("body").css("overflow", "visible");
    }, 1500);
});