@extends('admin.layouts.app')
@section('content')


<div class="container-fluid">
    <div class="col-lg-12">
        <div>
            <div class='col-sm-6'>

                <h4 class='admin_title'>Hero Image</h4>
                <button id='enquire_hero_save' class='admin_save'>save</button>
                <span class="change_btn fileinput-button" id='enquire_hero_parent'>
                    <i class="fa fa-upload"></i>
                    <span>select</span>
                    <input type="file" id="enquire_hero_upload" required="" onchange='readURL(this)'>
                </span>
                <div class='image_container' id='enquire_uploaded_image'>
                    <img src="{{ asset('storage/'.$heroImage[4]['image']) }}"  class='admin_hero_image' id='enquire_hero_view'>
                </div>
            </div>
            
        </div>
    </div>
</div>


@endsection