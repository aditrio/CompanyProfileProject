<!-- Modal -->

	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Berita</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
	
			@csrf
	      <div class="modal-body">
			  <div class="form-group">
			    <label for="exampleInputEmail1">News Title</label>
			    <input required="" type="text" class="form-control" id="title" name="title" placeholder="Title Here ....">
			    
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">News Content</label>
			    <input required="" type="text" class="form-control" id="content" name="content" placeholder="Content Here....">
			  </div>		

			  <div class="form-group form-inline">
				  <input class="form-check-input" id="headline" name="headline" type="checkbox" value="1" id="defaultCheck1">
				  <label class="form-check-label" for="defaultCheck1">
				     Headline News?  
				  </label>
				  
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
 