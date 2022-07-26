<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <i class="fas fa-film mr-2"></i>
            Catalog-Z
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link nav-link-1 {{ request()->routeIs('home') ? 'active' : '' }} " aria-current="page" href="{{ route('home') }}">Photos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-2 {{ request()->routeIs('video-page') ? 'active' : '' }}" href="{{route('video-page')}}">Videos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-3 {{ request()->routeIs('about') ? 'active' : '' }}" href="{{route('about')}}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-4 {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
            </li>
            @if(Auth::user())
            <li class="nav-item">
                <div class="collapse navbar-collapse" id="navbar-list-4">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg" width="40" height="40" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="#">Dashboard</a>
                          <a class="dropdown-item" href="#">Profile</a>
                          <a class="dropdown-item" href="{{ route('logoutr') }}">Log Out</a>
                        </div>
                      </li>   
                    </ul>
                  </div>
            </li>
            @else
                <li>
                    <a class="nav-link nav-link-4" href="{{ route('login') }}">Login</a>

                </li>
            @endif
        </ul>
        </div>
    </div>
</nav>