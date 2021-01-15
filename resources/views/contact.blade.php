
@extends('master')

@section('header')
@include('layouts.header')
@endsection
    
@section('content')
    <div class="hero-wrap ftco-degree-bg" style="background-image: url(<?php  echo $heroImage[5]['image']; ?>);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
	</div>



	<section class="ftco-section contact-section">
      	<div class="container">

			<div class="row block-9 justify-content-center mb-5 ftco-animate">
				<div class="col-md-8 mb-md-5">
					<h2 class="text-center">If you got any questions <br>please do not hesitate to send us a message</h2>
					<form action="#" class="bg-light p-5 contact-form">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Your Name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Your Email">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Subject">
						</div>
						<div class="form-group">
							<textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
						</div>
					</form>
				</div>
			</div>

			<div class="row d-flex mb-5 contact-info justify-content-center ftco-animate">
        		<div class="col-md-8">
        			<div class="row mb-5">
		          		<div class="col-md-4 text-center py-4">
							<div class="icon">
								<span class="icon-map-o"></span>
							</div>
		            		<p><span>Address:</span>{{$contactMethods[0]['address']}}</p>
		          		</div>
		          		<div class="col-md-4 text-center border-height py-4">
							<div class="icon">
								<span class="icon-mobile-phone"></span>
							</div>
		            		<p><span>Phone:</span> <a href="tel:{{$contactMethods[0]['phone']}}">+ {{$contactMethods[0]['phone']}}</a></p>
		        		</div>
		          		<div class="col-md-4 text-center py-4">
							<div class="icon">
								<span class="icon-envelope-o"></span>
							</div>
		            		<p><span>Email:</span> <a href="mailto:{{$contactMethods[0]['email']}}">{{$contactMethods[0]['email']}}</a></p>
		          		</div>
		        	</div>
          		</div>
			</div>
			
            <div class="ftco-footer-widget mb-4 ftco-animate" style='text-align:center;'>
				<ul class="ftco-footer-social list-unstyled mt-5">
					<li class="ftco-animate"><a href="{{$contactMethods[0]['twitter']}}"><span class="icon-twitter"></span></a></li>
					<li class="ftco-animate"><a href="{{$contactMethods[0]['facebook']}}"><span class="icon-facebook"></span></a></li>
					<li class="ftco-animate"><a href="{{$contactMethods[0]['instagram']}}"><span class="icon-instagram"></span></a></li>
				</ul>
            </div>
          
		</div>
		
    </section>

@endsection
@section('footer')
@include('layouts.footer')
@endsection
