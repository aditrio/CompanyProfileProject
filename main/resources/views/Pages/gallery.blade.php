@extends('Pages.layouts.app')

@section('title', 'Gallery')

@section('jumbotron')
	<div class="jumbotron jumbotron-fluid" style="background-image: url('https://blog.edx.org/wp-content/uploads/2017/06/Untitled-design-11.png');">
			<div class="container text-left text-gray-dark " style="margin-top: 120px !important; width: 100%">	  	
			    <h1 class="display-4 " style="font-size: 35px; font-weight: bold">TEMUKAN MIMPIMU </h1><br>
			    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br> Provident nisi, eius? Corporis saepe autem consectetur omnis <br> molestias ratione numquam</p>
			    
			  </div>
	</div>
@endsection

@section('content')
	
	<section id="cardSection" style="margin-top: -50px;">

		<div class="container">
			<div class="row p-3 text-light">
				
				<ul class="nav nav-pills mb-3 p-3" id="pills-tab" role="tablist">
					<li class="pr-5">
						<select id="inputState" class="form-control select-prod">
					        <option selected disabled="">Pilih...</option>
					        <option value="popular">Popular</option>
					        <option value="news">Newest</option>
		        </select>
		        <form id="form-select" action="" method="get">
		        	@csrf
		        	
		        </form>
					</li>
				  <li class="nav-item">
				    <a class="nav-link active" id="pills-semua-tab" data-toggle="pill" href="#pills-semua" role="tab" aria-controls="pills-semua" aria-selected="true">Semua</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="pills-konstruksi-tab" data-toggle="pill" href="#pills-konstruksi" role="tab" aria-controls="pills-konstruksi" aria-selected="false">Konstruksi</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="pills-android-tab" data-toggle="pill" href="#pills-android" role="tab" aria-controls="pills-android" aria-selected="false">Android</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="pills-web-tab" data-toggle="pill" href="#pills-web" role="tab" aria-controls="pills-web" aria-selected="false">Web</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="pills-desktop-tab" data-toggle="pill" href="#pills-desktop" role="tab" aria-controls="pills-desktop" aria-selected="false">Desktop</a>
				  </li>
				</ul>

			</div>
			<div class="row text-light">
				<div class="tab-content" id="pills-tabContent">
				  <div class="tab-pane fade show active" id="pills-semua" role="tabpanel" aria-labelledby="pills-semua-tab">
				  		<div class="row">
				  			@foreach ($prod as $p)
				  			@if (count($prod) >= 4)
				  				<div class="col-lg-3 p-3 select-gallery" data-id="{{$p->id}}">
				  					<img class="img-fluid" style="height: 150px !important;" src="../images-all/<?=$p->imagePath?>" alt="">	<br> 
				  					<p>{{ Str::limit($p->name,20) }} <span class="float-right" ><i class="fa fa-heart"></i> {{$p->like}}</span></p>
				  				</div>	
				  			@else	

				  				<div class="col-lg p-1 select-gallery" data-id="{{$p->id}}">
				  					<img class="img-fluid" style="height: 150px !important;" src="../images-all/<?=$p->imagePath?>" alt="">	<br> 
				  					<p>{{ Str::limit($p->name,20) }} <span class="float-right" ><i class="fa fa-heart"></i> {{$p->like}}</span></p>
				  				</div>	
				  			@endif

				  				
				  			@endforeach

				  		</div>

				  </div>
				  <div class="tab-pane fade" id="pills-konstruksi" role="tabpanel" aria-labelledby="pills-konstruksi-tab">
				  	<div class="row">
				  		
				  			@foreach ($prod->where('category','construction') as $p)
					  			<div class="col-lg select-gallery" data-id="{{$p->id}}">
					  					<img class="img-fluid" style="height: 150px !important;" src="../images-all/<?=$p->imagePath?>" alt="">	<br> 
					  					<p>{{ Str::limit($p->name,20) }} <span class="float-right" ><i class="fa fa-heart"></i> {{$p->like}}</span></p>
					  			</div>
				  				
				  			@endforeach
				  	</div>
				  </div>
				  <div class="tab-pane fade" id="pills-android" role="tabpanel" aria-labelledby="pills-android-tab">
				  	<div class="row">
				  		
				  			@foreach ($prod->where('category','android') as $p)
				  			
					  			<div class="col-lg select-gallery" data-id="{{$p->id}}">
					  					<img class="img-fluid" style="height: 150px !important;" src="../images-all/<?=$p->imagePath?>" alt="">	<br> 
					  					<p>{{ Str::limit($p->name,20) }} <span class="float-right" ><i class="fa fa-heart"></i> {{$p->like}}</span></p>
					  			</div>
				  				
				  			@endforeach
				  	</div>
				  </div>
			    <div class="tab-pane fade" id="pills-web" role="tabpanel" aria-labelledby="pills-web-tab">
			    	<div class="row">
				  		
				  			@foreach ($prod->where('category','web') as $p)
					  			<div class="col-lg select-gallery" data-id="{{$p->id}}">
					  					<img class="img-fluid" style="height: 150px !important;" src="../images-all/<?=$p->imagePath?>" alt="">	<br> 
					  					<p>{{ Str::limit($p->name,20) }} <span class="float-right" ><i class="fa fa-heart"></i> {{$p->like}}</span></p>
					  			</div>
				  				
				  			@endforeach
				  	</div>
			    </div>
			    <div class="tab-pane fade" id="pills-desktop" role="tabpanel" aria-labelledby="pills-desktop-tab">
			    	<div class="row">
				  		
				  			@foreach ($prod->where('category','desktop') as $p)
					  			<div class="col-lg select-gallery" data-id="{{$p->id}}">
					  					<img class="img-fluid" style="height: 150px !important;" src="../images-all/<?=$p->imagePath?>" alt="">	<br> 
					  					<p>{{ Str::limit($p->name,20) }} <span class="float-right" ><i class="fa fa-heart"></i> {{$p->like}}</span></p>
					  			</div>
				  				
				  			@endforeach
				  	</div>
			    </div>
				</div>
			</div>
		</div>				
		

		{{--  modal --}}

		<div class="modal fade bd-example-modal-lg" id="view-gallery" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-content">
		     <div class="modal-header">
		        <h3 class="modal-title text-uppercase font-weight-bold" id="name-gallery"></h3>
		        <div class="pull-right p-2">
		        	<form action="" id="form-liked" method="post">
		        		@csrf
		        		@method('PUT')
		        	<h4><button type="submit" class="btn fa fa-heart liked" id="liked" data-id=""></button><span class="pl-3 " id="like-gallery"></span></h4>
		        	</form>
		        	
		        </div>
		      </div>
		       <div class="modal-body">
		       	
		       		<img id="img-gallery" class="img-fluid mb-2" src="" alt="">
		       		<div id="badges" class="row container">
		       			
		       		</div>
		        <h5 class="text-uppercase font-weight-bold" id="category-gallery">kdsjfkjdsfk</h5>
		        <small id="date-modal"></small>
		        <br>
		        <p class="mt-1" id="desc-gallery"></p>
		        
		      </div>
		    </div>
		  </div>
		</div>

	</section>

@endsection