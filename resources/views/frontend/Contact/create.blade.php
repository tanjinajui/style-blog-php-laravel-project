<!-- Default template -->
@extends('layouts.includes.master')
@section('title', 'Contact')
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
			<div class="contact-section">
				<h2 class="w3">CONTACT</h2>
				 <!-- include message page -->	
				@include('messages.message')
					<div class="contact-grids">
						<div class="col-md-8 contact-grid">
							
							<p>Nemo enim ips voluptatem voluptas sitsper natuaut odit aut fugit consequuntur magni dolores eosqratio nevoluptatem  amet eism com odictor ut ligulate cot ameti dapibu</p>
							<form action="/contacts" method="POST">
								 {{csrf_field()}}
								<input type="text" name="name" value="Name " class="form-control" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
								<input type="email" name="email" value="Email" class="form-control" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
								<input type="text" name="phone" value="Phone" class="form-control" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" required="">
								<textarea type="text" name="message" class="form-control" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Special Instruction/Comments...';}" required="">Special Instruction/Comments...</textarea>
								<input type="submit" value="Send">
							</form>
						</div>
						<div class="col-md-4 contact-grid1">
							<h4>Address</h4>
							<div class="contact-top">
								
								
								<div class="clearfix"></div>
							</div>
							<ul>
									<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> Office : 0041-456-3692</li>
									<li><i class="glyphicon glyphicon-phone" aria-hidden="true"></i> Mobile : 0200-123-4567</li>
									<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i> <a href="#"></a><a href="mailto:info@example.com">info@example.com</a></li>
									<li><i class="glyphicon glyphicon-print" aria-hidden="true"></i> Fax : 0091-789-456100</li>
								</ul>

						</div>
						<div class="clearfix"></div>
					</div>
					<div class="google-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d424145.8679554096!2d150.65178930803913!3d-33.847403996396665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2sin!4v1470643502584" allowfullscreen></iframe>
					</div>
				
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
<script>
	$(document).ready(function(){
		$(".form-control").focus(function(){
		$(this).css({
			backgroundColor: "#fa4b2a",
			border: "1px solid#fa4b2a",
			color:"#fa4b2a"

		});
		
	});
	$(".form-control").blur(function(){
		$(this).css({
			backgroundColor: "#f8f8f8",
			color:"#111d5e"

		});
		});
	
});
</script>
@endsection('content')