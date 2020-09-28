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

	// data to modal //

	$('.click-news').click(function(event) {
		$('#badges').empty();
		var id = $(this).data("id");
		var path = "./images-all/"
		var date = $(this).data('date');
		$.ajax({
				url: '/get/news/'+id,
				type: 'GET',
				
				datatype:'json',
				success: function(result) {
					
					var arr = result.tags.split(",");

					for (var i = arr.length - 1; i >= 0; i--) {
						$('#badges').append('<p class="badge badge-pill m-1 ">'+arr[i]+'</p>');
					}

					$('#img-modal').attr('src', path + result.imagePath);
					$('#text-modal').text(result.title);
					
					$('#date-modal').text(date);
					$('#content-modal').text(result.content);
					
					
				}
			});
		$('#view-news').modal('show');
	});



	$('.select-gallery').click(function(event) {
		$('#liked').removeClass('yes');
		var id = $(this).data('id');
		var path = "./images-all/";
		$('#form-liked').attr('action', '/like/'+id+'/product/');
		$.ajax({
				url: '/get/'+id+'/product',
				type: 'GET',
				datatype: 'json',
				
				success: function(result) {
					
					$('#img-gallery').attr('src', path + result[0].imagePath);
					$('#category-gallery').text(result[0].category);
					$('#desc-gallery').text(result[0].desc);
					$('#name-gallery').text(result[0].name);
					$('#like-gallery').text(result[0].like);
					$('#liked').data('id', result[0].id);
	
					
				},
				error : function(e) {
					console.log(e.responseText);
				}
			});
		$('#view-gallery').modal('show');
	});

	
	$('#liked').click(function(event) {
		var id = $(this).data('id');
		
		
		$(this).addClass('yes');

	});


});

function setSlide(id) {
	$('.slide-page').attr('hidden', true);
	$(id).attr('hidden', false);
}

