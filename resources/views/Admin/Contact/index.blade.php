<!-- header and footer file master include -->
@extends('layouts.includes.master')
<!-- title set -->

@section('title', 'Contact_view')

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
                  <h1 class="h4 text-gray-900 mb-4">View All Contact List!</h1>
                </div>
                  <div class="col-md-10 offset-md-3">
                     <!-- include message page -->
                   @include('messages.message')
                  <table class="table table-dark table-bordered table-hover">
                        <thead class="table-dark">
                          <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Message</th>         
                            <th scope="col">Delete</th>            
                          </tr>
                        </thead>
                        <?php $i= $contacts->perPage()*($contacts->currentPage()-1); ?>
                        <!-- foreach loops database er data show -->
                        @foreach($contacts as $key=>$data_show)
                        <tbody>
                          <tr>
                            <td>{{++$i}}</td>
                            <td>{{$data_show->name}}</td>                            
                            <td>{{$data_show->email}}</td>                            
                            <td>{{$data_show->phone}}</td>                            
                            <td>{{$data_show->message}}</td>                            
                            <td>{!! Form::open(['url' => 'contacts/'.$data_show->id,'method'=>'Delete']) !!}
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            {!! Form::close() !!}</td>
                          </tr>
                        </tbody>
                        @endforeach
                      </table>
                        <!-- database table show ends -->
                       <!-- page paginate add -->
                      {{$contacts->links()}}
                  </div>
                </div>
      
      </div><!-- w3agile-1 -->
    </div><!-- col-md-12 -->  
  </div><!-- container -->
</div><!-- technology -->

@endsection('content')