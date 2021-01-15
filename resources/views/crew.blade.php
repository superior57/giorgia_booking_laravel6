
@extends('master')

@section('header')
@include('layouts.header')
@endsection
    
@section('content')
    <div class="hero-wrap ftco-degree-bg" style="background-image: url(<?php  echo $heroImage[3]['image']; ?>);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
	</div>
	<section class="ftco-section ftco-no-pb">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ftco-animate mb-5">
					<span class="subheading">{{$crewtext[0]['crewtitle']}}</span>
				</div>
			</div>
		</div>
	</section>
	@foreach ($crewmembers as $crewmember)
	<section class="ftco-section testimony-section" style='background-color:{{$crewmember->backgroundcolor}};'>
      	<div class="container wrap-about">
        	<div class="row ftco-animate heading-section" style="display:flex;align-items:center;padding:20px;">
          		<div class="col-sm-3">
					<div class="item">
						<img src="{{ asset($crewmember->image) }}" style="width:100%;border-radius:50%;">
					</div>
				</div>
				<div class="col-sm-9 explain_text_container">
					<h4 style='float:left;'>{{$crewmember->name}}</h4>
					<h4 style='float:right;'>{{$crewmember->position}}</h4>
					<p style='clear:both;'>{{$crewmember->text}}</p>
          		</div>
        	</div>
		</div>
	</section>
	@endforeach

@endsection
@section('footer')
@include('layouts.footer')
@endsection
