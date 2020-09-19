
$(document).ready(function() {
	
	$('#btn-update-news').attr('disabled', true);
	$('#btn-delete-news').attr('disabled', true);

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


	
	

});