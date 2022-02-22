@extends('layouts.includes.master')

@section('title', 'Login')


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
		<div class="row">
			<div class="col-md-3"></div>
		<div class="col-md-6">

			<div class="w3agile-1">
				
			<div class="heading text-center">
			<!-- registration heading field -->		
			  <h1>Login form</h1>
			</div>
			 <!-- include message page -->
	         @include('messages.message')
			<!-- form-part Starts -->
			  <form action="/loginUser" method="POST">
			    <div class="form-group">
			    	{{csrf_field()}}
			    <!-- email field -->
			    <div class="form-group">
			      <label for="email">Email:</label>
			      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
			    </div>
			    <!-- password field -->
			    <div class="form-group">
			      <label for="password">Password:</label>
			      <input type="password" class="form-control" id="inputpassword" placeholder="Enter password" name="password">
			      <button id="eyeopen" onclick="showpassword()"><span class="glyphicon glyphicon-eye-open"></span></button>
                  <button id="eyeclose" style="display: none;" onclick="showpassword()"><span class="glyphicon glyphicon-eye-close"></span></button>
			    </div>
				<!-- button field -->
			    <button type="submit" class="btn btn-primary">login</button>
			  </form>
			  <!-- form-part ends -->
			</div><!-- w3agile-1 -->
			</div>
		</div><!-- col-md-12 -->	
	</div><!-- container -->
</div><!-- technology -->
 <script type="text/javascript">
   function showpassword(){
    var data=document.getElementById('inputpassword');
    if (data.type=='password') {
      data.type='text';
      eyeopen.style.display="none";
      eyeclose.style.display="block";
    }else{
      data.type='password';
      eyeopen.style.display="block";
      eyeclose.style.display="none";
    }
   }
 </script>

@endsection('content')