<!-- header and footer file master include -->
@extends('layouts.includes.master')
<!-- title set -->

@section('title', 'Post_create')

@section('content')
<!-- apnre kotha bojtesin bai edit a ki !! eta add korle hobe sob jaigate hobe jkn conde goloo hide korte cai okkk bye -->
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
                  <div class="heading text-center">
                  <h1 class="h4 text-gray-900 mb-4">View All Post!</h1>
                  <h3><a href="/posts/create">Create New Posts</a></h3>
                </div>
                  <div class="col-md-10 offset-md-3">
                    <!-- include message page -->
                   @include('messages.message')
                    <table class="table table-bordered table-hover">
                        <thead class="table-dark">
                          <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Description</th>
                            <th scope="col">Post Picture</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
          
                          </tr>
                        </thead>
                        <?php $i= $posts->perPage()*($posts->currentPage()-1); ?>
                        <!-- foreach loops database er data show -->
                        @foreach($posts as $key=>$data_show)
                        <tbody>
                          <tr>
                            <td>{{++$i}}</td>
                            <td>{{$data_show->post_title}}</td>
                            <td>{{$data_show->categories->category}}</td>
                            <td>{!! substr($data_show->post_description,0,100) !!}</td>
                            <td><img src="{{asset('images/post_picture/'.$data_show->post_picture)}}" width="100"></td>
                            <td><a href="/posts/{{$data_show->id}}/edit" class="btn btn-success">Edit</a></td>
                            <td>{!! Form::open(['url' => '/posts/'.$data_show->id,'method'=>'Delete']) !!}
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            {!! Form::close() !!}</td>
                          </tr>
                        </tbody>
                        @endforeach
                      </table>
                        <!-- database table show ends -->
                       <!-- page paginate add -->
                      {{$posts->links()}}
                  </div>
                </div>
      
      </div><!-- w3agile-1 -->
    </div><!-- col-md-12 -->  
  </div><!-- container -->
</div><!-- technology -->

@endsection('content')