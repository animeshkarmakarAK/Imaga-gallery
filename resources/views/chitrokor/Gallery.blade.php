@extends('layout.app')
@section('body-content')
{{-- <section class="ftco-section bg-light ftco-bread"> --}}
	{{-- <div class="container"> --}}
		<div class="row no-gutters slider-text align-items-center">
			<div class="col-md-9 ftco-animate">
				<p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/home') }}">Home</a></span> <span>Gallery</span></p>
				<h1 class="mb-3 bread">Galleries</h1>
				<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
			</div>
		</div>
	{{-- </div> --}}
{{-- </section> --}}
<section class="ftco-section-2">
	<div class="photograhy">
		<div class="row no-gutters">
			@foreach($images as $image)
			<div class="col-md-4 ftco-animate">
				<a href="{{ asset('/app/public/'.$image->image) }}" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image:  url(/app/public/{{$image->image}}) ">
					<div class="overlay"></div>
					<div class="text text-center">
						<h3>{{$image->author}}</h3>
						<span class="tag">{{$image->photo_name, $image->description}}</span>
					</div>
				</a>
			</div>
			@endforeach
		</div>
	</div>
</section>
{{-- <section class="ftco-section-2">
	<div class="photograhy">
		<div class="row no-gutters">
			@foreach($images as $image)
			<div class="col-md-4 ftco-animate">
				{{-- <img src="Storage::{{ url('/storage/app/{{$image->image}}')"> --}}
				{{-- {{$image->image}} --}}
				{{-- <img src="<?php echo asset("storage/$image->image")?>"> --}}
				{{-- <img src="{{ asset('storage/{{$image->image}}') }}"> --}}
				{{-- <img src="/storage/app/{{$image->image}}"> --}}
				<img {{-- s --}}rc="{{Storage::get($image->image)}}" alt="what is this ?">
				{{-- <a href="public/storage/{{$image->image}}" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url('public/storage/{{$image->image}}');"> --}}
					{{--<div class="overlay"></div>
					<div class="text text-center">
						<h3>{{$image->photo_name}}</h3>
						<span class="tag">{{$image->description}}</span>
						<span class="tag">{{$image->id}}</span>
					</div>
				</a>
			</div>
			@endforeach
		</div>
	</div>
</section> --}}
@endsection