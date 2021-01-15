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
                    <img src="{{ asset('storage/'.$heroImage[5]['image']) }}"  class='admin_hero_image' id='enquire_hero_view'>
                </div>
            </div>

            <div class='col-md-6' style='clear:both;'>

                <h4 class='admin_title mt_20'>Address</h4>
                <input type="text" class='specification_input' id='admin_address' value="{{$contactmethod[0]['address']}}">

                <h4 class='admin_title mt_20'>Telephone</h4>
                <input type="text" class='specification_input' id='admin_phone' value="{{$contactmethod[0]['phone']}}">

                <h4 class='admin_title mt_20'>Email</h4>
                <input type="text" class='specification_input' id='admin_email' value="{{$contactmethod[0]['email']}}">
                <h4 class='admin_title mt_20'>facebook link</h4>
                <input type="text" class='specification_input' id='admin_facebook' value="{{$contactmethod[0]['facebook']}}">
                <h4 class='admin_title mt_20'>twitter link</h4>
                <input type="text" class='specification_input' id='admin_twitter' value="{{$contactmethod[0]['twitter']}}">
                <h4 class='admin_title mt_20'>instagram link</h4>
                <input type="text" class='specification_input' id='admin_instagram' value="{{$contactmethod[0]['instagram']}}">
                <button id='contact_save' class='admin_save'>save</button>
            </div>
        </div>
    </div>
</div>


@endsection