@extends('layouts.includes.master')
@section('title', 'New_Registration')
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
		<div class="col-md-3"></div>
		<div class="col-md-6 ">
			<div class="w3agile-1">
			<div class="heading text-center">
		<!-- registration heading field -->		
		  <h1>Signup form</h1>
		</div>
		<!-- form-part Starts -->
		  <form action="/signUp" method="POST">
		    <div class="form-group">
		    	{{csrf_field()}}
		    	<!-- include message page -->
         		@include('messages.message')
		    	<!-- first name field -->
		      <label for="first_name">First Name:</label>
		      <input type="text" class="form-control" id="first_name" placeholder="Enter first name" name="first_name">
		    </div>
		    <!-- last name field -->
		    <div class="form-group">
		      <label for="last_name">Last Name:</label>
		      <input type="text" class="form-control" id="last_name" placeholder="Enter last name" name="last_name">
		    </div>
		    <!-- email field -->
		    <div class="form-group">
		      <label for="email">Email:</label>
		      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
		    </div>
		    <!-- mobile field -->
		    <div class="form-group">
		      <label for="mobile">Mobile No:</label>
		      <input type="text" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" title="Must be 11 digit">
		    </div>
		    <!-- password field -->
		    <div class="form-group">
		      <label for="password">Password:</label>
		      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" pattern="[A-Z]{1}[a-z]{1}[0-9]{4}[!-$]{2}" title="Must be capital, small 2 letter, 4 no, 2 special charcter">
		    </div>
		    <!-- confirm-password field -->
		    <div class="form-group">
		      <label for="confirm_password">Confirem Password:</label>
		      <input type="password" class="form-control" id="confirm_password" placeholder="Enter confirm password" name="confirm_password" pattern="[A-Z]{1}[a-z]{1}[0-9]{4}[!-$]{2}" title="Must be capital, small 2 letter, 4 no, 2 special charcter"> 
		    </div>
		    
		    <button type="submit" class="btn btn-primary">Submit</button>
		  </form>
		  <!-- form-part ends -->
			
			</div><!-- w3agile-1 -->
		</div><!-- col-md-12 -->	
	</div><!-- container -->
</div><!-- technology -->
@endsection('content')