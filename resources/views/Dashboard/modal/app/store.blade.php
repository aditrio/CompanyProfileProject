<!-- Modal -->

	<div class="modal fade" id="app-store-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">Tambah</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <form action="" id="form-product-store" method="post" enctype="multipart/form-data">
	
					@csrf
	      <div class="modal-body">
      			<div class="form-group">
				    <label for="exampleInputEmail1">Category</label>
				    <input disabled="true" type="text" class="form-control" id="category" name="category" placeholder="">
				    
			  	</div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Name</label>
			    <input required="" type="text" class="form-control" id="name" name="name" placeholder="Name ....">
			    
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Description</label>
			    <input required="" type="text" class="form-control" id="desc" name="desc" placeholder="Desc ....">
			  </div>		
			  
			  <div class="form-group">
			    <label for="exampleFormControlFile1">Upload image</label>
			    <input required="" type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
			  </div>				
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-success">Simpan</button>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>
 