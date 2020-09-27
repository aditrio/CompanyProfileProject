@extends('Pages.layouts.app')

@section('title', "Berita")

@section('content')
	 
	<section id="cardSection" >
		<div class="container text-light">			
			<div class="row justify-content-center">
				<div class="col-lg pt-4 pb-4" style="margin-left: -300px;">
						<div class="img-holder">
	            <img class="img-container img-preview" src="./images-all/<?= $news[0]->imagePath ?>">
	            <p><b>{{ Str::limit($news[0]->title),100}}</b></p>
	            <span>{{$news[0]->created_at->format('j F, Y , h:i A')}}</span>
     				</div>
				</div>				
					<div class="col-lg-3 pt-4 pb-4 " style="margin-left: -300px;">				
							@for ($i = 1; $i < count($news); $i++)
								<div class="img-holder-sm">
			            <img class="img-container-sm img-preview-sm" src="./images-all/<?= $news[$i]->imagePath ?>">
			            <p><span>{{ Str::limit($news[$i]->title),100}}</span></p>
		     				</div>
		     				@if ($i > 2)
		     					@break
		     				@endif
							@endfor					
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
		</div>

			<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>
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
       	
       		<img id="img-modal" class="img-fluid mb-3" src="./images-all/<?=$news[0]->imagePath?>" alt="">
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

@endsection