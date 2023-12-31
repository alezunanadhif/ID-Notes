<nav class="py-2 bg-body-tertiary border-bottom">
    <div class="container d-flex flex-wrap">
        <ul class="nav me-auto">
            @if (Auth::check())
                <li class="nav-item"><a href="{{ url('/note') }}" class="nav-link link-body-emphasis px-2 active" aria-current="page">Home</a></li>
            @else
                <li class="nav-item"><a href="{{ url('/') }}" class="nav-link link-body-emphasis px-2 active" aria-current="page">Home</a></li>
            @endif
        </ul>
        <ul class="nav">
            @if (Auth::check())
                <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">{{ Auth::user()->name }}</a></li>
                <li class="nav-item"><a href="{{ url('/logout') }}" class="nav-link link-body-emphasis px-2">Logout</a></li>
            @else
                <li class="nav-item"><a href="{{ url('/login') }}" class="nav-link link-body-emphasis px-2">Login</a></li>
                <li class="nav-item"><a href="{{ url('/register') }}" class="nav-link link-body-emphasis px-2">Sign up</a></li>
            @endif
        </ul>
    </div>
</nav>

<header class="py-3 mb-4 border-bottom">
    <div class="container d-flex flex-wrap justify-content-center">
        <a href="/"
            class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
            <svg class="bi" width="40" height="32">
                <use xlink:href="#bootstrap"></use>
            </svg>
            @if (Auth::check())
                <span class="fs-4">ID-Notes, {{ Auth::user()->name }}</span>
            @else
                <span class="fs-4">ID-Notes</span>
            @endif
        </a>
        @if (Auth::check())
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 d-none d-lg-block" role="search">
                <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form>
        @else
            <form action="" class="display-none"></form>
        @endif
    </div>
</header>