//= ../../../../bower_components/slick-carousel/slick/slick.js

$(function() {

    "use strict";

    /**
    * Slick.js
    * Docs: https://github.com/kenwheeler/slick
    */

    var ads_gallery = $("#ads_gallery"),
        ads_gallery_thumbs = $("#ads_thumbs");

    if(ads_gallery.length > 0) {
        ads_gallery.slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 4000,
            dots: false,
            asNavFor: '#ads_thumbs'
        });

        ads_gallery_thumbs.slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            dots: false,
            arrows: true,
            asNavFor: '#ads_gallery',
            focusOnSelect: true,
            swipeToSlide: true,
            vertical: true,
            verticalSwiping: true,
            responsive: [
                {
                  breakpoint: 1200,
                  settings: {
                      slidesToShow: 3,
                  }
                }
            ]
        });
    }

});
