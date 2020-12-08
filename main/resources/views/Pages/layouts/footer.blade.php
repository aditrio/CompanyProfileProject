<section id=footer style="margin-top: -25px;">
		<div class="container">
			
			<center class="text-white">
				<br>
				<h4 class="mt-3"><b>Contact Us</b></h4>			
				<br>
			</center>
			<div class="row">
				
				<div class="col-lg text-light">
					<form action="{{ route('message.store') }}" method="post">
						@csrf
						@method('POST')
						Nama <br>
						<input type="text" name="name" style="width: 300px; background-color: #1C1F1F"	class="text-light" id="nama">
						<br>Email <br>
						<input type="text" name="email" style="width: 300px; background-color: #1C1F1F" class="text-light" id="nama">
						<br>Pesan <br>
						<textarea name="message" style="width: 300px; background-color: #1C1F1F" id="" class="text-light" cols="21" rows="5"></textarea><br>

						<button type="submit" style="width: 250px" class="btn btn-danger">Submit</button>
						<br><br>
					</form>
				</div>
				
				<div class="col-lg-5 text-light" align="right">
					<img src="../assets/image/LOGO-06.png"  height="100" alt="">
					<div class="row justify-content-end p-4" >
						<a href=""><img src="https://housing.virginia.edu/sites/housing.virginia.edu/files/instagram-icon-good.png" height="50" alt=""></a>
						<a href=""><img src="https://housing.virginia.edu/sites/housing.virginia.edu/files/instagram-icon-good.png" height="50" alt=""></a>
						<a href=""><img src="https://housing.virginia.edu/sites/housing.virginia.edu/files/instagram-icon-good.png" height="50" alt=""></a>
						<br>
						<p>@2020 PT GIGA Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
					</div>
				</div>
			</div>
		</div>
	</section>