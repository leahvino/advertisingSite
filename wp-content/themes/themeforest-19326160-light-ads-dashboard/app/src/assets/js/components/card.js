//= ../../../../bower_components/card/dist/jquery.card.js

$(function() {

    "use strict";

    /**
    * Card
    * Docs: https://github.com/jessepollak/card
    */

    $('#card-form').card({
        container: '#card-form-container',
        formSelectors: {
            numberInput: '#card_number',
            expiryInput: '#card_expiry',
            cvcInput: '#card_cvc',
            nameInput: '#card_name'
        },
    });

});
