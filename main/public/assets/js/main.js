
$(document).ready(function() {
	
	$('#btn-update-news').attr('disabled', true);
	$('#btn-delete-news').attr('disabled', true);
	$('#btn-app-tambah').attr('disabled', true);
	$('#btn-app-update').attr('disabled', true);
	$('#btn-app-delete').attr('disabled', true);

	var product_data = {};

	$("#table-news tr").click(function(){

		if ($(this).hasClass('selected')) {

			$(this).removeClass('selected');
			$('#btn-update-news').attr('disabled', true);
   		$('#btn-delete-news').attr('disabled', true);
		}else{

		  	$(this).addClass('selected').siblings().removeClass('selected');    
	   		var value=$(this).find('td:first').html();

	   		$('#btn-update-news').attr('disabled', false);
	   		$('#btn-delete-news').attr('disabled', false);

		}


	   	  
	});
	$('#btn-update-news').on('click', function(e){
	   var id =  $("#table-news tr.selected td:first").html();
	
	 
	   console.log(id);
	   $.ajax({
			url: '/get/news/'+id,
			type: 'GET',
			
			datatype:'json',
			success: function(result) {
				console.log(result.content);

				$('#title-update-news').val(result.title);
				$('#content-update-news').val(result.content);
		
				
				
			}
		});

	   $('#form-update-news').attr('action', '/news/update/' + id);
	   

	 
	  
	});


	$('#btn-delete-news').on('click', function(e) {
		var id =  $("#table-news tr.selected td:first").html();
		$('#form-delete-news').attr('action', '/news/delete/' + id);
	});


	$('#select-id').change(function(event) {
		console.log(this.value);
		var id = this.value;

		if(id != ""){

			$.ajax({
				url: '/get/news/'+id,
				type: 'GET',
				
				datatype:'json',
				success: function(result) {
					console.log(result.content);

					$('#title-headline-news').val(result.title);
					$('#content-headline-news').val(result.content);
			
					
					
				}
			});

			$('#form-headline-news').attr('action', '/news/headline/'+id);
		}  


	});
	
	$('.option-card').click(function() {
    
    $('.temp').remove();

	 	$(".choice").removeClass("choice");
		$(this).addClass("choice");

		var name = $(this).find(':input').val();
		console.log(name);
		$('#btn-app-tambah').attr('disabled', false);
		$('#btn-app-update').attr('disabled', false);
		$('#btn-app-delete').attr('disabled', false);


		$('#app-store-modal').find('.modal-header').text("Tambah " + name);
		$('#app-store-modal').find('#category').val(name);
		$('#app-store-modal').find('#form-product-store').attr('action', '/product/' + name + '/store');

		


		$.ajax({
			url: '/get/products/'+name,
			type: 'GET',
			
			datatype:'json',
			success: function(result) {
				console.log(result);
				
				for (var i = 0; i < result.length; i++) {
					
					var o = new Option(result[i].name, result[i].id);
					$(o).html(result[i].name);
					product_data[result[i].id] = result[i].desc;
					$(o).addClass('temp');
					$("#select-id-product").append(o);

				}

				console.log(product_data);
			}

		});
		
		$('#update-product-modal').find('.modal-header').text("Update " + name);
		$('#update-product-modal').find('#category').val(name);
		



	});

	$('#select-id-product').change(function(event) {

			var id = $(this).val();
			$('#update-product-modal').find('#form-product-update').attr('action', '/product/update/' + id);
			var text = $('#select-id-product option:selected').text();
			$('#name-prod').val(text);
			$('#desc-prod').val(product_data[id]);


	});

	$('#btn-app-update').click(function(event) {
		  $('#name-prod').val('');
			$('#desc-prod').val('');
	});

});