<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search movies CINEMAH</title>
    <link rel="stylesheet" href="{{ asset('')}}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <link rel="stylesheet" href="{{url('css/hero.css')}}" />
    <link rel="stylesheet" href="{{url('css/welcome.css')}}" />
    <link rel="stylesheet" href="{{url('css/footer.css')}}" />
    <link rel="stylesheet" href="{{url('css/highlight.css')}}" />
    <link rel="stylesheet" href="{{url('css/watchlist.css')}}" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/405a204514.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>CINEMAH</title>
</head>

<body>

    <!-- Header (NAVBAR)-->
    <div class="main-container">

        <div class="navbar">
            <div class="navbar-1">
                <nav>
                    <div class="logo">
                        <a href="/">
                            <img src="{{ URL('images/logo.jpeg')}}" alt="logo">
                        </a>
                    </div>
                </nav>
                <form action="{{ URL('/search')}}" method="GET">
                    @csrf
                    <div class="searchbar">
                        <input type="text" placeholder="Search Movie" name="search">
                    </div>
                </form>

                <div class="search-input">
                    <nav class="nav-wrapper">
                        <ul class="nav-links">
                            <li class="nav-item"><a class="menuItem" href="/">Home</a></li>
                            <li class="nav-item"><a class="menuItem" href="/watchlist">Watchlist</a></li>
                            <li class="genre-dropdown nav-item"><button class="dropDown_subMenu">Genres +</button>
                                <ul class="dropdown-categories">
                                    <li class="subMenu"><a href="/genre/adventure">Adventure</a></li>
                                    <li class="subMenu"><a href="/genre/action">Action</a></li>
                                    <li class="subMenu"><a href="/genre/comedy">Comedy</a></li>
                                    <li class="subMenu"><a href="/genre/horror">Horror</a></li>
                                    <li class="subMenu"><a href="/genre/thriller">Thriller</a></li>
                                    <li class="subMenu"><a href="/genre/drama">Drama</a></li>
                                    <li class="subMenu"><a href="/genre/romance">Romance</a></li>
                                    <li class="subMenu"><a href="/genre/sci-fi">Sci-Fi</a></li>
                                </ul>
                            </li>
                            @guest
                            <li class=" nav-item"><a class="menuItem" href="/login">Log in</a></li>
                            <li class=" nav-item"><a class="menuItem" href="/register">Register</a></li>
                            @endguest
                            @if (Auth::user()?->IsAdmin == true)
                            <li class=" nav-item"><a class="menuItem" href="/admin/dashboard">Dashboard</a></li>
                            @endif 
                            @auth
                            <li class=" nav-item"><a class="menuItem" href="/logout">Logout</a></li>
                            @endauth
                        </ul>
                        <div class="hamburger">
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </div>
                    </nav>

                </div>
            </div>
        </div>
        <!-- Navbar -->

        <div class="searchpics">
            <p class="text-white">{{$message ?? ''}}</p>

            @foreach($movies as $movie)

            <div class="search_flex">
                <a href="{{ url('/movie/'.$movie->id) }}">
                    <img src="{{ $movie->cover }}" alt="">
                </a>
                <p class="text-slate-50 text-center">{{ $movie->title }}</p>
            </div>
            @endforeach
        </div>


        <!-- Footer with links -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <h4>company</h4>
                        <ul>
                            <li><a href="#">about us</a></li>
                            <li><a href="#">Condition of Use</a></li>
                            <li><a href="#">privacy policy</a></li>
                            <li><a href="#">Site Index</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Get help</h4>
                        <ul>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Get the APP</a></li>
                            <li><a href="#">CinemahPro</a></li>
                            <li><a href="#">MojoIMDB Developer</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>market related</h4>
                        <ul>
                            <li><a href="#">Press Room</a></li>
                            <li><a href="#">Box Office</a></li>
                            <li><a href="#">Interest-Based Ads</a></li>
                            <li><a href="#">Advertising</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Follow us</h4>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <script src="{{url('js/hero.js')}}"></script>
    <script src="{{url('js/hamburger.js')}}"></script>
    <script src="{{url('js/subMenu.js')}}"></script>
</body>

</html>