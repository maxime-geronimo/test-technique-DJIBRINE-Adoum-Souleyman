<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.html"><img src="{{ asset("assets/img/logo/logo.png") }}" class="img-responsive" alt=""></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-md-center" id="navbarResponsive">
            <ul class="navbar-nav" style="padding-left: 250px;">
                <li class="nav-item">
                    <a class="nav-link" href="#">pop culture</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">design</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">photography</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">about us</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
                @else

                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset("assets/img/avatar/avatar-1.png") }}" style="width:40px;" class="img-responsive" alt="">{{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                        <a class="dropdown-item" href="#">Full Width Page</a>
                        <a class="dropdown-item" href="#">Sidebar Page</a>
                        <a class="dropdown-item" href="#">FAQ</a>
                        <a class="dropdown-item" href="#">404</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </li>
               @endguest
            </ul>
        </div>
    </div>
</nav>