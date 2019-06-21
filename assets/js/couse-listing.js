"use strict";

$('#list').click(function (event) {
  event.preventDefault();
  $('.ais-Hits-list .ais-Hits-item').addClass('list-view');
});
$('#grid').click(function (event) {
  event.preventDefault();
  $('.ais-Hits-list .ais-Hits-item').removeClass('list-view');
});
