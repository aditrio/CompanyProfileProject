var tags = {};
var id = 0;
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

	$('#btn-store-news').on('click',function(event) {

		$('#title-modal-news').text('Tambah Berita');
	  $('#method_field').val('POST');

	});

	$('#btn-update-news').on('click', function(e){
	   var idf =  $("#table-news tr.selected td:first").html();
		
		$('#title-modal-news').text('Edit Berita');
	 
	   console.log(idf);
	   $.ajax({
			url: '/get/news/'+idf,
			type: 'GET',
			
			datatype:'json',
			success: function(result) {
				console.log(result.content);

				$('#title').val(result.title);
				$('#content').val(result.content);
				var data = result.tags;
				var arr = data.split(',');
				console.log(arr);
				for(var item in arr){
					addData(arr[item],id);
					id++;

				}
				
				
			}
		});

	   $('#form-store-news').attr('action', '/news/update/' + idf);
	   $('#method_field').val('PUT');


	   

	 
	  
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
					$("#delete-id-product").append(o);

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

	$('#delete-id-product').change(function(event) {

			var id = $(this).val();
			$('#modal-delete-product').find('#form-delete-product').attr('action', '/product/delete/' + id);




	});

	$('#btn-app-update').click(function(event) {
		  $('#name-prod').val('');
			$('#desc-prod').val('');
	});


	//////////// store tag /////////
	
	$('#tags').keypress(function(event) {
		if(event.key == ' '){
			
			addData($('#tags').val(),id);
			
			$('#tags').val("");
			console.log(tags);
			id++;
		}
	});



});
	
function addData(data,ids){
		var test = '<div class="col-sm mt-2">'+
							'<div class="alert alert-info alert-dismissible fade show" role="alert">'+
						  data+
						  '<button type="button" onClick="deleteData('+ids+')" class="close" data-dismiss="alert" aria-label="Close">'+
						    '<span aria-hidden="true">&times;</span>'+
						 '</button>'+
						'</div> </div>'
		$('#tags-div').append(test);
		tags[ids] = 	data;
		updateData(tags);
}

function deleteData(ids){
	delete tags[ids];
	console.log(tags);
	updateData(tags);
}

function updateData(data){
	var tagsData = [];
	for(var item in data){
		tagsData.push(data[item]);
	}
	console.log(tagsData);
	$('#tags-field').val(tagsData.join(","));
	
	

}