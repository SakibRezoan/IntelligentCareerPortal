<nav class="navbar navbar-inverse navbar-static-top">
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
          <li class="{{ Request::is('/') ? "active" : ""}}"><a href="/">HOME <span class="sr-only">(current)</span></a></li>
          <li><a href="/#features">PRODUCT</a></li>
          <li><a href="/#service">SERVICE</a></li>
          <li><a href="/#price">PRICE</a></li>
          <li><a href="/#contact">CONTACT</a></li>
        </ul>

        <form class="navbar-form navbar-left" action="{{route('admin.searchUserList')}}" method="POST" role="search">
          {{ csrf_field() }}
          <div class="form-group">
            <input type="text" name = "keyword" class="form-control" required placeholder="Search User">
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        </form>


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
