@extends('main')

@section('title','Home page')

  @section('content')
        <div class="row">
          <div class="col-md-12">
            <div class="jumbotron">
              <h1>Welcome to Intelligent Career Portal</h1>
              <p class="lead" align="center">Thank you so much for visiting. Find Your Dream Jobs Here</p>
              <div class="col-md-3 col-md-offset-1"></div>
              {!! Form::open(['method'=>'GET','url'=>'search','class'=>'navbar-form navbar-left'])  !!}
                <div class="input-group custom-search-form">
                <input type="text" class="form-control" name="search" placeholder="Search Jobs">
              {!! Form::close() !!}
            </div>
          </div>
        </div> <!-- end header .row-->
        <div class="row">
          <div class="col-md-11">
            <div class="post">
              <h3>Job Title</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>
            <div class="post">
              <h3>Job Title</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>
            <div class="post">
              <h3>Job Title</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>
            <div class="post">
              <h3>Job Title</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
  @endsection
