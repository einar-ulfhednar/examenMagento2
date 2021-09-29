define(['jquery'], function ($) {
    return function (element) {
        $(element).click(function () {
            alert('La nota más alta de todos los alumnos es: ' + highestNote);
        })
    };
});
