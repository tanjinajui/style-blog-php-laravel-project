<!-- Default template -->
@extends('layouts.includes.master')
@section('title', 'Post_Details')
@section('content')

<!--start-main-->
	<div class="header-bottom">
		<div class="container">
			<div class="logo">
				<h1><a href="index.html">STYLE BLOG</a></h1>
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
		<div class="col-md-9 technology-left">
			<div class="agileinfo">

		  <h2 class="w3">Travel Details</h2>
			<div class="single">
			   <img src="{{asset('images/post_picture/'.$data->post_picture)}}" class="img-responsive" alt="">
			    <div class="b-bottom"> 
			      <h5 class="top">{{$data->post_title}}</h5>
			      <p  class="sub" style="text-align: justify;">{!! $data->post_description !!}</p>
				   
			      <p>On Aug 01 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>
				 
				</div>
			 </div>
			  

				<div class="response">
					<h4>Responses</h4>
					@foreach(App\Comments::where('posts_id','=',$data->id)->get() as $comment)
					<div class="media response-info">
						<div class="media-left response-text-left">
							<a href="#">
								<img src="images/sin1.jpg" class="img-responsive" alt="">
							</a>
						</div>
						<div class="media-body response-text-right">
							<p class="meta">
                      <strong>{{$comment->name}}</strong> 
                      <span>–</span> <time>{{$comment->created_at}}</time>
                      </p>
							<p>{{$comment->comment}}</p>
							<ul>
								<li>Jun 21, 2016</li>
								<li><a href="#">Reply</a></li>
							</ul>
							
						</div>
						<div class="clearfix"> </div>
					</div>
					@endforeach
					
				</div>	
				<!-- include message page -->
                        @include('messages.message')
				<div class="coment-form">
					<h4>Leave your comment</h4>
					<form action="/comment" method="POST">
						{{csrf_field()}}
						<input type="text" placeholder="name" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
						<input type="email" placeholder="email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
						<input type="text" placeholder="website" name="website" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Website';}" required="">
						<textarea name="comment" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Comment...';}" required="">Your Comment...</textarea>
						<input type="hidden" value="{{$data->id}}" name="posts_id">
						<input type="submit" value="Submit Comment">
					</form>
				</div>	
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- technology-right -->
		<div class="col-md-3 technology-right">
				
				
				<div class="blo-top1">
							
					<div class="tech-btm">
					<div class="search-1">
							<form action="#" method="post">
								<input type="search" name="Search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
								<input type="submit" value=" ">
							</form>
						</div>
					<h4>Popular Posts </h4>
						@foreach(App\Posts::orderBy('view','desc')->get()->take(2) as $popular_post)
						<div class="blog-grids">
							<div class="blog-grid-left">
								<a href="/blogDetails/{{$popular_post->id}}"><img src="{{asset('images/post_picture/'.$popular_post->post_picture)}}" class="img-responsive" alt=""></a>
							</div>
							<div class="blog-grid-right">
								
								<h5><a href="/blogDetails/{{$popular_post->id}}">{{$popular_post->post_title}}</a> </h5>
							</div>
							 @endforeach 
							<div class="clearfix"> </div>
						</div>
						<div class="blog-grids categoey wow fadeInDown">
							<h4>Categories</h4>
							<ul class="list-unstyled">
								@foreach(App\Categories::all() as $cat)
	              				<li><a href="#">{{$cat->category}}</a> <span class="count">2</span></li>
	               				@endforeach
							</ul>
						</div>
						<div class="blog-grids categoey recent_post ">
							<h4>Recent Post</h4>
							<ul class="list-unstyled">@foreach(App\Posts::orderBy('id','desc')->get()->take(3) as $recent_post)
              				<li><a href="/blogDetails/{{$recent_post->id}}">{{$recent_post->post_title}}</a></li>
              				@endforeach    
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="blog-grids categoey recent_comment">
							<h4>Recent Comment</h4>
							<ul class="list-unstyled">
								@foreach(App\Comments::orderBy('id','desc')->get()->take(5) as $cmt)
	              				<li><a href="#">{{$cmt->name}}</a> <a href="#">{{$cmt->comment}}</a><span class="count">2</span></li>
	               				@endforeach
							</ul>
							
						</div>
						<div class="clearfix"></div>
						</div>
						<div class="insta">
					<h4>Instagram</h4>
						<ul>
							
							<li><a href="singlepage.html"><img src="images/t1.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="singlepage.html"><img src="images/m1.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="singlepage.html"><img src="images/f1.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="singlepage.html"><img src="images/m2.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="singlepage.html"><img src="images/f2.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="singlepage.html"><img src="images/t2.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="singlepage.html"><img src="images/f3.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="singlepage.html"><img src="images/t3.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="singlepage.html"><img src="images/m3.jpg" class="img-responsive" alt=""></a></li>
						</ul>
					</div>
					
					<p>Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta patrioque scribentur, at pro</p>
					<div class="twt">
					
						<iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-hashtag-button twitter-hashtag-button-rendered twitter-tweet-button" title="Twitter Tweet Button" src="https://platform.twitter.com/widgets/tweet_button.b7de008f493a5185d8df1aedd62d77c6.en.html#button_hashtag=TwitterStories&amp;dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=https%3A%2F%2Fp.w3layouts.com%2Fdemos%2Fduplex%2Fweb%2F&amp;size=l&amp;time=1467721486626&amp;type=hashtag" style="position: static; visibility: visible; width: 166px; height: 28px;" data-hashtag="TwitterStories"></iframe>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
					</div>
					</div>
					
					
					
				</div>
				
			
		</div>
		<div class="clearfix"></div>
		<!-- technology-right -->
	</div>
</div>	
@endsection('content')