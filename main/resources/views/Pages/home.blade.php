@extends('Pages/layouts/app')

@section('title',"Home")


@section('jumbotron')

	<div class="jumbotron jumbotron-fluid" style="background-image: url('https://64.media.tumblr.com/bc704b77de1adb08a750eba802d18e1d/tumblr_px4vmyYRPi1qzdw6bo1_1280.jpg');" >
		<div class="container text-center text-light " style="margin-top: 200px !important;">	  	
		    <h1 class="display-4" style="font-size: 32px">MARI KEMBANGKAN BERSAMA</h1>
		    <button onclick="location.href='/tentang';" class="btn btn-light" style="border-radius: 10px;">Temukan Sekarang</button>
		  </div>
	</div>

@endsection


@section('content')
	

	<section id="header">
		<div class="row">
			<div class="col-lg text-center">
				
				<p style="font-weight: bold; margin-top: -5px">Mitra Kami</p>	
			</div>
		</div>
	
			
				<div class="row justify-content-center" >
					
					
						<div class="row justify-content-center" style="margin-top: -10px">
							
						<div class="col-lg p-2 mb-4 img-fluid">
						 <img src="./assets/image/consulting.png" height="48" alt="CoolBrand">
							
						</div>
						<div class="col-lg p-2 mb-4 img-fluid">
						  <img src="./assets/image/mercer.png" height="48" alt="CoolBrand">
							
						</div>
						<div class="col-lg p-2 mb-4 img-fluid">
						   <img src="./assets/image/cpi.png" height="48" alt="CoolBrand">
							
						</div>
						</div>

					
						

				</div>
	
	</section>
	<br><br>
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-6">
				<img src="./assets/image/cpi.png" alt="">
			</div>
			<div class="col-lg-6">
				<h3><b>Tentang Kami</b></h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora est nam consequuntur alias officia ratione, ex vel veniam rerum et iste, vitae voluptate amet asperiores veritatis cumque ea, quas quia? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam numquam tempore explicabo tempora minus ipsam harum quis unde deserunt illum reiciendis rerum perferendis repudiandae similique eligendi sint ex voluptatum, laboriosam! Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Quod voluptatem repudiandae, eius ipsum cumque soluta maiores perferendis dicta, quo placeat dolorem, fugit corrupti eligendi quisquam labore magni amet illo iste?</p>
				<br>
				<button onclick="location.href='/tentang';" class="btn btn-light-shadow" style="border-radius: 10px;"><b>SELENGKAPNYA</b></button>
			</div>
		</div>
	</div>
	<br>
	<br><br>

	<div class="container">
		<center class="mb-4">
			<h3><b>Kekuatan Pelayanan PT.GIGA</b></h3>
			
		</center>

		<div class="row text-center justify-content-center mb-4">
			


			<div class="col-lg-4 p-5">
				<img src="./assets/image/mercer.png" alt="">
				<h4>test gan</h4>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, error, commodi! Aliquam magni tempora quasi fugiat saepe rerum minus? Minima repellendus, voluptate itaque sequi saepe dolore libero, quidem laudantium nobis.</p>
			</div>
			<div class="col-lg-4 p-5">
				<img src="./assets/image/mercer.png" alt="">
				<h4>test gan</h4>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, error, commodi! Aliquam magni tempora quasi fugiat saepe rerum minus? Minima repellendus, voluptate itaque sequi saepe dolore libero, quidem laudantium nobis.</p>
			</div>
			<div class="col-lg-4 p-5">
				<img src="./assets/image/mercer.png" alt="">
				<h4>test gan</h4>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, error, commodi! Aliquam magni tempora quasi fugiat saepe rerum minus? Minima repellendus, voluptate itaque sequi saepe dolore libero, quidem laudantium nobis.</p>
			</div>
			<div class="col-lg p-5">
				<img src="./assets/image/mercer.png" alt="">
				<h4>test gan</h4>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, error, commodi! Aliquam magni tempora quasi fugiat saepe rerum minus? Minima repellendus, voluptate itaque sequi saepe dolore libero, quidem laudantium nobis.</p>
			</div>
			<div class="col-lg p-5">
				<img src="./assets/image/mercer.png" alt="">
				<h4>test gan</h4>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, error, commodi! Aliquam magni tempora quasi fugiat saepe rerum minus? Minima repellendus, voluptate itaque sequi saepe dolore libero, quidem laudantium nobis.</p>
			</div>

		</div>

		<br>
		<br>



	</div>			

	<section id="cardSection" class="mb-5">
		<div class="row container-fluid">
			<div class="col-lg p-5">
				<div class="card">
					<div class="card-header img-fluid text-center">
						<img style="border-radius: 360px;" src="./assets/image/iyori.jpeg" alt="">
					</div>
					<div class="card-body text-center">
						<h3>Iyori Shimizu</h3>
						<p>Lorem ipsum, </p>
					</div>
				</div>
			</div>
			<div class="col-lg p-5">
				<div class="card">
					<div class="card-header img-fluid text-center">
						<img style="border-radius: 360px;" width="230" height="230" src="./assets/image/aimyon.jpg" alt="">
					</div>
					<div class="card-body text-center">
						<h3>Aimyon</h3>
						<p>Lorem ipsum, </p>
					</div>
				</div>
			</div>
			<div class="col-lg p-5">
				<div class="card">
					<div class="card-header img-fluid text-center">
						<img style="border-radius: 360px;" src="./assets/image/iyori.jpeg" alt="">
					</div>
					<div class="card-body text-center">
						<h3>Iyori Shimizu</h3>
						<p>Lorem ipsum, </p>
					</div>
				</div>
			</div>

		</div>
	</section>

	<section id="kata-mereka" class="mb-4">

		<div class="container">
			<center class="mb-4">				
				<h3><strong>Kata Mereka</strong></h3>
			</center>
			<div class="row">
				<div class="img-fluid mr-3 p-2">
					<img src="./assets/image/aimyon.jpg" style="border-radius: 360px" width="200" height="200" alt="">
				</div>
				<div class="col mt-4">
					<h4 class="mt-3"><b>Aimyon | Penyanyi OP</b></h4>
					<blockquote class="blockquote">
					  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere </p>
					  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
					</blockquote>
					
				</div>
			</div>
			<div class="row">
				<div class="col mt-4 text-right">
					<h4 class="mt-3"><b>Aimyon | Penyanyi OP</b></h4>
					<blockquote class="blockquote">
					  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere </p>
					  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
					</blockquote>
					
				</div>
				<div class="img-fluid mr-3 p-2">
					<img src="./assets/image/aimyon.jpg" style="border-radius: 360px" width="200" height="200" alt="">
				</div>
			</div>
		</div>
		
	</section>

	
@endsection
