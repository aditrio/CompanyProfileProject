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
    {{-- <link type="text/css" href="css/twilight.css" rel="stylesheet"> --}}
	{{-- <link rel="stylesheet" type="text/css" href="./assets/tags/css/projects.min.css"> --}}
	{{-- <link rel="stylesheet" type="text/css" href="./assets/tags/css/taggle.css"> --}}

    


    {{-- jquery --}}

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
	<script src="./assets/js/main.js"></script>	
	{{-- <script src="./assets/tags/js/rainbow-custom.min.js"></script>
	<script src="./assets/tags/js/taggle.js"></script>
	<script src="./assets/tags/js/scripts.js"></script> --}}
	


	<title>Dashboard</title>
</head>
<body id="body-app" style="background-color: #E9ECF4">

	<div class="container-fluid">
		
		<div class="row">
			<div class="col-lg-2 m-3">
				<div class="card bg-light sidebar sticky-top">
					<div class="card-body">
						<ul class="dash-nav">
							<li class="dash-nav-item active-dash"><a class="text-success" href=""><i class="fa fa-columns"></i> Dashboard</a></li>
							<li class="dash-nav-item "><a class="text-success" href=""><i class="fa fa-users"></i>  Admin</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-9 m-3">
				<div class="row">
					<div class="card card-header header bg-light col-lg ">
						
						<div class="row">
							<div class="col-lg-8" >
								<b><p class="ml-5">Seseorang meminati proyek <span></span><i class="fa fa-bell pull-right p-1"></i></p></b>
								
							</div>
							<div class="col-lg-4 ">
								<div class="dropdown pull-right ">
									  <button class="btn p-1 btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    {{Auth::user()->name }}
									  </button>
									  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									    {{-- <a class="dropdown-item" href="{{ Auth::logout()}}">Logout</a> --}}
										<form id="frm-logout" action="{{ route('logout') }}" method="POST">
										    {{ csrf_field() }}
										    <button class="dropdown-item" type="submit">Logout</button>
										</form>
									  </div>
									</div>
								
								
							</div>
						</div>

						
					</div>
					
				</div>

				@yield('main-content')
				
			</div>
		</div>
	</div>



	
</body>
</html>