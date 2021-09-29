define(['jquery'], function ($) {
    return function (config, element) {
        $(config).click(function () {
            $(element).slideToggle();
        })
    };
});
