@extends('master')

@section('header')
@include('layouts.header')
@endsection

@section('title')
<title>Giorgia | Home</title>
@endsection

@section('content')
<section id="section_1">
    <video id="videoBackground" class="vid-hero animated fadeIn" style="animation-delay: .1s; display: none;">
        <source src="video/back.mp4" type="video/mp4">
    </video>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <!-- <img src="images/image-1.png" class="water-image animated fadeInUp"> -->
                <!-- <h3 class="animated fadeIn" style="animation-delay: .8s;">WELCOME TO MY Giorgia </h3> -->
                <h1 class="animated fadeIn" style="animation-delay: .3s;">Understated Elegance<br>with a  Contemporary Edge</h1>
                <br>
                <!-- <div class="discover-more animated fadeInDown" onclick="javascript:playVideo();">
                    <a href="#" class="button-discovor" id="videoPlay">Watch Video</a>
                </div> -->
            </div>
        </div>
</section>
<section id="section_2">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="">
                    <!-- <h3 class="animated fadeInLeft" style="animation-delay: .8s;">ABOUT MY Giorgia</h3>
                    <h2 class="animated fadeInLeft" style="animation-delay: .5s;">Understated Elegance with a
                        Contemporary Edge</h2> -->
                    <p class="animated fadeInLeft text-justify" style="animation-delay: .1s; font-size: 1.2rem;">There is simply no better way to
                        experience the sun and sea than the combination of luxury and
                        privacy offered by a bespoke vacation aboard Motor Yacht Giorgia. Embark on a hedonistic voyage
                        specially designed to give you and your guests a whole body, mind, and spirit Zen immersion on
                        this
                        37-meter floating oasis. Far from the crowds and restrictions of other holiday options, our
                        wellness inspired yachting retreat features massage, yoga, nutritional health, and so much more.
                        Your yachting experience can be tailored to accommodate every need and desire, providing a sense
                        of
                        freedom and flexibility that is truly unrivalled.</p>
                    <div class="learn-more animated fadeInUp">
                        <a href="#" class="button-discovor">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-4">
                <div class="image-dv animated fadeInRight" style="animation-delay: 0.1s;">
                    <img src="images/image-1.jpg">
                </div>
            </div>
        </div>
    </div>
</section>
<section id="section_3">
    <div class="container">
        <div class="text-center mb-4">
            <!-- <h3>Special Features</h3> -->
            <!-- <h2 class="animated fadeIn" style="animation-delay: 0.2s;">What We Offer</h2> -->
        </div>
        <div class="row animated">
            <div class="col-md-6 animated fadeInLeft wow">
                <div class="image-dv text-center">
					<h4 class="top-subtitle">Interior</h4>
					<!-- <img src="images/image-5.png">                     -->
					<div class="owl-carousel offer">
						<div class="item active">
							<img src="{{asset('images/image-5.png')}}">
						</div>
						<div class="item">
							<img src="{{asset('images/interior/3.jpg')}}">
						</div>
						<div class="item">
							<img src="{{asset('images/interior/9.jpg')}}">
						</div>
						<div class="item">
							<img src="{{asset('images/interior/22.jpeg')}}">
						</div>
					</div>
                    <p>MY Giorgia can accommodate up to ten guests in five well-appointed staterooms, all featuring
                        ensuite marble bathrooms. </p>
                    <div class="learn-more">
                        <a href="#" class="button-discovor">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animated fadeInRight wow" style="animation-delay: .4s;">
                <div class="image-dv text-center">
					<h4 class="top-subtitle">Exterior</h4>
					<!-- <img src="images/image-6.png"> -->
					<div class="owl-carousel offer">
						<div class="item active">
							<img src="{{asset('images/image-6.png')}}">
						</div>
						<div class="item">
							<img src="{{asset('images/exterior/12.jpeg')}}">
						</div>
						<div class="item">
							<img src="{{asset('images/exterior/13.jpeg')}}">
						</div>
						<div class="item">
							<img src="{{asset('images/exterior/25.jpeg')}}">
						</div>
					</div>
                    <p>Giorgia is a true masterpiece of high-end yachting design, featuring teak beams and elegant,
                        no-fuss exteriors. </p>
                    <div class="learn-more">
                        <a href="#" class="button-discovor">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="section_4">
    <div class="container">
        <div class="col-md-12">
            <div class="table-specification">
                <!-- <div class="spec-head wow animated fadeIn">Our Specifications</div> -->
                <div class="owl-carousel">
                    <div class="item active">
                        <table class="specification">
                            <tbody>
                                <tr>
                                    <td>36.6 metres <span>Long</span></td>
                                </tr>
                                <tr>
                                    <td>7.86 metres <span>Beam</span></td>
                                </tr>
                                <tr>
                                    <td>1.96 metres <span>Draft</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="item">
                        <table class="specification">
                            <tbody>
                                <tr>
                                    <td>2009 <span>Built</span></td>
                                </tr>
                                <tr>
                                    <td>Azimut Benetti SpA <span>Builder</span></td>
                                </tr>
                                <tr>
                                    <td>2 x Caterpillar C32 1550 bhp <span>Engines</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="item">
                        <table class="specification">
                            <tbody>
                                <tr>
                                    <td>Isle of Man</td>
                                </tr>
                                <tr>
                                    <td>Glass-Reinforced Plastic <span>Hull</span></td>
                                </tr>
                                <tr>
                                    <td>Displacement <span>Hull Type</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="item">
                        <table class="specification">
                            <tbody>
                                <tr>
                                    <td>5 <span>Cabins</span></td>
                                </tr>
                                <tr>
                                    <td>Up to 10 <span>Guests</span></td>
                                </tr>
                                <tr>
                                    <td>7 <span>Crew</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="item">
                        <table class="specification">
                            <tbody>
                                <tr>
                                    <td>13 knots (cruising) 16 knots (max) <span>Speed</span></td>
                                </tr>
                                <tr>
                                    <td>3,500 mm <span>Range</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="section_5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 wow animated fadeInDown">
                <div class="image-dv text-center">
                    <img src="images/image-8.png">
                    <h4 class="bottom-subtitle top-subtitle">Food</h4>
                    <!-- <p>Sami duble bed 2 window & mountain view. 24 Hours room service. <br>
                        Free Wifi / Cable Tv / Breakfast
                    </p> -->
                    <div class="learn-more">
                        <a href="#" class="button-discovor">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow animated fadeInDown" style="animation-delay: .4s;">
                <div class="image-dv text-center">
                    <img src="images/image-9.png">
                    <h4 class="bottom-subtitle top-subtitle">Toys</h4>
                    <!-- <p>Sami duble bed and single veranda. A guest room and furniture.<br>
                        Free Wifi / Cable Tv / Breakfast
                    </p> -->
                    <div class="learn-more">
                        <a href="#" class="button-discovor">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow animated fadeInDown" style="animation-delay: .8s;">
                <div class="image-dv text-center">
                    <img src="images/image-10.png">
                    <h4 class="bottom-subtitle top-subtitle">Location</h4>
                    <!-- <p>Single bed and single window. Include a sofa and other small furniture <br>
                        Free Wifi / Cable Tv / Breakfast
                    </p> -->
                    <div class="learn-more">
                        <a href="#" class="button-discovor">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@section('footer')
@include('layouts.footer')
@endsection
@push('scripts')
<script>
      var vid = document.getElementById("videoBackground");
      var videoButton = document.getElementById('videoPlay');
      var videoButtonText = "Watch Video";
      if ($('.wow').length) {
         var wow = new WOW(
            {
               boxClass: 'wow',      // animated element css class (default is wow)
               animateClass: 'animated', // animation css class (default is animated)
               offset: 0,          // distance to the element when triggering the animation (default is 0)
               mobile: true,       // trigger animations on mobile devices (default is true)
               live: true       // act on asynchronously loaded content (default is true)
            }
         );
         wow.init();
      }
      $('.owl-carousel').owlCarousel({
         loop: true,
         margin: 10,
         dots: false,
         nav: false,
         mouseDrag: false,
         autoplay: true,
         animateIn: "fadeIn",
         animateOut: "fadeOut",
         autoplayTimeout: 6000,
         responsive: {
            0: {
               items: 1
            },
         }
      });
      function playVideo (){
         if(videoButtonText === "Stop Watch") {
            videoButtonText = "Watch Video";
            vid.pause();
         } else {
            videoButtonText = "Stop Watch";
            vid.style.display = "block";
            vid.play();
         }
         videoButton.textContent = videoButtonText;
      }
   </script>
@endpush