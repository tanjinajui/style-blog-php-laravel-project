<!-- Default template -->
@extends('layouts.includes.master')
@section('title', 'Post_edit')
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
			<!-- form-part Starts -->
         {!! Form::open(['url' => '/posts/'.$data_show->id,'method'=>'PATCH', 'class'=>'form-group','enctype'=>'multipart/form-data']) !!}
           <!-- Post-title field -->
              <div class="form-group">
                 <!-- include message page -->
                @include('messages.message')
                {{csrf_field()}}
                <input type="text" name="post_title" class="form-control" id="post_title" placeholder="Post Tiltle" value="{{$data_show->post_title}}">
              </div> 
                <!-- post-category name field -->
                <!-- onno table er data add -->
                <div class="form-group">
                  <select class="form-control" name="categories_id">                                      
                    @foreach($categories as $data_shows)
                    @if($data_shows->id==$data_show->categories_id)                                      
                    <option value="{{$data_shows->id}}" selected="">{{$data_shows->category}}</option>
                    @else
                    <option value="{{$data_shows->id}}">{{$data_shows->category}}</option>
                    @endif
                    @endforeach
                  </select>
                </div>
                  <!-- Post-title field -->
                <div class="form-group">
                    <textarea name="post_description" id="summernote" placeholder="Post Description" class="form-control">{!! ($data_show->post_description) !!}</textarea>
                </div>  
                  <!-- Post-_picture field -->
                <div class="form-group">
                    <input type="file" name="post_picture" class="form-control-file" id="post_picture">
                    <img src="{{asset('images/post_picture/'.$data_show->post_picture)}}" alt="post_picture" height="100" >
                </div>                          
              <input type="submit" name="create_student" class="btn btn-primary btn-user btn-block mt-5" value="Post update">
         <!--- laravelcollected html form ends --> 
        {!! Form::close() !!}
        <!-- form-part ends -->
			 </div>
      </div>
			</div><!-- w3agile-1 -->
      
		</div><!-- col-md-12 -->	
	</div><!-- container -->
</div><!-- technology -->
@endsection('content')