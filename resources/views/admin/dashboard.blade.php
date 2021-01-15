@extends('admin.layouts.app')
@section('content')


<div class="container-fluid">
    <div class="col-lg-12">
    <h4 class='admin_title'>Hero Image</h4>
        <div class='row'>

            @foreach ($heroImages as $heroImage)
            <div class='col-md-3 col-sm-6 mt_20'>
                <button id='home_hero_save_{{$heroImage->id}}' class='admin_save' onclick="saveHomeHero(this)">save</button>
                <span class="change_btn fileinput-button" id='hero_parent_{{$heroImage->id}}'>
                    <i class="fa fa-upload"></i>
                    <span>select</span>
                    <input type="file" id="hero_upload_{{$heroImage->id}}" required="" onchange='readURL(this)'>
                </span>
                <div class='image_container' id='uploaded_image_{{$heroImage->id}}'>
                    <img src="{{ asset('storage/'.$heroImage->image) }}"  class='admin_hero_image' id='hero_view_{{$heroImage->id}}'>
                </div>
            </div>
            @endforeach

            <div class='col-md-3 col-sm-6 mt_20'>
                <button id='home_hero_add' class='admin_add'>add</button>
                <span class="change_btn fileinput-button" id="home_add_hero">
                    <i class="fa fa-upload"></i>
                    <span>select</span>
                    <input type="file" id="home_add_hero_upload" required="" onchange='readURL(this)'>
                </span>
                <div class='image_container' id="add_hero_uploaded_image">
                    <img src="{{ asset('storage/'.$introduction[0]['addimage']) }}"  class='admin_hero_image' id="add_hero_view">
                </div>
            </div>
        
        </div>
            <div class='col-sm-6' style='clear:both;'>

                <h4 class='admin_title mt_20'>Introduction</h4>
                    
                <button id='home_introduction_save' class='admin_save'>save</button>
                    
                <textarea name="" id="admin_home_introduction" class='admin_introduction'>{{$introduction[0]['text']}}</textarea>
            </div>
            

            <h4 class='admin_title ml_15 mt_20'>Interior</h4>

            <div id='interior' style='clear:both;' class='col-12 row'>

                @foreach ($interiors as $interior)
                    <div class='col-md-3 col-sm-6 mt_20'>

                        <button id='interior_save_{{$interior->id}}' class='admin_save' onclick='saveInterior(this)'>save</button>
                        <span class="change_btn fileinput-button" id="home_interior_{{$interior->id}}">
                            <i class="fa fa-upload"></i>
                            <span>select</span>
                            <input type="file" name="hero_upload" id="home_interior_upload_{{$interior->id}}" required="" onchange='readURL(this)'>
                        </span>
                            
                        <div class='image_container' id="interior_uploaded_image_{{$interior->id}}">
                            <img src="{{ asset('storage/'.$interior->image) }}"  class='admin_hero_image' id="interior_view_{{$interior->id}}">
                        </div>
                    </div>
                @endforeach

                <div class='col-md-3 col-sm-6 mt_20'>
                    <button id='addInterior' class='admin_add'>add</button>
                    <span class="change_btn fileinput-button" id="home_add_interior">
                        <i class="fa fa-upload"></i>
                        <span>select</span>
                        <input type="file" name="hero_upload" id="home_add_interior_upload" required="" onchange='readURL(this)'>
                    </span>
                    <div class='image_container' id="add_interior_uploaded_image">
                        <img src="{{ asset('storage/'.$introduction[0]['addimage']) }}"  class='admin_hero_image' id="add_interior_view">
                    </div>
                </div>
            </div>

            <h4 class='admin_title ml_15 mt_20'>Exterior</h4>
            <div id='exterior' style='clear:both;' class='col-12 row'>

                @foreach ($exteriors as $exterior)
                    <div class='col-md-3 col-sm-6 mt_20'>

                        <button id='exterior_save_{{$exterior->id}}' class='admin_save' onclick='saveExterior(this)'>save</button>
                        <span class="change_btn fileinput-button" id="home_exterior_{{$exterior->id}}">
                            <i class="fa fa-upload"></i>
                            <span>select</span>
                            <input type="file" id="home_exterior_upload_{{$exterior->id}}" required="" onchange='readURL(this)'>
                        </span>
                            
                        <div class='image_container' id="exterior_uploaded_image_{{$exterior->id}}">
                            <img src="{{ asset('storage/'.$exterior->image) }}"  class='admin_hero_image' id="exterior_view_{{$exterior->id}}">
                        </div>
                    </div>
                @endforeach

                <div class='col-md-3 col-sm-6 mt_20'>
                    <button id='addExterior' class='admin_add'>add</button>
                    <span class="change_btn fileinput-button" id="home_add_exterior">
                        <i class="fa fa-upload"></i>
                        <span>select</span>
                        <input type="file" name="hero_upload" id="home_add_exterior_upload" required="" onchange='readURL(this)'>
                    </span>
                    <div class='image_container' id="add_exterior_uploaded_image">
                        <img src="{{ asset('storage/'.$introduction[0]['addimage']) }}"  class='admin_hero_image' id="add_exterior_view">
                    </div>
                </div>
            </div>


            <div style='clear:both;margin-top:30px;' class='col-12 row'>
                
                    <div class='col-sm-4 '>
                        <h4 class='admin_title'>Food</h4>
                        <button id='home_food_save' class='admin_save'>save</button>
                        <span class="change_btn fileinput-button" id='food_parent'>
                            <i class="fa fa-upload"></i>
                            <span>select</span>
                            <input type="file" id="food_upload" required="" onchange='readURL(this)'>
                        </span>
                        <div class='image_container' id='uploaded_food'>
                            <img src="{{ asset('storage/'.$introduction[0]['food']) }}"   class='admin_hero_image' id='food_view'>
                        </div>
                    </div>
                
                    <div class='col-sm-4'>
                        <h4 class='admin_title'>Toy</h4>
                        <button id='home_toy_save' class='admin_save'>save</button>
                        <span class="change_btn fileinput-button" id='toy_parent'>
                            <i class="fa fa-upload"></i>
                            <span>select</span>
                            <input type="file" id="toy_upload" required="" onchange='readURL(this)'>
                        </span>
                        <div class='image_container' id='uploaded_toy'>
                            <img src="{{ asset('storage/'.$introduction[0]['toy']) }}" class='admin_hero_image' id='toy_view'>
                        </div>
                    </div>
                
                    <div class='col-sm-4'>
                        <h4 class='admin_title'>Location</h4>
                        <button id='home_location_save' class='admin_save'>save</button>
                        <span class="change_btn fileinput-button" id='location_parent'>
                            <i class="fa fa-upload"></i>
                            <span>select</span>
                            <input type="file" id="location_upload" required="" onchange='readURL(this)'>
                        </span>
                        <div class='image_container' id='uploaded_location'>
                            <img src="{{ asset('storage/'.$introduction[0]['location']) }}"  class='admin_hero_image' id='location_view'>
                        </div>
                    </div>
                
            </div>
        
    </div>
</div>


@endsection