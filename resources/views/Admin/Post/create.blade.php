<!-- header and footer file master include -->
@extends('layouts.includes.master')
<!-- title set -->

@section('title', 'Post_create')

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
          <h1 class="h4 text-gray-900 mb-4">Create New Post!</h1>
          <h3><a href="/posts">View All Posts</a></h3>
        </div>
        <!-- include message page -->
          @include('messages.message')
        <form action="/posts" method="POST" enctype="multipart/form-data">
                  {{csrf_field()}}
                  <!-- Post-title field -->
                <div class="form-group">
                  <input type="text" name="post_title" class="form-control" id="post_title" placeholder="Post Tiltle">
                </div> 
                  <!-- Category name field -->
                  <div class="form-group">
                      <select class="form-control" name="categories_id">
                        <option value="">Please Select Category</option>
                        @foreach($categories as $data_show)
                        <option value="{{$data_show->id}}">{{$data_show->category}}</option>
                        @endforeach
                      </select>
                    </div>
                    <!-- Post_description field -->
                  <div class="form-group">
                      <textarea name="post_description" id="summernote" placeholder="Post Description" class="form-control"></textarea>
                  </div>  
                    <!-- post_picture field -->
                  <div class="form-group">
                      <input type="file" name="post_picture" class="form-control-file" id="post_picture">
                  </div>                           
          <input type="submit" name="create_student" class="btn btn-primary btn-user btn-block mt-5" value="Post Add">
        </form>
        </div>
        </div>
      
      </div><!-- w3agile-1 -->
    </div><!-- col-md-12 -->  
  </div><!-- container -->
</div><!-- technology -->


@endsection('content')