<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <link rel="stylesheet" href="{{url('css/button.css')}}" />
    <link rel="stylesheet" href="{{url('css/footer.css')}}" />
    <link rel="stylesheet" href="{{url('css/hero.css')}}" />
    <link rel="stylesheet" href="{{url('css/highlight.css')}}" />
    <link rel="stylesheet" href="{{url('css/modal.css')}}" />
    <link rel="stylesheet" href="{{url('css/movie.css')}}" />
    <link rel="stylesheet" href="{{url('css/review.css')}}" />
    <link rel="stylesheet" href="{{url('css/watchlist.css')}}" />
    <link rel="stylesheet" href="{{url('css/welcome.css')}}" />
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
                                    <li class="subMenu"><a href="#">Adventure</a></li>
                                    <li class="subMenu"><a href="#">Action</a></li>
                                    <li class="subMenu"><a href="#">Comedy</a></li>
                                    <li class="subMenu"><a href="#">Horror</a></li>
                                    <li class="subMenu"><a href="#">Thriller</a></li>
                                    <li class="subMenu"><a href="#">Drama</a></li>
                                    <li class="subMenu"><a href="#">Romance</a></li>
                                    <li class="subMenu"><a href="#">Sci-Fi</a></li>
                                </ul>
                            </li>
                            @guest
                            <li class=" nav-item"><a class="menuItem" href="/login">Log in</a></li>
                            <li class=" nav-item"><a class="menuItem" href="/register">Register</a></li>
                            @endguest
                            @auth
                            <li class=" nav-item"><a class="menuItem" href="/admin/dashboard">Dashboard</a></li>
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


        <!-- Flexbox -->
        <div class="watchlist-flex">

            <!-- Create watchlist -->
            <section class="top_picks">
                <h2>Create watchlist</h2>


                <form action="{{'watchlist'}}" method="post">
                    @csrf
                    <input type="text" class="input-watchlist" name="title">
                    <input type="hidden" class="input-watchlist" name="user_id_fk" value=" {{ Auth::id() }} ">
                    <button class="createBtn" type="submit">Create watchlist</button>
                </form>
            </section>


            <!-- watchlist -->
            <section class="top_picks">
                <h2>My watchlists </h2>
            </section>

            <!-- BÖRJA HÄR NOVIS -->
            @foreach ($watchlists as $watchlist)
            <section class="watchlist-head">
                <p class="watchlist-txt">{{$watchlist->title}}</p>

                <form action="{{url('watchlist/' . $watchlist->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="deleteBtn2" type="submit">Delete List</button>
                </form>


            </section>

            <!-- Showcase -->
            <div class="movie_Showcase2">
                @foreach ($watchlist->movies as $movie)


                <!-- item -->
                <div class="watchlist-item">
                    <img class="watchlist-img" src="{{url($movie->cover)}}" alt="">
                    <div class="button_border">
                        <p class="watchlist-txt">{{$movie->title}}</p>
                        <form action="{{url('entry/' . $movie->pivot->id)}}" method="post">

                            @csrf
                            @method('DELETE')
                            <button class="deleteBtn2" type="submit">Delete</button>
                        </form>
                    </div>
                </div>

                @endforeach
            </div>
            @endforeach
        </div>
        <!-- Flexbox -->
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
                    <h4>get help</h4>
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
                    <h4>follow us</h4>
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