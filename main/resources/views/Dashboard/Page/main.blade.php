@extends('Dashboard.Layout.app')

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
						    <h5 class="card-title text-right">Warning</h5>
						    <p class="card-text">Some quick example</p>
						  </div>
						  <div class="card-footer">
						  	27318
						  </div>
						</div>
					</div>	
					<div class="col-lg-3 p-2 m-0">
						<div class="card text-white mb-3 border web-card">
						  
						  <div class="card-body">
						    <h5 class="card-title text-right">Warning</h5>
						    <p class="card-text">Some quick example</p>
						  </div>
						  <div class="card-footer">
						  	27318
						  </div>
						</div>
					</div>	
					<div class="col-lg-3 p-2 m-0">
						<div class="card text-white desktop-card mb-3 border ">
						  
						  <div class="card-body">
						    <h5 class="card-title text-right">Warning</h5>
						    <p class="card-text">Some quick example</p>
						  </div>
						  <div class="card-footer">
						  	27318
						  </div>
						</div>
					</div>	
					<div class="col-lg-3 p-2 m-0">
						<div class="card text-white const-card mb-3 border">
						  
						  <div class="card-body">
						    <h5 class="card-title text-right">Warning</h5>
						    <p class="card-text">Some quick example</p>
						  </div>
						  <div class="card-footer">
						  	27318
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

									      <th scope="row">◉</th>
									  	  <td hidden="hidden">{{$da->id}}</td>
									      <td>{{ Str::limit( $da->title , 70) }}</td>
									      <td>{{$da->view}}</td>
									    </tr>
								  	@endforeach
								    

								  </tbody>
								</table>
							</div>
							<div class="card-footer">
								<button type="button" class="btn btn-success btn-action" data-toggle="modal" data-target="#exampleModalCenter">Tambah</button>
								
								<button type="button" id="btn-update-news" disabled class="btn btn-success btn-action"data-toggle="modal" data-target="#update-news">Update</button>
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
								<table class="table table-striped table-responsive" style="height: 150px !important; width: 100% !important;">
								  <tbody >
								    <tr>
								      <th scope="row">◉</th>
								      <td>Mark sadkjak jdkasjdlkasjdkasdjklasdjkasd</td>
								      <td>100</td>
								  
								    </tr>
								    <tr>
								      <th scope="row">◉</th>
								      <td>Jacob sadkjak jdkasjdlkasjdkasdjklasdjkasd</td>
								      <td>100</td>
								  
								    </tr>
								    <tr>
								      <th scope="row">◉</th>
								      <td>Larry sadkjak jdkasjdlkasjdkasdjklasdjkasd</td>
								      <td> 100</td>
								      
								    </tr>
								     <tr>
								      <th scope="row">◉</th>
								      <td>Mark sadkjak jdkasjdlkasjdkasdjklasdjkasd</td>
								      <td>100</td>
								  
								    </tr>
								    <tr>
								      <th scope="row">◉</th>
								      <td>Jacob sadkjak jdkasjdlkasjdkasdjklasdjkasd</td>
								      <td>100</td>
								  
								    </tr>
								    <tr>
								      <th scope="row">◉</th>
								      <td>Larry sadkjak jdkasjdlkasjdkasdjklasdjkasd</td>
								      <td> 100</td>
								      
								    </tr>

								  </tbody>
								</table>
							</div>
							<div class="card-footer">
								<button type="button" class="btn btn-success btn-action">Edit</button>
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
										<div class="card">
											<div class="card-header">
												<h5 class="card-text">Android Applications</h5>
											</div>
											<div class="card-body">
												<table class="table table-striped table-responsive" style="height: 250px !important; width: 100% !important;">
												  <tbody >
												    <tr>
												      <th scope="row">◉</th>
												      <td>Mark sadkjak jdkasjdlkasjdkasdjklasdjkasd</td>
												      <td>100</td>
												  
												    </tr>
												    <tr>
												      <th scope="row">◉</th>
												      <td>Jacob sadkjak jdkasjdlkasjdkasdjklasdjkasd</td>
												      <td>100</td>
												  
												    </tr>
												    <tr>
												      <th scope="row">◉</th>
												      <td>Larry sadkjak jdkasjdlkasjdkasdjklasdjkasd</td>
												      <td> 100</td>
												      
												    </tr>
												     <tr>
												      <th scope="row">◉</th>
												      <td>Mark sadkjak jdkasjdlkasjdkasdjklasdjkasd</td>
												      <td>100</td>
												  
												    </tr>
												    <tr>
												      <th scope="row">◉</th>
												      <td>Jacob sadkjak jdkasjdlkasjdkasdjklasdjkasd</td>
												      <td>100</td>
												  
												    </tr>
												    <tr>
												      <th scope="row">◉</th>
												      <td>Larry sadkjak jdkasjdlkasjdkasdjklasdjkasd</td>
												      <td> 100</td>
												      
												    </tr>

												  </tbody>
												</table>
											</div>
							
										</div>
									</div>
									<div class="col-lg">
										<div class="card">
											<div class="card-header">
												<h5 class="card-text">Desktop Applications</h5>
											</div>
											<div class="card-body">
												<table class="table table-striped table-responsive" style="height: 250px !important; width: 100% !important;">
												  <tbody >
												    <tr>
												      <th scope="row">◉</th>
												      <td>Mark sadkjak jdkasjdlkasjdkasdjklasdjkasd</td>
												      <td>100</td>
												  
												    </tr>
												    <tr>
												      <th scope="row">◉</th>
												      <td>Jacob sadkjak jdkasjdlkasjdkasdjklasdjkasd</td>
												      <td>100</td>
												  
												    </tr>
												    <tr>
												      <th scope="row">◉</th>
												      <td>Larry sadkjak jdkasjdlkasjdkasdjklasdjkasd</td>
												      <td> 100</td>
												      
												    </tr>
												     <tr>
												      <th scope="row">◉</th>
												      <td>Mark sadkjak jdkasjdlkasjdkasdjklasdjkasd</td>
												      <td>100</td>
												  
												    </tr>
												    <tr>
												      <th scope="row">◉</th>
												      <td>Jacob sadkjak jdkasjdlkasjdkasdjklasdjkasd</td>
												      <td>100</td>
												  
												    </tr>
												    <tr>
												      <th scope="row">◉</th>
												      <td>Larry sadkjak jdkasjdlkasjdkasdjklasdjkasd</td>
												      <td> 100</td>
												      
												    </tr>

												  </tbody>
												</table>
											</div>
											
										</div>
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-lg">
										<div class="card">
											<div class="card-header">
												<h5 class="card-text">Web</h5>
											</div>
											<div class="card-body">
												<table class="table table-striped table-responsive" style="height: 250px !important; width: 100% !important;">
												  <tbody >
												    <tr>
												      <th scope="row">◉</th>
												      <td>Mark sadkjak jdkasjdlkasjdkasdjklasdjkasd</td>
												      <td>100</td>
												  
												    </tr>
												    <tr>
												      <th scope="row">◉</th>
												      <td>Jacob sadkjak jdkasjdlkasjdkasdjklasdjkasd</td>
												      <td>100</td>
												  
												    </tr>
												    <tr>
												      <th scope="row">◉</th>
												      <td>Larry sadkjak jdkasjdlkasjdkasdjklasdjkasd</td>
												      <td> 100</td>
												      
												    </tr>
												     <tr>
												      <th scope="row">◉</th>
												      <td>Mark sadkjak jdkasjdlkasjdkasdjklasdjkasd</td>
												      <td>100</td>
												  
												    </tr>
												    <tr>
												      <th scope="row">◉</th>
												      <td>Jacob sadkjak jdkasjdlkasjdkasdjklasdjkasd</td>
												      <td>100</td>
												  
												    </tr>
												    <tr>
												      <th scope="row">◉</th>
												      <td>Larry sadkjak jdkasjdlkasjdkasdjklasdjkasd</td>
												      <td> 100</td>
												      
												    </tr>

												  </tbody>
												</table>
											</div>
							
										</div>
									</div>
									<div class="col-lg">
										<div class="card">
											<div class="card-header">
												<h5 class="card-text">Constraction</h5>
											</div>
											<div class="card-body">
												<table class="table table-striped table-responsive" style="height: 250px !important; width: 100% !important;">
												  <tbody >
												    <tr>
												      <th scope="row">◉</th>
												      <td>Mark sadkjak jdkasjdlkasjdkasdjklasdjkasd</td>
												      <td>100</td>
												  
												    </tr>
												    <tr>
												      <th scope="row">◉</th>
												      <td>Jacob sadkjak jdkasjdlkasjdkasdjklasdjkasd</td>
												      <td>100</td>
												  
												    </tr>
												    <tr>
												      <th scope="row">◉</th>
												      <td>Larry sadkjak jdkasjdlkasjdkasdjklasdjkasd</td>
												      <td> 100</td>
												      
												    </tr>
												     <tr>
												      <th scope="row">◉</th>
												      <td>Mark sadkjak jdkasjdlkasjdkasdjklasdjkasd</td>
												      <td>100</td>
												  
												    </tr>
												    <tr>
												      <th scope="row">◉</th>
												      <td>Jacob sadkjak jdkasjdlkasjdkasdjklasdjkasd</td>
												      <td>100</td>
												  
												    </tr>
												    <tr>
												      <th scope="row">◉</th>
												      <td>Larry sadkjak jdkasjdlkasjdkasdjklasdjkasd</td>
												      <td> 100</td>
												      
												    </tr>

												  </tbody>
												</table>
											</div>
											
										</div>
									</div>
								</div>
								
							</div>
							<div class="card-footer mt-3">
								<button type="button" class="btn btn-success btn-action">Tambah</button>
								<button type="button" class="btn btn-success btn-action">Update</button>
								<button type="button" class="btn btn-success btn-action">Hapus</button>
							</div>
						</div>
						
					</div>
					
				</div>

@include('Dashboard.modal.news.store')
@include('Dashboard.modal.news.update')
@include('Dashboard.modal.news.delete')


@endsection				