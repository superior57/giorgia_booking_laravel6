
@extends('master')

@section('header')
@include('layouts.header')
@endsection
    
@section('content')
    <div class="hero-wrap ftco-degree-bg" style="background-image: url(<?php  echo $heroImage[1]['image']; ?>);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
	</div>
	
	<section class="ftco-section ftco-no-pb">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ftco-animate mb-5">
					<span class="subheading">{{$text[0]['title']}}</span>
				</div>
			</div>
			<div class="row d-flex">
				<div class="d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services d-block text-center">
						<div class="media-body py-md-4">
							<p>{{$text[0]['intro']}}</p>
						</div>
					</div>      
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section testimony-section">
      	<div class="container">
		  	<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ftco-animate mb-5">
					<span class="subheading">{{$text[0]['interiortitle']}}</span>
				</div>
			</div>

        	<div class="row ftco-animate" style='diaplay:flex;align-items:center;'>
          		<div class="col-md-6">
            		<div class="carousel-testimony owl-carousel ">
						@foreach ($errors as $interior)
						<div class="item">
						  	<img src="{{ asset($interior->image) }}" style="width:100%;">
              			</div>
						@endforeach
            		</div>
				</div>
				<div class="col-md-6">
					<p>{{$text[0]['interior']}}</p>
          		</div>
        	</div>
		</div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ftco-animate mb-5">
					<span class="subheading">{{$text[0]['exteriortitle']}}</span>
				</div>
			</div>

        	<div class="row ftco-animate" style='diaplay:flex;align-items:center;'>
          		<div class="col-md-6">
            		<div class="carousel-testimony owl-carousel ">
						@foreach ($exteriors as $exterior)
						<div class="item">
						  	<img src="{{ asset($exterior->image) }}" style="width:100%;">
              			</div>
						@endforeach
            		</div>
				</div>
				<div class="col-md-6">
					<p>{{$text[0]['exterior']}}</p>
          		</div>
        	</div>
      	</div>
	</section>
	<section class="ftco-section testimony-section">
      	<div class="container">
		  	<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ftco-animate mb-5">
					<span class="subheading">{{$text[0]['specification']}}</span>
				</div>
			</div>
        	<div class="row ftco-animate" style='diaplay:flex;align-items:center;'>
          		<div class="col-md-6">
				  	<table class='specification_table'>
						<tr>
							<th>Length</th>
							<td>{{$specification['length']}}</td>
						</tr>
						<tr>
							<th>Beam</th>
							<td>{{$specification['beam']}}</td>
						</tr>
						<tr>
							<th>Draft</th>
							<td>{{$specification['draft']}}</td>
						</tr>
						<tr>
							<th>Built</th>
							<td>{{$specification['built']}}</td>
						</tr>
						<tr>
							<th>Builder</th>
							<td>{{$specification['builder']}}</td>
						</tr>
						<tr>
							<th>Engines</th>
							<td>{{ $specification['engines']}}</td>
						</tr>
						<tr>
							<th>Flag</th>
							<td><img src="{{ asset($specification['flag']) }}"></td>
						</tr>
						<tr>
							<th>Hull</th>
							<td>{{ $specification['hull']}}</td>
						</tr>
						<tr>
							<th>Hull Type</th>
							<td>{{ $specification['hull_type']}}</td>
						</tr>
						<tr>
							<th>Cabins</th>
							<td>{{ $specification['cabins']}}</td>
						</tr>
						<tr>
							<th>Guests</th>
							<td>{{ $specification['guests']}}</td>
						</tr>
						<tr>
							<th>Crew</th>
							<td>{{ $specification['crew']}}</td>
						</tr>
						<tr>
							<th>Speed</th>
							<td>{{ $specification['speed']}}</td>
						</tr>
						<tr>
							<th>Range</th>
							<td><?php echo $specification['range']; ?></td>
						</tr>
					</table>
				</div>
				<div class="col-md-6">
					<div class='deck'><img src="{{ asset($decks[0]['image']) }}"></div>
					<div class='deck'><img src="{{ asset($decks[1]['image']) }}"></div>
					<div class='deck'><img src="{{ asset($decks[2]['image']) }}"></div>
					<div class='deck'><img src="{{ asset($decks[3]['image']) }}"></div>
          		</div>
        	</div>
		</div>
		  
    </section>

@endsection
@section('footer')
@include('layouts.footer')
@endsection
