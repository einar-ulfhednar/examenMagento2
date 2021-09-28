require([
    'jquery',
    'jquery/ui'
], function ($) {
    $('#open_list').click(function () {
        $('#list').slideToggle();
    })
});
