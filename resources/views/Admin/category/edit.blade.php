<!-- Default template -->
@extends('layouts.includes.master')
@section('title', 'Category_edit')
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
      <!-- registration heading field -->   
        <h1>Category Edit</h1>
      </div>
       <!-- include message page -->
           @include('messages.message')
      <!-- form-part Starts -->
        {!! Form::open(['url' => '/categories/'.$data_show->id,'method'=>'PATCH']) !!}
          <div class="form-group">
            <!-- first name field -->
            <label for="category">Category Name:</label>
            <input type="text" class="form-control" id="category" placeholder="Enter category" name="category" value="{{$data_show->category}}">
          </div>
          <!-- last name field -->
          <div class="form-group">
            <label for="category_code">Category Code:</label>
            <input type="text" class="form-control" id="category_code" placeholder="Enter category code" name="category_code" value="{{$data_show->category_code}}">
          </div>
          
          <!-- button field -->
          <button type="submit" class="btn btn-primary">Update</button>
        <!-- laravelcollected html form ends -->
        {!! Form::close() !!}
        <!-- form-part ends -->
			 </div>
      </div>
			</div><!-- w3agile-1 -->
      
		</div><!-- col-md-12 -->	
	</div><!-- container -->
</div><!-- technology -->
@endsection('content')