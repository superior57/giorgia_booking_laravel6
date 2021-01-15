@extends('admin.layouts.app')
@section('content')


<div class="container-fluid">
    <div class="col-lg-12">
        <div>
            <div class='col-sm-6'>

                <h4 class='admin_title'>Hero Image</h4>
                <button id='crew_hero_save' class='admin_save'>save</button>
                <span class="change_btn fileinput-button" id='crew_hero_parent'>
                    <i class="fa fa-upload"></i>
                    <span>select</span>
                    <input type="file" id="crew_hero_upload" required="" onchange='readURL(this)'>
                </span>
                <div class='image_container' id='crew_uploaded_image'>
                    <img src="{{ asset('storage/'.$heroImage[3]['image']) }}"  class='admin_hero_image' id='crew_hero_view'>
                </div>
            </div>
            <h4 class='admin_title ml_15 mt_20'>Crew</h4>
            <div id='crew' style='clear:both;' class='col-lg-12 row'>

                @foreach ($crewmembers as $crewmember)
                <div class='col-sm-3 mt_20'>

                    <button id='crew_save_{{$crewmember->id}}' class='admin_save' onclick="saveCrew(this)">save</button>
                    <span class="change_btn fileinput-button" id="crew_{{$crewmember->id}}">
                        <i class="fa fa-upload"></i>
                        <span>select</span>
                        <input type="file" id="crew_upload_{{$crewmember->id}}" required="" onchange='readURL(this)'>
                    </span>
                        
                    <div class='image_container' id="crew_uploaded_image_{{$crewmember->id}}">
                        <div id='imagename_{{$crewmember->id}}' style='display:none;'>{{$crewmember->image}}</div>
                        <img src="{{ asset('storage/'.$crewmember->image) }}"  class='admin_hero_image' id="crew_view_{{$crewmember->id}}">
                    </div>
                </div>
                <div class='col-sm-9' style='margin-top:50px;'>
                    <label for="">Name</label><br>
                    <input type="text" value='{{$crewmember->name}}'  class='specification_input' id="crew_name_{{$crewmember->id}}"><br>
                    <label for="">Position</label><br>
                    <input type="text" value='{{$crewmember->position}}' class='specification_input' id="crew_position_{{$crewmember->id}}"><br>
                    <label for="">Biography Text</label>
                    <textarea id="crew_text_{{$crewmember->id}}" class='admin_crew_text' >{{$crewmember->text}}</textarea>
                    <label for="">Background Color</label>
                    <input type="color" id='crew_color_{{$crewmember->id}}' value = "{{$crewmember->backgroundcolor}}">
                </div>
                @endforeach
 
                <div class='col-sm-3 mt_20'>

                    <button id='crew_add' class='admin_add' >add</button>
                    <span class="change_btn fileinput-button" id="crew_add_btn">
                        <i class="fa fa-upload"></i>
                        <span>select</span>
                        <input type="file" id="crew_upload" required="" onchange='readURL(this)'>
                    </span>
                        
                    <div class='image_container' id="crew_uploaded_image_contain">
                        <img src="{{ asset('storage/'.$introduction[0]['addimage']) }}"  class='admin_hero_image' id="admin_crew_view">
                    </div>
                </div>
                <div class='col-sm-9' style='margin-top:50px;'>
                    <label for="">Name</label><br>
                    <input type="text"  class='specification_input' id="crew_name"><br>
                    <label for="">Position</label><br>
                    <input type="text" class='specification_input' id="crew_position"><br>
                    <label for="">Biography Text</label>
                    <textarea id="crew_text" class='admin_crew_text' ></textarea>
                    <label for="">Background Color</label>
                    <input type="color" id='crew_color'>
                </div>

            </div>
        </div>
    </div>
</div>


@endsection