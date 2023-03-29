<header class="p-3 bg-danger text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{route('home')}}" class="nav-link px-2 text-white">Home</a></li>
            </ul>
            <div class="text-end">
                @guest
                <a href="{{route('login')}}" class="btn btn-outline-light me-2">Login</a>
                <a href="{{route('register')}}" class="btn btn-light">Sign-up</a>
                @else
                <div class="nav-item dropdown">
                <div class="nav-link dropdown-toggle me-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </div>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">logout</a>
                            <form action="{{route('logout')}}" id="logout-form" method="POST">
                                @csrf
                            </form>
                        </li    >
                    </ul>
                </div>
                @endguest
            </div>
        </div>
    </div>
</header>