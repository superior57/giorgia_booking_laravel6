@extends('admin.layouts.app')
@section('content')


<div class="container-fluid">
    <div class="col-lg-12">
        <div>
            <div class='col-sm-6'>

                <h4 class='admin_title'>Hero Image</h4>
                <button id='experience_hero_save' class='admin_save'>save</button>
                <span class="change_btn fileinput-button" id='experience_hero_parent'>
                    <i class="fa fa-upload"></i>
                    <span>select</span>
                    <input type="file" name="hero_upload" id="experience_hero_upload" required="" onchange='readURL(this)'>
                </span>
                <div class='image_container' id='experience_uploaded_image'>
                    <img src="{{ asset('storage/'.$heroImage[2]['image']) }}"  class='admin_hero_image' id='experience_hero_view'>
                </div>
            </div>
            <h4 class='admin_title ml_15 mt_20'>Food</h4>

            <div id='food' style='clear:both;' class='col-12 row'>

                @foreach ($foods as $food)
                    <div class='col-md-3 col-sm-6 mt_20'>

                        <button id='food_save_{{$food->id}}' class='admin_save' onclick='saveFood(this)'>save</button>
                        <span class="change_btn fileinput-button" id="experience_food_{{$food->id}}">
                            <i class="fa fa-upload"></i>
                            <span>select</span>
                            <input type="file" id="experience_food_upload_{{$food->id}}" required="" onchange='readURL(this)'>
                        </span>
                            
                        <div class='image_container' id="food_uploaded_image_{{$food->id}}">
                            <img src="{{ asset('storage/'.$food->image) }}"  class='admin_hero_image' id="food_view_{{$food->id}}">
                        </div>
                    </div>
                @endforeach

                <div class='col-md-3 col-sm-6 mt_20'>
                    <button id='addFood' class='admin_add'>add</button>
                    <span class="change_btn fileinput-button" id="add_food">
                        <i class="fa fa-upload"></i>
                        <span>select</span>
                        <input type="file" id="add_food_upload" required="" onchange='readURL(this)'>
                    </span>
                    <div class='image_container' id="add_food_uploaded_image">
                        <img src="{{ asset('storage/'.$introduction[0]['addimage']) }}"  class='admin_hero_image' id="add_food_view">
                    </div>
                </div>
            </div>

            <div class='col-md-6' style='clear:both;'>

                <h4 class='admin_title mt_20'>Food Description</h4>
                    
                <button id='food_description_save' class='admin_save'>save</button>
                    
                <textarea name="" id="admin_food_description" class='admin_introduction'>{{$experiencetext[0]['fooddescription']}}</textarea>
            </div>

            <h4 class='admin_title ml_15 mt_20'>Toy</h4>
            <div id='toy' style='clear:both;' class='col-12 row'>

                @foreach ($toys as $toy)
                    <div class='col-md-3 col-sm-6 mt_20'>

                        <button id='toy_save_{{$toy->id}}' class='admin_save' onclick='saveToy(this)'>save</button>
                        <span class="change_btn fileinput-button" id="experience_toy_{{$toy->id}}">
                            <i class="fa fa-upload"></i>
                            <span>select</span>
                            <input type="file" id="experience_toy_upload_{{$toy->id}}" required="" onchange='readURL(this)'>
                        </span>
                            
                        <div class='image_container' id="toy_uploaded_image_{{$toy->id}}">
                            <img src="{{ asset('storage/'.$toy->image) }}"  class='admin_hero_image' id="toy_view_{{$toy->id}}">
                        </div>
                    </div>
                @endforeach

                <div class='col-md-3 col-sm-6 mt_20'>
                    <button id='addToy' class='admin_add'>add</button>
                    <span class="change_btn fileinput-button" id="add_toy">
                        <i class="fa fa-upload"></i>
                        <span>select</span>
                        <input type="file" id="add_toy_upload" required="" onchange='readURL(this)'>
                    </span>
                    <div class='image_container' id="add_toy_uploaded_image">
                        <img src="{{ asset('storage/'.$introduction[0]['addimage']) }}"  class='admin_hero_image' id="add_toy_view">
                    </div>
                </div>
            </div>
            <div class='col-md-6' style='clear:both;'>

                <h4 class='admin_title mt_20'>Toy Description</h4>
                    
                <button id='toy_description_save' class='admin_save'>save</button>
                    
                <textarea name="" id="admin_toy_description" class='admin_introduction'>{{$experiencetext[0]['toydescription']}}</textarea>
            </div>

            <h4 class='admin_title ml_15 mt_20'>Destinations</h4>
            <div id='toy' style='clear:both;' class='col-12 row'>

                @foreach ($destinations as $destination)
                    <div class='col-md-3 col-sm-6 mt_20'>

                        <button id='destination_save_{{$destination->id}}' class='admin_save' onclick='saveDestination(this)'>save</button>
                        <span class="change_btn fileinput-button" id="destination_{{$destination->id}}">
                            <i class="fa fa-upload"></i>
                            <span>select</span>
                            <input type="file" id="destination_upload_{{$destination->id}}" required="" onchange='readURL(this)'>
                        </span>
                            
                        <div class='image_container' id="destination_uploaded_image_{{$destination->id}}">
                            <img src="{{ asset('storage/'.$destination->image) }}"  class='admin_hero_image' id="toy_view_{{$destination->id}}">
                        </div>
                    </div>
                @endforeach

                <div class='col-md-3 col-sm-6 mt_20'>
                    <button id='addDestination' class='admin_add'>add</button>
                    <span class="change_btn fileinput-button" id="add_destination">
                        <i class="fa fa-upload"></i>
                        <span>select</span>
                        <input type="file" id="add_destination_upload" required="" onchange='readURL(this)'>
                    </span>
                    <div class='image_container' id="add_destination_uploaded_image">
                        <img src="{{ asset('storage/'.$introduction[0]['addimage']) }}"  class='admin_hero_image' id="add_destination_view">
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>


@endsection