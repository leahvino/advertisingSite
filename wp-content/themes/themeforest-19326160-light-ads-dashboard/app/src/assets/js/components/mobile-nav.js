$(function() {

    "use strict";

    $("#js-nav-burger").on("click", function(e) {
        e.preventDefault();

        var $this = $(this);

        $(this).toggleClass("active");
        $("#js-nav").toggleClass("active");
    });

});
