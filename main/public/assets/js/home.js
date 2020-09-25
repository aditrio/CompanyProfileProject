$(document).ready(function() {
	// horizontal line circle //
	var slideId;
	$('.circle').click(function(event) {
		
		$('.circle').find('div').removeClass('c-active');
		$('.circle').find('div').addClass('c-none');
		$(this).find('div').removeClass('c-none');
		$(this).find('div').addClass('c-active');
		slideId = $(this).find('div').attr('id');
		console.log(slideId);

		switch(slideId) {

			case "slide-1" : 
				setSlide('#slide-page-1');
				break;
			case "slide-2" : 
				setSlide('#slide-page-2');
				break;
			case "slide-3" : 
				setSlide('#slide-page-3');
				break

		}
	});



});

function setSlide(id) {
	$('.slide-page').attr('hidden', true);
	$(id).attr('hidden', false);
}