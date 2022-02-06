<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
  <div class="container">
    <a class="navbar-brand" href="#">LaraBBS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav mr-auto">

      </ul>

      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav navbar-right">
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">登录</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">注册</a>
        </li>
        @else
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="navbarDropdown" role="button">
              <img src="https://cdn.learnku.com/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/60/h/60" class="img-responsive img-circle" width="30px" height="30px">
              {{Auth::user()->name}}
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">个人中心</a>
              <a class="dropdown-item" href="#">编辑资料</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <form action="{{route('logout')}}" method="POST">
                  {{csrf_field()}}
                  <button type="submit" class="btn btn-block btn-danger" name="button">
                    退出
                  </button>
                </form>
              </a>
            </div>
          </li>

        @endguest
      </ul>
    </div>
  </div>
</nav>