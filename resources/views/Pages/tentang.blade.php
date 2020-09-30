@extends('Pages.layouts.app')

@section('title',"Tentang")


@section('jumbotron')
	<div class="jumbotron jumbotron-fluid" style="background-image: url('https://economictimes.indiatimes.com/thumb/height-450,width-600,imgsize-590602,msid-75292601/earth-safe_istock.jpg?from=mdr');">
		<div class="container text-center text-light " style="margin-top: 120px !important; width: 600px">	  	
		    <h1 class="display-4 " style="font-size: 35px; font-weight: bold">"WE DO NOT INHERIT THE WORLD FROM OUR ANCESTORS WE BORROW IT FROM OUR CHILDREN" </h1>
		    
		  </div>
	</div>
@endsection

@section('content')

	<section id="header" style="height: 100%">
		<div class="container">
			<center>
				<h3 style="color: #0375FF"><b>Tentang Kami</b></h3>
				<div class="row justify-content-center">
					<div class="circle"> <div id="slide-1" class="c-active"></div></div>
					<div class="line-circle"></div>
					<div class="circle"><div id="slide-2" class="c-none"></div></div>
					<div class="line-circle"></div>
					<div class="circle"><div id="slide-3" class="c-none"></div></div>
				</div>
			</center>
			<div id="slide-page-1" class="row mt-3 mb-5 slide-page">
				<div class="col-lg-6 img-fluid mb-3">
					<img src="./assets/image/cpi.png" alt="">
				</div>
				<div class="col-lg-6 p-3">
					
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora est nam consequuntur alias officia ratione, ex vel veniam rerum et iste, vitae voluptate amet asperiores veritatis cumque ea, quas quia? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam numquam tempore explicabo tempora minus ipsam harum quis unde deserunt illum reiciendis rerum perferendis repudiandae similique eligendi sint ex voluptatum, laboriosam! Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Quod voluptatem repudiandae, eius ipsum cumque soluta maiores perferendis dicta, quo placeat dolorem, fugit corrupti eligendi quisquam labore magni amet illo iste?</p>
					<br>
					
				</div>
			</div>
			<div hidden="" id="slide-page-2" class="row mt-3 mb-5 slide-page">
				<div class="col-lg-6 img-fluid mb-3">
					<img src="./assets/image/aimyon.jpg" alt="">
				</div>
				<div class="col-lg-6 p-3 text-center">
					<div style="margin-top: 150px;">
						<h3><b>Building Future</b></h3>
						<p>Dengan Visi Ini Kami Berharap <br> PT. GIGA dapat membangun dunia</p>
						
					</div>
					
				</div>
			</div>
			<div hidden="" id="slide-page-3" class="row mt-3 mb-5 slide-page">
				<div class="col-lg-6 img-fluid mb-3">
					<img src="./assets/image/iyori.jpeg" height="500" alt="">
				</div>
				<div class="col-lg-6 p-3 text-center">

					<div style="margin-top: 100px">
						<h3><b>MISI</b></h3>
						<p>Membangun dan mengiringi <br> Perkembangan Manusia</p>
						<p>Membantu pemerintah <br> mensejahterakan masyarakat</p>
						<p>Memberikan layanan optimaldan dan <br> maksimal</p>
						
					</div>
					
					
				</div>
			</div>
		</div>

	</section>

	<section id="bisnis">

		<div class="container">
			<center class="mb-3">
				<h3 style="color: #0375FF"><b>Bisnis Kami</b></h3>
			</center>

			<div class="row mb-3">
				<div class="col-lg-4">
					<h4 style="color: #0375FF"><b>Konstruksi Bangunan</b></h4>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur temporibus quas veniam reprehenderit tempora cumque, exercitationem magnam voluptatum </p>
					<button class="btn btn-light-shadow" style="color: #0375FF; border-top-right-radius: 50px; border-bottom-right-radius: 50px; width: 170px;"><b>SELENGKAPNYA</b></button>
				</div>
				<div class="col-lg-4 ">
					<img class="mb-2" src="./assets/image/iyori.jpeg" alt="">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere vel ipsa ducimus repudiandae libero commodi deserunt explicabo delectus </p>
				</div>
				<div class="col-lg-4 ">
					<img class="mb-2" src="./assets/image/iyori.jpeg" alt="">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere vel ipsa ducimus repudiandae libero commodi deserunt explicabo delectus Lorem ipsum, dolor, sit amet consectetur adipisicing elit. Perferendis nulla nobis velit necessitatibus placeat incidunt delectus quaerat, laudantium sapiente </p>
				</div>
			</div>
		</div>

		
	</section>



@endsection