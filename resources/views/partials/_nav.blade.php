<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Intelligent Career Portal</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="padding-left: 300px">
        <ul class="nav navbar-nav">
          <li class="{{ Request::is('/') ? "active" : ""}}"><a href="/">Home <span class="sr-only">(current)</span></a></li>
          <li class="{{ Request::is('about') ? "active" : ""}}"><a href="/about">About</a></li>
          <li class="{{ Request::is('contact') ? "active" : ""}}"><a href="/contact">Contact</a></li>
          <li style="margin-left: 30px"><a class="btn btn-default btn-sm" style="padding: 2px; margin-top:14px"
                                           data-toggle="modal" data-target="#signUpModal" href="">Create Account</a></li>
          <li style="margin-left: 30px"><a class="btn btn-success btn-sm" style="padding: 2px; margin-top:14px"
                                           data-toggle="modal" data-target="#signInModal"href="">Sign In</a></li>
        </ul>


        <ul class="nav navbar-nav navbar-right">
          <!-- Authentication Links -->
          @guest
            <li><a href="{{ route('landing-page') }}">Home</a></li>
            @else
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                  {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu">
                  <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                      Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                    </form>
                  </li>
                </ul>
              </li>
              @endguest
        </ul>

      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!-- Sign In Modal -->
<div class="modal fade" id="signInModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center">Sign In As</h4>
      </div>
      <div class="modal-body">
        <div align="center">
          <a class="btn btn-success" href="{{ route('login') }}">Job Seeker</a>
          <a class="btn btn-default" href="{{ route('admin.login') }}">Admin</a>
          <a class="btn btn-primary" href="{{ route('company.login') }}">Company</a>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- Sign Up Modal -->
<div class="modal fade" id="signUpModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div align="center">
          <h4 class="modal-title">Create Your Account</h4>
          <h6>Please choose an option</h6>
        </div>
      </div>
      <div class="modal-body">
        <div align="center">
          <a class="btn btn-success" href="{{ route('register') }}">Job Seeker</a>
          <a class="btn btn-primary" href="{{ route('company.registration') }}">Company</a>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
