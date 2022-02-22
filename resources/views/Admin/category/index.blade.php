@extends('layouts.includes.master')

@section('title', 'Category_add')

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
				  <h1>Category Add</h1>
				</div>
			 <!-- include message page -->
	         @include('messages.message')
			<!-- form-part Starts -->
			  <form action="/categories" method="POST">
			    <div class="form-group">
			    	{{csrf_field()}}
			    	<!-- first name field -->
			      <label for="category">Category Name:</label>
			      <input type="text" class="form-control" id="category" placeholder="Enter category" name="category">
			    </div>
			    <!-- last name field -->
			    <div class="form-group">
			      <label for="category_code">Category Code:</label>
			      <input type="text" class="form-control" id="category_code" placeholder="Enter category code" name="category_code">
			    </div>
			    
			    <!-- button field -->
			    <button type="submit" class="btn btn-primary">Catergory Add</button>
			  </form>
			  <!-- form-part ends -->
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12">
				<table class="table table-bordered table-hover">
		  			<thead class="table-dark">
					    <tr>
					      <th scope="col">SL</th>
					      <th scope="col">Category</th>
					      <th scope="col">Category Code</th>
					      <th scope="col">Edit</th>
					      <th scope="col">Delete</th>
					    </tr>
					  </thead>
					  <?php $i= $categories->perPage()*($categories->currentPage()-1); ?>
					  <!-- foreach loops database er data show -->
					  @foreach($categories as $key=>$data_show)
					  <tbody>
					    <tr>
					      <td>{{++$i}}</td>
					      <td>{{$data_show->category}}</td>
					      <td>{{$data_show->category_code}}</td>
					      <td><a href="/categories/{{$data_show->id}}/edit" class="btn btn-success">Edit</a> </td>
					      <td>{!! Form::open(['url' => '/categories/'.$data_show->id,'method'=>'Delete']) !!}
					      <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
					      {!! Form::close() !!}</td>
					    </tr>
					  </tbody>
					  @endforeach
					</table>
						<!-- database table show ends -->
					 <!-- page paginate	add -->
					{{$categories->links()}}
			</div>
		</div>
			
			</div><!-- w3agile-1 -->
		</div><!-- col-md-12 -->	
	</div><!-- container -->
</div><!-- technology -->


@endsection('content')