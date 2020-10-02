@extends('Dashboard.Layout.app')

@section('sidebar')

	<div class="col-lg-2 m-3">
		<div class="card bg-light sidebar sticky-top">
			<div class="card-body">
				<ul class="dash-nav">
					<li  class="dash-nav-item active-dash"><a class="text-success" href="/dashboard"><i class="fa fa-columns"></i> Dashboard</a></li>
					<li  class="dash-nav-item "><a class="text-success" href="/dashboard/admin"><i class="fa fa-users"></i>  Admin</a></li>
				</ul>
			</div>
		</div>
	</div>

@endsection


@section('main-content')

<div class="row m-2 p-1">
	<div class="col-lg">
		@if (\Session::has('success'))
			<div class="alert alert-success alert-dismissible fade show" role="alert">
			  <strong>{!! \Session::get('success') !!}</strong> 
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
	    
		@endif		
	</div>
</div>

<div class="row mt-3 mb-4">
	
	<h4>Dashboard</h4>
	
</div>

<div class="row">
	<div class="col-lg-3 p-2 m-0">
		<div class="card text-white mb-3 andro-card border" style="">
		  
		  <div class="card-body">

		    <h5 class="card-title text-right"><i class="fa fa-heart"></i>
		    	{{$mostProd->where('category','android')->first()['like']}}</h5>
		    <p class="card-text">{{$mostProd->where('category','android')->first()['name']}}</p>
		  </div>
		  <div class="card-footer">
		  	Most Liked Android Development
		  </div>
		</div>
	</div>	
	<div class="col-lg-3 p-2 m-0">
		<div class="card text-white mb-3 border web-card">
		  
		  <div class="card-body">
		    <h5 class="card-title text-right"><i class="fa fa-heart"></i>
		    	{{$mostProd->where('category','web')->first()['like']}}</h5>
		    <p class="card-text">{{$mostProd->where('category','web')->first()['name']}}</p>
		  </div>
		  <div class="card-footer">
		  	Most Liked Android Development
		  </div>
		</div>
	</div>	
	<div class="col-lg-3 p-2 m-0">
		<div class="card text-white desktop-card mb-3 border ">
		  
		  <div class="card-body">
		    <h5 class="card-title text-right"><i class="fa fa-heart"></i>
		    	{{$mostProd->where('category','desktop')->first()['like']}}</h5>
		    <p class="card-text">{{$mostProd->where('category','desktop')->first()['name']}}</p>
		  </div>
		  <div class="card-footer">
		  	Most Liked Desktop App Development
		  </div>
		</div>
	</div>	
	<div class="col-lg-3 p-2 m-0">
		<div class="card text-white const-card mb-3 border">
		  
		  <div class="card-body">
		    <h5 class="card-title text-right"><i class="fa fa-heart"></i>
		    	{{$mostProd->where('category','construction')->first()['like']}}</h5>
		    <p class="card-text">{{$mostProd->where('category','construction')->first()['name']}}</p>
		  </div>
		  <div class="card-footer">
		  	Most Liked Constructions Development
		  </div>
		</div>
	</div>	
</div>
{{-- 2 table --}}
<div class="row">
	<div class="col-lg p-1">
		<div class="card">
			<div class="card-header">
				<h5 class="card-text">Edit Berita</h5>
			</div>
			<div class="card-body">
				<table class="table " id="table-news" style="height: 150px !important; width: 100% !important;">
					<thead>
						
					</thead>
				  <tbody >
				  	@foreach ($data as $da)
				  		
					    <tr>

					      
					  	  <td hidden="hidden">{{$da->id}}</td>
					      <td>{{ Str::limit( $da->title , 70) }}</td>
					      <td><i class="fa fa-eye"></i></td>
					      <td>{{$da->view}}</td>
					    </tr>
				  	@endforeach
				    

				  </tbody>
				</table>
			</div>
			<div class="card-footer">
				<button type="button" id="btn-store-news" class="btn btn-success btn-action" data-toggle="modal" data-target="#exampleModalCenter">Tambah</button>
				
				<button type="button" id="btn-update-news" disabled class="btn btn-success btn-action"data-toggle="modal" data-target="#exampleModalCenter">Update</button>
				<button type="button" id="btn-delete-news" disabled data-toggle="modal" data-target="#modal-delete-news" class="btn btn-success btn-action">Hapus</button>
			</div>
		</div>
	</div>
	<div class="col-lg p-1">
		<div class="card">
			<div class="card-header">
				<h5 class="card-text">Edit Headline</h5>
			</div>
			<div class="card-body">
				<table class="table table-responsive" style="height: 150px !important; width: 100% !important;">
				  <tbody >
				  	@foreach ($head as $he)
				  		
					    <tr>

					      
					  	  <td hidden="hidden">{{$he->id}}</td>
					      <td>{{ Str::limit( $he->title , 70) }}</td>
					      <td><i class="fa fa-eye"></i></td>
					      <td>{{$he->view}}</td>
					    </tr>
				  	@endforeach

				  </tbody>
				</table>
			</div>
			<div class="card-footer">
				<button type="button" class="btn btn-success btn-action" data-toggle="modal" data-target="#headline-news">Edit</button>
			</div>
		</div>
	</div>
</div>							

{{-- end 2 table --}}

				
<div class="row" >
	<div class="col-lg p-1">
		<div class="card  mt-3 mb-3" style="height:830px;">
			<div class="card-body ">
				<div class="row mb-3">
					<div class="col-lg">
						<div class="card option-card">
							<div class="card-header">
								<h5 class="card-text">Android Applications</h5>
							</div>
							<input type="text" value="android" hidden="true">
							<div class="card-body">
								<table class="table table-striped table-responsive" style="height: 250px !important; width: 100% !important;">
								  <tbody >
								  	@foreach ($products->where('category','android') as $android)
								  		<tr>
									      <th scope="row">◉</th>
									      <td>{{$android->name}}</td>
									      <td>{{Str::limit($android->desc,40)}}</td>
									      <td><i class="fa fa-heart" ></i></td>												  
									      <td>{{$android->like}}</td>
								    	</tr>
								  	@endforeach
								    
								    

								  </tbody>
								</table>
							</div>
			
						</div>
					</div>
					<div class="col-lg">
						<div class="card option-card">
							<div class="card-header">
								<h5 class="card-text">Desktop Applications</h5>
							</div>
							<input type="text" value="desktop" hidden="true">
							<div class="card-body">
								<table class="table table-striped table-responsive" style="height: 250px !important; width: 100% !important;">
								  <tbody >
								    @foreach ($products->where('category','desktop') as $desktop)
								  		<tr>
									      <th scope="row">◉</th>
									      <td>{{$desktop->name}}</td>
									      <td>{{Str::limit($desktop->desc,40)}}</td>
									      <td><i class="fa fa-heart" ></i></td>												  
									      <td>{{$desktop->like}}</td>
								    	</tr>
								  	@endforeach

								  </tbody>
								</table>
							</div>
							
						</div>
					</div>
				</div>
				<div class="row mb-3">
					<div class="col-lg">
						<div class="card  option-card">
							<div class="card-header">
								<h5 class="card-text">Web</h5>
							</div>
							<input type="text" value="web" hidden="true">
							<div class="card-body">
								<table class="table table-striped table-responsive" style="height: 250px !important; width: 100% !important;">
								  <tbody >
								    @foreach ($products->where('category','web') as $web)
								  		<tr>
									      <th scope="row">◉</th>
									      <td>{{$web->name}}</td>
									      <td>{{Str::limit($web->desc,40)}}</td>
									      <td><i class="fa fa-heart" ></i></td>												  
									      <td>{{$web->like}}</td>
								    	</tr>
								  	@endforeach

								  </tbody>
								</table>
							</div>
			
						</div>
					</div>
					<div class="col-lg">
						<div class="card option-card">
							<div class="card-header">
								<h5 class="card-text">Construction</h5>
							</div>
							<input type="text" value="construction" hidden="true">
							<div class="card-body">
								<table class="table table-striped table-responsive" style="height: 250px !important; width: 100% !important;">
								  <tbody >
								    @foreach ($products->where('category','construction') as $construction)
								  		<tr>
									      <th scope="row">◉</th>
									      <td>{{$construction->name}}</td>
									      <td>{{Str::limit($construction->desc,40)}}</td>
									      <td><i class="fa fa-heart" ></i></td>												  
									      <td>{{$construction->like}}</td>
								    	</tr>
								  	@endforeach

								  </tbody>
								</table>
							</div>
							
						</div>
					</div>
				</div>
				
			</div>
			<div class="card-footer mt-3">
				<button type="button" data-toggle="modal" data-target="#app-store-modal" class="btn btn-success btn-action" id="btn-app-tambah">Tambah</button>
				<button type="button" class="btn btn-success btn-action"id="btn-app-update"  data-toggle="modal" data-target="#update-product-modal">Update</button>
				<button type="button" class="btn btn-success btn-action"id="btn-app-delete" data-toggle="modal" data-target="#modal-delete-product">Hapus</button>
			</div>
		</div>
		
	</div>
	
</div>

@include('Dashboard.modal.news.store')
@include('Dashboard.modal.news.update')
@include('Dashboard.modal.news.delete')
@include('Dashboard.modal.news.headline')
@include('Dashboard.modal.app.store')
@include('Dashboard.modal.app.update')
@include('Dashboard.modal.app.delete')






@endsection				