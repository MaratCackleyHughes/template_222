$(document).ready(function () {
  $('#simple-menu').sidr({
	timing: 'ease-in-out',
	side: 'right',
	speed: 500
  });
});

$(window).resize(function () {
  $.sidr('close', 'sidr');
});

$('.smooth').click(function () {
  var target = $(this.hash);

  $.sidr('close', 'sidr');
  $('html,body').animate({
	scrollTop: target.offset().top
  }, 800);
});