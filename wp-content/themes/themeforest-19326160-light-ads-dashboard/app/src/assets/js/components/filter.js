$(function() {

    "use strict";

    var filter = $("#filter");

    $("#js-show-filter").on("click", function(e) {
        e.preventDefault();
        filter.toggleClass("active");
    });

    $("#filter_close").on("click", function(e) {
        e.preventDefault();
        filter.removeClass("active");
    });

});
