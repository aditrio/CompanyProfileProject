

	<div class="modal fade" id="headline-news" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
	      		<select name="select-id" id="select-id">

	      			<option  selected="true"  value="">Pilih berita..</option>
	      			@foreach($data as $da)

	      				<option value="{{$da->id}}">{{$da->title}}</option>

	      			@endforeach
	      		</select>
	      	</div>



		<form action="" id="form-headline-news" method="post" enctype="multipart/form-data">
					{{method_field('PUT')}}
					@csrf
			<h4>Edit field</h4>

			  <div class="form-group">
			    <label for="exampleInputEmail1">News Title</label>
			    <input disabled="" required="" type="text" class="form-control title-update" id="title-headline-news" name="title" placeholder="Title Here ...." value="">
			    
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">News Content</label>
			    <input disabled="" required="" type="text" class="form-control" id="content-headline-news" name="content" placeholder="Content Here....">
			  </div>		

			   <div class="form-group form-inline">
				  <input class="form-check-input" id="headline" name="headline" type="checkbox" value="1" id="defaultCheck1">
				  <label class="form-check-label" for="defaultCheck1">
				     Headline News?  
				  </label>
				  
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
