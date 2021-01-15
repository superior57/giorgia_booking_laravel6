
@extends('master')

@section('header')
@include('layouts.header')
@endsection
    
@section('content')
    <div class="hero-wrap ftco-degree-bg" style="background-image: url(<?php  echo $heroImage[4]['image']; ?>);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
	</div>
	<section class="ftco-section ftco-no-pb">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ftco-animate mb-5">
					<span class="subheading">{{$bookingtitle[0]['bookingtitle']}}</span>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section contact-section">
      	<div class="container">

			<div class="row block-9 justify-content-center mb-5 ftco-animate">
				<div class="col-md-8 mb-md-5">
					<form action="#" class="bg-light p-5 contact-form">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="First Name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Last Name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Email Address">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Mobile Number">
						</div>
						<div class="form-group">
							<input type="date" class="form-control" placeholder="Check in Date">
						</div>
						<div class="form-group">
							<input type="date" class="form-control" placeholder="Check out Date">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Number of passengers (adults, kids under 18)">
						</div>
						<div class="form-group">
							<textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Dietary requirements"></textarea>
						</div>
						<div class="form-group">
							<textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Other requirements"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" value="BOOK" class="btn btn-primary py-3 px-5">
						</div>
					</form>
				</div>
			</div>
          
		</div>
		
    </section>


@endsection
@section('footer')
@include('layouts.footer')
@endsection
