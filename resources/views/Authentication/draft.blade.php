@extends('layouts.includes.master')

@section('title', 'Category_add')

@section('content')

<div class="col-md-9 technology-left">
      <div class="blog">    
      <h2 class="w3">TRAVEL</h2>
      @foreach($blogs as $blog)
      <div class="blog-grids1">
        <div class="col-md-6 blog-grid">
          <div class="blog-grid-left1">
            <a href="/blogDetails/{{$blog->id}}"><img src="{{asset('images/post_picture/'.$blog->post_picture)}}" alt=" " class="img-responsive"></a>
          </div> 
          <div class="blog-grid-right1">
            <a href="/blogDetails/{{$blog->id}}">{{$blog->post_title}}</a>
            <h4>{{$blog->year}}</h4>
            <p>{!! substr($blog->post_description,0,200) !!} ...</p>
          </div>
          <div class="clearfix"> </div>
          <div class="more m1">
            <a class="btn effect6" href="/blogDetails/{{$blog->id}}">Learn More</a>
          </div>
        </div>
        
        <div class="clearfix"> </div>
      </div>
      @endforeach
      
      {{$blogs->links()}}
      <!-- <nav class="paging">
        <ul class="pagination pagination-lg">
          {{$blogs->links()}}
        </ul>
      </nav> -->
    
  </div>
    </div>



@endsection('content')

<!-- Default template -->
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
		<div class="col-md-12 ">
			<div class="w3agile-1">
			
			
			</div><!-- w3agile-1 -->
		</div><!-- col-md-12 -->	
	</div><!-- container -->
</div><!-- technology -->
@endsection('content')