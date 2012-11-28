(function($){

	
	$('ul.menu > li > ul').hide();
	
	$('.menu li:first').addClass('active');
	$('.menu a').click(function() {
		
		if(!$(this).is('ul.menu > li > ul a')) {
			$('.open').slideUp();
		}
		$('.open').removeClass('open');
			
			
		$('.menu li').removeClass('active');
		$('.menu li').removeClass('border');
		$(this).parent('li').addClass('active');
		
		parents = $(this).parents('li');
		parents.addClass('border');
		
		
		parents.find('ul').slideDown().addClass('open');
		
		
		href = $(this).attr('href').replace('#', "");;
		ajaxLoad(href);
	});
	
	
	$('ul.menu > li > ul > li.active').parent('li').addClass('active');

	
	
	function ajaxLoad(url){
        $.get('/ElegantWork/docs/' + url + '.php', {}, function(data){
            $('#page').html(data);
        });
    }
    
})(jQuery);