"use strict";
$(document).ready(function () {
    var window_width = $(window).width(),
        $textSelect = $('#select-text'),
        $list = $('#list-categories');

    $list.on('click', 'a.list-categories__link', function () {
        var text = $(this).text();
        $textSelect.html(text);

        $list.find('a.list-categories__link').removeClass('active');
        $(this).addClass('active');

        if (window_width <= 768) {
            $('#btn-list-categories').trigger('click');
        }
    })

    $('body').on('click', function (e) {
        var $trigger = $(".list-categories");

        if ($trigger !== e.target && !$trigger.has(e.target).length) {
            $('.list-categories').collapse('hide');
            $('.collapse').collapse('hide');
        }
    });

    $('.view-gird').on('click', '#view-course-list', function (e) {
        $('.courses-by-list').fadeIn('slow');
        $('.courses-by-gird').fadeOut('slow');
    });

    $('.view-gird').on('click', '#view-course-gird', function (e) {
        $('.courses-by-list').fadeOut('slow');
        $('.courses-by-gird').fadeIn('slow');
    });
})
