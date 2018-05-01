$(function() {

    "use strict";

    var bannerTitle = $("[data-banner=title]"),
        bannerText = $("[data-banner=text]"),
        bannerSum;

    bannerTitle.on("input", function() {
        $("#js-banner-title").text($(this).val());
    });

    bannerText.on("input", function() {
        $("#js-banner-text").text($(this).val());
    });

    $("#count").on("change", function() {
        countBannerSum()
    });

    countBannerSum();

    function countBannerSum() {
        bannerSum = ( $("#count").val() / 1000 ) * 0.1;
        $("#js-banner-sum").text(bannerSum);
    }

});


