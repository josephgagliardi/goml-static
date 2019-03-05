"use strict";
$(document).ready(function () {
    var window_width = $(window).width();
    $('.list-sort__item').on('click', function () {
        var text = $(this).find('.list-sort__link').text();
        $(this).parents('.dropdown').find('.select-sort').text(text);
    });
})

$(document).ready(function () {
    var window_width = $(window).width(),
        $textSelect = $('#select-text'),
        $list = $('#list-catagories');

    $list.on('click', 'a.list-catagories__link', function () {
        var text = $(this).text();
        $textSelect.html(text);

        $list.find('a.list-catagories__link').removeClass('active');
        $(this).addClass('active');

    })

    $('body').on('click', function (e) {
        var $trigger = $(".list-catagories");

        if ($trigger !== e.target && !$trigger.has(e.target).length) {
            $('.list-catagories').collapse('hide');
            $('.collapse').collapse('hide');
        }
    });

})
