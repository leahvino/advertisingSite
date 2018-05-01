$(function() {

    "use strict";

    var catToggle = $("[data-toggle=cat]");

    catToggle.on("click", function() {
        var $this = $(this),
            catList = $this.data("target");

        $(catList).slideToggle();
        $this.toggleClass("active");
    });


    /* Remove style attribute on resize */
    $(window).on("resize", function() {
        $(".cat__list").removeAttr("style");
    });

});
