
@extends('master')

@section('header')
@include('layouts.header')
@endsection
    
@section('content')
    <div class="hero-wrap ftco-degree-bg" style="background-image: url(<?php  echo $heroImage[2]['image']; ?>);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
	</div>
	<section class="ftco-section testimony-section">
      	<div class="container">
		  	<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ftco-animate mb-5">
					<span class="subheading">{{$texts[0]['food']}}</span>
				</div>
			</div>

        	<div class="row ftco-animate" style='diaplay:flex;align-items:center;'>
          		<div class="col-md-6">
            		<div class="carousel-testimony owl-carousel ">
						@foreach ($foods as $food)
						<div class="item">
						  	<img src="{{ asset($food->image) }}" style="width:100%;">
              			</div>
						@endforeach
            		</div>
				</div>
				<div class="col-md-6">
					<p>{{$texts[0]['fooddescription']}}</p>
          		</div>
        	</div>
		</div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ftco-animate mb-5">
					<span class="subheading">{{$texts[0]['toy']}}</span>
				</div>
			</div>

        	<div class="row ftco-animate" style='diaplay:flex;align-items:center;'>
          		<div class="col-md-6">
            		<div class="carousel-testimony owl-carousel ">
						@foreach ($toys as $toy)
						<div class="item">
						  	<img src="{{ asset($toy->image) }}" style="width:100%;">
              			</div>
						@endforeach
            		</div>
				</div>
				<div class="col-md-6">
					<pre class='toy_description'>{{$texts[0]['toydescription']}}</pre>
          		</div>
        	</div>
      	</div>
	</section>

	<section class="ftco-section ftco-agent ftco-no-pt">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">{{$texts[0]['destination']}}</span>
				</div>
        	</div>
			<div class="row">
				@foreach ($destinations as $destination)
				<div class="col-md-4 ftco-animate">
					<div class="agent">
						<div class="img">
							<img src="{{ asset($destination->image) }}" class="img-fluid">
						</div>
					</div>
				</div>
				@endforeach
			</div>
    	</div>
    </section>


@endsection
@section('footer')
@include('layouts.footer')
@endsection
