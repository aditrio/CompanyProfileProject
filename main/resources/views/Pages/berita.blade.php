@extends('Pages.layouts.app')
@section('style')
<style>
	.navbar {
		background: #3d3e3e !important;
	}

	.navbar.scrolled {
		background-color: rgba(0,0,0,0.5) !important;
	}	
</style>

@endsection
@section('title', "Berita")

@section('content')
	 
	<section id="cardSection">
		<div class="container text-light ">		
		<br>	
			<div class="row justify-content-center ">
				<div class="col-lg pt-4 pb-4 " style="margin-left: -300px;">
					@if (!is_null($first))
						{{-- expr --}}
					<div class="img-holder click-news"data-id="{{$first['id']}}">
			            <img class="img-container img-preview" src="./images-all/<?= $first['imagePath'] ?>">
			            <p><b>{{ Str::limit($first['title']),100}}</b></p>
			            <span>{{$first['created_at']}}</span>
     				</div>
					@endif
				</div>				
					<div class="col-lg-3 pt-4 pb-4 " style="margin-left: -300px;">		
					@if (!is_null($news))
								{{-- expr --}}
							@for ($i = 1; $i < count($news); $i++)
								<div class="img-holder-sm click-news" data-id="{{$news[$i]->id}}">
			            <img class="img-container-sm img-preview-sm" src="./images-all/<?= $news[$i]->imagePath ?>">
			            <p><span>{{ Str::limit($news[$i]->title),100}}</span></p>
		     				</div>
		     				@if ($i > 2)
		     					@break
		     				@endif
							@endfor					
					@endif		
					</div>			
			</div>
		</div>

	</section>

	<section id="cardSection">
		<div class="container">
			<div class="row text-light">
				<div class="col-lg">
				<h4 class="mt-1 p-4"><b>BERITA TERKINI</b></h4>
					
				</div>
				<div class="col-lg">
				<p class="mt-1 p-4 pull-right"><b>LIHAT SEMUA</b></p>
					
				</div>
			</div>
			@if (!is_null($news))
				{{-- expr --}}
				@foreach ($news as $n)
					<div class="row p-4 text-light click-news" data-id="{{$n->id}}" data-date="{{$n->created_at->format('j F Y , h:i A')}}">
							
						<div class="col-lg-4">
							<img class="img-fluid" src="./images-all/<?=$n->imagePath?>" alt="">
						</div>		
						<div class="col-lg text-left" >
							<h5><b>{{$n->title}}</b></h5>							
							<span id="dateTime">{{$n->created_at->format('j F, Y , h:i A')}}</span>
						</div>

					</div>
				@endforeach
			@endif
		</div>

			{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button> --}}
	</section>



	<div class="modal fade bd-example-modal-lg" id="view-news" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
     <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <div class="modal-body">
       	
       		<img id="img-modal" class="img-fluid mb-3" src="" alt="">
       		<div id="badges" class="row container">
       			
       		</div>
        <h4 class="text-uppercase font-weight-bold" id="text-modal">kdsjfkjdsfk</h4>
        <small id="date-modal"></small>
        <br>
        <p class="mt-4" id="content-modal"></p>
        
      </div>
    </div>
  </div>
</div>

@section('script')
	<script>
		$(document).ready(function() {
			
			if($('.navbar').length > 0){
			    $(window).on("scroll load resize", function(){
			        checkScroll();
			    });
			}
		});
		function checkScroll(){
			var startY = $('.navbar').height() * 2; //The point where the navbar changes in px

			if($(window).scrollTop() > startY){
			    $('.navbar').addClass("scrolled");
			}else{
			    $('.navbar').removeClass("scrolled");
			}

		}
	</script>

@endsection


@endsection