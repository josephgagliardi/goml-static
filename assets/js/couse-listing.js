"use strict";
$(document).ready(function () {
    var window_width = $(window).width(),
        $textSelect = $('#select-text'),
        $list = $('#list-catagories');

    $list.on('click', 'a.list-catagories__link', function () {
        var text = $(this).text();
        $textSelect.html(text);

        $list.find('a.list-catagories__link').removeClass('active');
        $(this).addClass('active');

        if (window_width <= 768) {
            $('#btn-list-catagories').trigger('click');
        }
    })

    $('body').on('click', function (e) {
        var $trigger = $(".list-catagories");

        if ($trigger !== e.target && !$trigger.has(e.target).length) {
            $('.list-catagories').collapse('hide');
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
