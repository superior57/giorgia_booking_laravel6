@extends('admin.layouts.app')
@section('content')


<div class="container-fluid">
    
    <div class="col-lg-12">

      <div class='col-md-6'>
            <h4 class='admin_title'>Hero Image</h4>
            <button id='vessel_hero_save' class='admin_save'>save</button>
            <span class="change_btn fileinput-button" id='vessel_hero_parent'>
                <i class="fa fa-upload"></i>
                <span>select</span>
                <input type="file" id="vessel_hero_upload" required="" onchange='readURL(this)'>
            </span>
            <div class='image_container' id='vessel_uploaded_image'>
                <img src="{{ asset('storage/'.$heroImage[1]['image']) }}"  class='admin_hero_image' id='vessel_hero_view'>
            </div>
        </div>

        <div class='col-md-6' style='clear:both;'>

            <h4 class='admin_title mt_20'>Introduction</h4>
                
            <button id='vessel_introduction_save' class='admin_save'>save</button>
                
            <textarea name="" id="admin_vessel_introduction" class='admin_introduction'>{{$text[0]['intro']}}</textarea>
        </div>

        <div class='col-md-6' style='clear:both;'>

            <h4 class='admin_title mt_20'>Interior Description</h4>
                
            <button id='vessel_interiortext_save' class='admin_save'>save</button>
                
            <textarea name="" id="admin_vessel_interiortext" class='admin_introduction'>{{$text[0]['interior']}}</textarea>
        </div>

        <div class='col-md-6' style='clear:both;'>

            <h4 class='admin_title mt_20'>Exterior Description</h4>
                
            <button id='vessel_exteriortext_save' class='admin_save'>save</button>
                
            <textarea name="" id="admin_vessel_exteriortext" class='admin_introduction'>{{$text[0]['exterior']}}</textarea>
        </div>

        <div class="col-md-6 specification" style='clear:both;'>

            <h4 class='admin_title mt_20'>Specification</h4>

            <label for="length">Length</label>
            <input type="text" id='length' value="{{$specification['length']}}" class='specification_input'>

            <label for="beam">Beam</label>
            <input type="text" id='beam' value="{{$specification['beam']}}" class='specification_input' >

            <label for="draft">Draft</label>
            <input type="text" id='draft' value="{{$specification['draft']}}" class='specification_input'>

            <label for="built">Built</label>
            <input type="text" id='built' value="{{$specification['built']}}" class='specification_input'>

            <label for="builder">Builder</label>
            <input type="text" id='builder' value="{{$specification['builder']}}" class='specification_input'>

            <label for="engines">Engines</label>
            <input type="text" id='engines' value="{{$specification['engines']}}" class='specification_input'>

            <label for="" style='display:block;'>Flag</label>
            <span class="change_btn fileinput-button" id='flag_parent'>
                <i class="fa fa-upload"></i>
                <span>select</span>
                <input type="file" id="flag_upload" required="" onchange='readURL(this)'>
            </span>
            <div class='image_container' id='flag_image'>
                <img src="{{ asset('storage/'.$specification['flag']) }}"  class='admin_hero_image' id='flag_view'>
            </div>

            <label for="hull">Hull</label>
            <input type="text" id='hull' value="{{ $specification['hull']}}" class='specification_input'>

            <label for="hull_type">Hull Type</label>
            <input type="text" id='hull_type' value="{{ $specification['hull_type']}}" class='specification_input'>

            <label for="cabins">Cabins</label>
            <input type="text" id='cabins' value="{{ $specification['cabins']}}" class='specification_input'>

            <label for="guests">Guests</label>
            <input type="text" id='guests' value="{{ $specification['guests']}}" class='specification_input'>

            <label for="crew">Crew</label>
            <input type="text" id='crew' value="{{ $specification['crew']}}" class='specification_input'>

            <label for="speed">Speed</label>
            <input type="text" id='speed' value="{{ $specification['speed']}}" class='specification_input'>

            <label for="range">Range</label>
            <input type="text" id='range' value="{{ $specification['range']}}" class='specification_input'>
            <button id='specification_save' class='admin_save'>save</button>
            
        </div> 

        <div style='clear:both;margin-top:30px;' class='col-12 row'>
                
            <div class='col-sm-6 col-md-3'>
                <h4 class='admin_title'>Deck1</h4>
                <button id='deck1_save' class='admin_save'>save</button>
                <span class="change_btn fileinput-button" id='deck1_parent'>
                    <i class="fa fa-upload"></i>
                    <span>select</span>
                    <input type="file" id="deck1_upload" required="" onchange='readURL(this)'>
                </span>
                <div class='image_container' id='uploaded_deck1'>
                    <img src="{{ asset('storage/'.$decks[0]['image']) }}"   class='admin_hero_image' id='deck1_view'>
                </div>
            </div>

            <div class='col-sm-6 col-md-3'>
                <h4 class='admin_title'>Deck2</h4>
                <button id='deck2_save' class='admin_save'>save</button>
                <span class="change_btn fileinput-button" id='deck2_parent'>
                    <i class="fa fa-upload"></i>
                    <span>select</span>
                    <input type="file" id="deck2_upload" required="" onchange='readURL(this)'>
                </span>
                <div class='image_container' id='uploaded_deck2'>
                    <img src="{{ asset('storage/'.$decks[1]['image']) }}"   class='admin_hero_image' id='deck2_view'>
                </div>
            </div>

            <div class='col-sm-6 col-md-3'>
                <h4 class='admin_title'>Deck3</h4>
                <button id='deck3_save' class='admin_save'>save</button>
                <span class="change_btn fileinput-button" id='deck3_parent'>
                    <i class="fa fa-upload"></i>
                    <span>select</span>
                    <input type="file" id="deck3_upload" required="" onchange='readURL(this)'>
                </span>
                <div class='image_container' id='uploaded_deck3'>
                    <img src="{{ asset('storage/'.$decks[2]['image']) }}"   class='admin_hero_image' id='deck3_view'>
                </div>
            </div>

            <div class='col-sm-6 col-md-3'>
                <h4 class='admin_title'>Deck4</h4>
                <button id='deck4_save' class='admin_save'>save</button>
                <span class="change_btn fileinput-button" id='deck4_parent'>
                    <i class="fa fa-upload"></i>
                    <span>select</span>
                    <input type="file" id="deck4_upload" required="" onchange='readURL(this)'>
                </span>
                <div class='image_container' id='uploaded_deck4'>
                    <img src="{{ asset('storage/'.$decks[3]['image']) }}"   class='admin_hero_image' id='deck4_view'>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection