<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/main.css">
	<title>Dashboard</title>
</head>
<body style="background-color: #E9ECF4">

	<div class="container-fluid">
		
		<div class="row">
			<div class="col-lg-2 m-3">
				<div class="card bg-light sidebar sticky-top">
					<div class="card-body">
						<ul class="dash-nav">
							<li class="dash-nav-item active"><a class="text-success" href=""><i class="fa fa-columns"></i> Dashboard</a></li>
							<li class="dash-nav-item "><a class="text-success" href=""><i class="fa fa-users"></i>  Admin</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-9 m-3">
				<div class="row">
					<div class="card card-header header bg-light col-lg ">
						
							<b><p class="ml-5">"Lorem ipsum dolor sit amet consectetur adipisicing elit. "</p></b>
						
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
								<button type="button" class="btn btn-success btn-action">Tambah</button>
								<button type="button" class="btn btn-success btn-action">Update</button>
								<button type="button" class="btn btn-success btn-action">Hapus</button>
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
				
			</div>
		</div>
	</div>



	
</body>
</html>