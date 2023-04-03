
$(document).ready(function(){
	$('.head-faq').click(function(){
		$(this).next().slideToggle(350);
		$(this).toggleClass('active');
		$(this).parent().toggleClass('active');
	});

	$('.btn-bar a').click(function(){
		$('.nav-mobile, html').addClass('open_menu');
	});
	$('.close-menu a').click(function(){
		$('.nav-mobile, html').removeClass('open_menu');
	});

	$(".content-menu .logo a").hover(function(){
	    var tab_id = $(this).attr('data-tab');

		$('.url-logo ul li').removeClass('active');

		$("#"+tab_id).addClass('active');
	});
})
