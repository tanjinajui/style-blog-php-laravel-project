<!-- header and footer file master include -->
@extends('layouts.includes.master')
<!-- title set -->

@section('title', 'About_create')

@section('content')
<!--start-main-->
  <div class="header-bottom">
    <div class="container">
      <div class="logo">
        <h1><a href="/index">STYLE BLOG</a></h1>
        <p><label class="of"></label>LET'S MAKE A PERFECT STYLE<label class="on"></label></p>
      </div>
    </div>
  </div>
<!-- banner -->

<div class="banner-1">

</div>

<!-- technology-left -->
<div class="technology">
  <div class="container">
    <div class="col-md-12 ">
      <div class="w3agile-1">
      <div class="row">   
      <div class="col-md-3"></div>
      <div class="col-md-6">                 
        <div class="heading text-center">
          <h1 class="h4 text-gray-900 mb-4">Create New About Information!</h1>
          <h3><a href="/abouts">View All About</a></h3>
        </div>
        <!-- include message page -->
          @include('messages.message')
        <!-- form-part Starts -->
         {!! Form::open(['url' => '/abouts/'.$data_show->id,'method'=>'PATCH', 'class'=>'form-group','enctype'=>'multipart/form-data']) !!}
                <!-- About-title field -->
              <div class="form-group">
                <label for="about_title">About Title:</label>
                <input type="text" name="about_title" class="form-control" id="about_title" placeholder="About Tiltle" value="{{$data_show->about_title}}">
              </div> 
                <!-- About-sales manager name field -->
                <div class="form-group">
                  <label for="sales_manager_name">Sales manager Name:</label>
                  <input type="text" name="sales_manager_name" class="form-control" id="sales_manager_name" placeholder="Sales manager name" value="{{$data_show->sales_manager_name}}">
                </div>
                <!-- About manager name field -->
                <div class="form-group">
                  <label for="manager_name">Manager Name:</label>
                  <input type="text" name="manager_name" class="form-control" id="manager_name" placeholder="manager name" value="{{$data_show->manager_name}}">
                </div>
                  <!-- About-title field -->
                <div class="form-group">
                  <label for="about_description">About Description:</label>
                    <textarea name="about_description" id="summernote" placeholder="About test Description" class="form-control">{!! $data_show->about_description !!}</textarea>
                </div>  
                <!-- Team-title field -->
                <div class="form-group">                 
                  <label for="team_title">Team Title:</label>
                  <input type="text" name="team_title" class="form-control" id="team_title" placeholder="Team Tiltle" value="{{$data_show->team_title}}">
                </div> 
                  <!-- About-_picture field -->
                <div class="form-group">
                  <label for="about_picture">About Picture:</label>
                    <input type="file" name="about_picture" class="form-control-file" id="about_picture">
                    <img src="{{asset('images/about_picture/'.$data_show->about_picture)}}" alt="about_picture" height="100" >
                </div> 
                <!-- Sales_manager_picture field -->
                <div class="form-group">
                  <label for="sales_manager_picture">Sales Manager Picture:</label>
                    <input type="file" name="sales_manager_picture" class="form-control-file" id="sales_manager_picture">
                    <img src="{{asset('images/sales_manager_picture/'.$data_show->sales_manager_picture)}}" alt="sales_manager_picture" height="100" >
                </div> 
                <!-- Manager-_picture field -->
                <div class="form-group">
                  <label for="manager_picture">Manager Picture:</label>
                    <input type="file" name="manager_picture" class="form-control-file" id="manager_picture">
                    <img src="{{asset('images/manager_picture/'.$data_show->manager_picture)}}" alt="manager_picture" height="100" >
                </div>                                      
          <input type="submit" name="create_about" class="btn btn-primary btn-user btn-block mt-5" value="About Update">
         <!-- laravelcollected html form ends -->
        {!! Form::close() !!}
        </div>
        </div>
      
      </div><!-- w3agile-1 -->
    </div><!-- col-md-12 -->  
  </div><!-- container -->
</div><!-- technology -->


@endsection('content')