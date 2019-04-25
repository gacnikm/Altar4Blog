jQuery(function($){
	$('.search-button').click(function(){
		$(this).next('.search-form').toggleClass('show-search');
		$('.main-navigation').toggleClass('hide-nav');
	});

	$('.menu-button').click(function(){
		$(this).find('.hamburger').toggleClass('is-active');
		$(this).next('.main-navigation').find('#primary-menu').slideToggle();
	});
});