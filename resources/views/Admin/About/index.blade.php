<!-- header and footer file master include -->
@extends('layouts.includes.master')
<!-- title set -->

@section('title', 'About_view')

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
                  <h1 class="h4 text-gray-900 mb-4">View All About!</h1>
                  <h3><a href="/abouts/create">Create New About Information</a></h3>
                </div>
                  <div class="col-md-10 offset-md-3">
                     <!-- include message page -->
                   @include('messages.message')
                  <table class="table table-dark table-bordered table-hover">
                        <thead class="table-dark">
                          <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Title</th>
                            <th scope="col">Sales manager</th>
                            <th scope="col">Manager</th>
                            <th scope="col">Description</th>
                            <th scope="col">About picture</th>
                            <th scope="col">Sales manager picture</th>
                            <th scope="col">Manager picture</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
          
                          </tr>
                        </thead>
                        <?php $i= $abouts->perPage()*($abouts->currentPage()-1); ?>
                        <!-- foreach loops database er data show -->
                        @foreach($abouts as $key=>$data_show)
                        <tbody>
                          <tr>
                            <td>{{++$i}}</td>
                            <td>{{$data_show->about_title}}</td>                            
                            <td>{{$data_show->sales_manager_name}}</td>                            
                            <td>{{$data_show->manager_name}}</td>                            
                              <td>{!! substr($data_show->about_description,0,200) !!}</td>
                            <td><img src="{{asset('images/about_picture/'.$data_show->about_picture)}}" width="100"></td>
                            <td><img src="{{asset('images/sales_manager_picture/'.$data_show->sales_manager_picture)}}" width="100"></td>
                            <td><img src="{{asset('images/manager_picture/'.$data_show->manager_picture)}}" width="100"></td>
                            <td><a href="/abouts/{{$data_show->id}}/edit" class="btn btn-success">Edit</a></td>
                            <td>{!! Form::open(['url' => 'abouts/'.$data_show->id,'method'=>'Delete']) !!}
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            {!! Form::close() !!}</td>
                          </tr>
                        </tbody>
                        @endforeach
                      </table>
                        <!-- database table show ends -->
                       <!-- page paginate add -->
                      {{$abouts->links()}}
                  </div>
                </div>
      
      </div><!-- w3agile-1 -->
    </div><!-- col-md-12 -->  
  </div><!-- container -->
</div><!-- technology -->

@endsection('content')