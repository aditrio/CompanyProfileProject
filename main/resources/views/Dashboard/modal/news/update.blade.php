

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


	      	<div class="input-group">
	      		<div class="input-group-prepend">
				    <label class="input-group-text" for="inputGroupSelect01">Judul</label>
			  	</div>			

			  <select class="custom-select" id="select-update">
			    <option selected>Choose...</option>
			  	@foreach ($data as $da)
			  		
			    	<option value="{{$da->id}}">{{$da->title}}</option>			    	
			  	@endforeach
			  </select>
			 
			</div>

			<br><br><br>
		<form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
			
					@csrf
			<h4>Edit field</h4>

			  <div class="form-group">
			    <label for="exampleInputEmail1">News Title</label>
			    <input type="text" class="form-control title-update" id="title" name="title" placeholder="Title Here ...." value="">
			    
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">News Content</label>
			    <input type="text" class="form-control" id="content" name="content" placeholder="Content Here....">
			  </div>		
			  
			  <div class="form-group">
			    <label for="exampleFormControlFile1">Upload image</label>
			    <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
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
