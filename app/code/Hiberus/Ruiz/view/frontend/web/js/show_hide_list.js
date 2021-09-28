require([
    'jquery',
], function ($) {
    $('#show_hide_list').click(function () {
        $('#list').toggle();
    })
});
define(['jquery'], function($)
{
    return function(config, element)
    {
        $(element).(config);
    };
});
