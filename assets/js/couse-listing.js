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

	$('#list').click(function (event) {
		event.preventDefault();
		$('#courses .courses__item').addClass('list-view');
		$('#courses .courses__item').removeClass('grid-group-item');
		$('.col-equal').matchHeight({
			remove: true
		});
	});
	$('#grid').click(function (event) {
		event.preventDefault();
		$('#courses .courses__item').removeClass('list-view');
		$('#courses .courses__item').addClass('grid-group-item');
		$('.col-equal').matchHeight({
			remove: false
		});
	});



});
