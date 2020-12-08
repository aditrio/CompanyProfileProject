@extends('Dashboard.Layout.app')

@section('sidebar')

	<div class="col-lg-2 m-3">
		<div class="card bg-light sidebar sticky-top">
			<div class="card-body">
				<ul class="dash-nav">
					<li  class="dash-nav-item"><a class="text-success" href="/dashboard"><i class="fa fa-columns"></i> Dashboard</a></li>
					<li  class="dash-nav-item active-dash"><a class="text-success" href="/dashboard/admin"><i class="fa fa-users"></i>  Admin</a></li>
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
	
<div class="row">
	<div class="col-lg-6 p-2  m-0">
		<div class="card  mb-3  border" style="">
		  
		  <div class="card-header">
		    <h5 class="card-title"><i class="fa fa-user"></i> Admin Data</h5>
		  	
		  </div>

		  <div class="card-body">

		  		<div class="row">
		  			<div class="col-lg-4">
		  				<img class="img-fluid img-circle" src="../images-user/<?=$imageUser->imagePath?>" alt="image">
		  			</div>
		  			<div class="col-lg">
		  				<form action="/user/update/{{Auth::user()->id}}" method="post" enctype="multipart/form-data">
		  					@csrf
		  					@method('PUT')
						  <div class="form-group">
						    <label for="name">Name</label>
						    <input type="text" disabled="" name="name" class="form-control" id="admin-name" value="{{Auth::user()->name}}" >
						    
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">Profile Picture</label>
						    <input disabled="" id="admin-file" name="image" type="file" class="form-control-file" >
						  </div>
						 
						  
		  			</div>
		  		</div>
		    
		  </div>

		  <div class="card-footer " align="right">
  					<button id="admin-edit" type="button" class="btn btn-primary">Edit</button>
				    <button id="admin-submit" type="submit" disabled="" class="btn btn-primary">Submit</button>

					</form>
		  </div>	
		  
		</div>
	</div>	
	<div class="col-lg-6 p-2  m-0">
		<div class="card  mb-3  border" style="">
		  
		  <div class="card-header">
		    <h5 class="card-title"><i class="fa fa-bell"></i> Notifications</h5>
		  	
		  </div>

		  <div class="card-body mb-4">

		  		<div class="row">
		  			
		  				
			  			<table class="table p-2 table-striped table-responsive" style="width: 100% !important; height: 120px">
						  <tbody >
						  		@foreach ($notifAll as $no)
						  			
							  		<tr>
								      <th scope="row">◉</th>
								      <td>{{$no->message}}</td>
								      <td class="status-read" data-has_read="{{$no->has_read}}" >
								      		@if ($no->has_read == '0')
								      			Unread
								      		@else
								      			Read
								      		@endif


								      </td>											      
							    	</tr>
						  		@endforeach
						  	
						  </tbody>
						</table>
		  			</div>
		  		
		    
		  </div>

		  <div class="card-footer">
		  	<form action="/readAll" method="post">
		  		@csrf
		  		@method('PUT')
		  		<button type="submit" class="btn btn-success pull-right">Mark all as read</button>
		  		
		  	</form>
		  </div>
		  
		</div>
	</div>	
</div>


<div class="row">
	
	<div class="col-lg">
		<div class="card border">
			
			<div class="card-header">
				<h5 class="card-title"><i class="fa fa-envelope"></i>  Message</h5>
			</div>

			<div class="card-body">

				<div class="row">
		  			
		  				
			  			<table class="table p-2 table-striped table-responsive" style="width: 100% !important; height: 250px">
			  				
						  <tbody >
						  			<tr>
								      <th scope="row"></th>
								      <td>Nama</td>
								      <td>Email</td>
								      <td>Message</td>	
								      <td>Status</td>											      


							    	</tr>
						  		@foreach ($message as $me)
						  			
							  		<tr>
								      <th scope="row">◉</th>
								      <td>{{$me->name}}</td>
								      <td>{{$me->email}}</td>
								      <td>{{$me->message}}</td>	
								       <td class="status-read-message" data-status="{{$me->status}}" >
								      		@if ($me->status == '0')
								      			Unread
								      		@else
								      			Read
								      		@endif


								      </td>												      

							    	</tr>
						  		@endforeach
						  	
						  </tbody>
						</table>
		  			</div>

			</div>
			<div class="card-footer">
		  	<form action="/readAllMessage" method="post">
		  		@csrf
		  		@method('PUT')
		  		<button type="submit" class="btn btn-success pull-right">Mark all as read</button>
		  		
		  	</form>
		  </div>

		</div>
	</div>

</div>
	

@endsection