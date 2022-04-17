<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('css/app.css')}}" >
    <title>GIPE 2022! @yield('title')</title>
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand mb-0 h1" href="{{(route('home.index'))}}">GIPE2022</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="{{(route('home.index'))}}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{(route('home.contact'))}}">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{(route('blogposts.index'))}}" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Blog Posts
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="{{(route('blogposts.index'))}}">List of Blog Posts</a>
                      <a class="dropdown-item" href="{{(route('blogposts.create'))}}">Create a Post</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{(route('comments.create'))}}">Create Comment</a>
                  </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="{{(route('author.index'))}}" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Authors
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{(route('author.index'))}}">List of Authors</a>
                    <a class="dropdown-item" href="{{(route('author.create'))}}">Create an Author</a>
                  </div>
                </li>
                @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
              </ul>
            </div>
          </nav>
    </div>

    <div>
        @if (session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
        @endif


        @yield('content')
    </div>

</body>
<footer>
    <div class="text-center">
        &copy; Global Intercultural Project Experience <script>document.write(new Date().getFullYear())</script>

    </div>
    <script src="{{asset('js/app.js')}}">

</footer>

</html>
