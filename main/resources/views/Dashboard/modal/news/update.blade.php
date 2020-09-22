

	<div class="modal fade" id="update-news" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">Pilih Berita</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      
	      <div class="modal-body">



		<form action="" id="form-update-news" method="post" enctype="multipart/form-data">
					{{method_field('PUT')}}
					@csrf
			<h4>Edit field</h4>

			  <div class="form-group">
			    <label for="exampleInputEmail1">News Title</label>
			    <input required="" type="text" class="form-control title-update" id="title-update-news" name="title" placeholder="Title Here ...." value="">
			    
			  </div>

			   <div class="form-group" >
			    <label for="exampleInputEmail1">News Tags</label>
			    <input type="text" class="form-contro tags-input" id="tags-update" placeholder="Press Space to add ....">
			    <input type="text" hidden="" name="tags" id="tags-field-update" value="">
			    <div class="row" id="tags-div-update">
			    	
			    </div>
			    
			  </div>

			  <div class="form-group">
			    <label for="exampleInputPassword1">News Content</label>
			    <input required="" type="text" class="form-control" id="content-update-news" name="content" placeholder="Content Here....">
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
	        <button type="submit" class="btn btn-success">Update</button>
        </form>
	      </div>
	    </div>
	  </div>
	</div>
