(function ($) {
    "use strict";

    var gateway = 'other';
    $('body').on('change', 'input[name="gateway"]', function (e) {
        e.preventDefault();

        $('button#paymentSubmit').removeAttr('disabled');

        gateway = $(this).attr('data-class');
    });

    $('body').on('click', '#paymentSubmit', function (e) {
        e.preventDefault();

        $(this).addClass('loadingbar primary').prop('disabled', true);


    });
})(jQuery);
