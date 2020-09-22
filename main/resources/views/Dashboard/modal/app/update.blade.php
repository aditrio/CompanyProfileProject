

	<div class="modal fade" id="update-product-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">Pilih Berita</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      
	      <div class="modal-body">

	      	<div class="form-group">
	      		<select class="form-control" name="select-id-product" id="select-id-product">

	      			<option  selected="true"  value="">Pilih berita..</option>
	      			
	      		</select>
	      	</div>



		<form action="" id="form-product-update" method="post" enctype="multipart/form-data">
					{{method_field('PUT')}}
					@csrf
			<h4>Edit field</h4>

			<div class="form-group">
			    <label for="exampleInputEmail1">Category</label>
			    <input disabled="true" type="text" class="form-control" id="category" name="category" placeholder="">
			    
		  	</div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Name</label>
			    <input  required="" type="text" class="form-control title-update" id="name-prod" name="name" placeholder="Title Here ...." value="">
			    
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Description</label>
			    <input  required="" type="text" class="form-control" id="desc-prod" name="desc" placeholder="Content Here....">
			  </div>		

			  <div class="form-group">
			    <label for="exampleFormControlFile1">Upload image <small>keep empty to not update the image</small></label>
			    <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
			  </div>

			  		
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit"  class="btn btn-success">Update</button>
        </form>
	      </div>
	    </div>
	  </div>
	</div>
