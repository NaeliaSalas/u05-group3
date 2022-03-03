<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
                            <img src="{{ URL('images/logo.jpeg')}}" alt="">
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
                            <li class="nav-item"><a class="menuItem" href="#">Watchlist</a></li>
                            <li class="nav-item"><a class="menuItem" href="category">Categories</a></li>
                            @guest
                            <li class=" nav-item"><a class="menuItem" href="login">Log in</a></li>
                            <li class=" nav-item"><a class="menuItem" href="register">Register</a></li>
                            @endguest
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

        <!-- hero slider section -->

        <div class="carousel">
            <!--<h2 class="favorites">Fan favorites > </h2>-->

            @php
            $heromovies = $movies->random(5);
            @endphp
            @foreach ($heromovies as $heromovie) <div class="carousel__item carousel__item--visible hidden">
                <img src="{{ $heromovie->hero }}" />
            </div>
            @endforeach

            <div class="carousel__actions">
                <button id="carousel__button--prev" aria-label="Previous slide">
                    < </button>
                        <button id="carousel__button--next" aria-label="Next slide">></button>
            </div>
        </div>

        <div class="main">

            <p class="text-white">{{ $movies->count()}}</p>


            <!-- Featured section -->

            <section class="featured">
                <h2>Featured today ></h2>
            </section>
            <div class="highlight">

                @php
                $highlightmovies = $movies->random(3);
                @endphp
                @foreach ($highlightmovies as $highlightmovie) <div class="highlight_item">
                    <a href="{{ url('/movie/' . $highlightmovie->id) }}"><img src="{{ URL($highlightmovie->cover) }}" alt="Movie Cover"></a>
                    <P>{{$highlightmovie->title}}</P>
                </div>
                @endforeach
            </div>

            <!-- Top picks section -->
            <section class="top_picks">
                <h2>Top Picks ></h2>
            </section>
            <div class="movie_Showcase">
                @php
                $topmovies = $movies->random(6);
                @endphp
                @foreach ($topmovies as $topmovie)
                <div class="showcase_item">
                    <a href="{{url('/movie/' . $topmovie->id)}}"><img src="{{ URL($topmovie->cover)}}" alt=""></a>
                    <div class="button_border">
                        <p>{{$topmovie->title}}</p>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <p>{{$topmovie->rating}}</p>
                        </div>

                        <!-- Drop down menu/lists -->
                        <div class="dropdown" style="float:left;">
                            <button class="dropbtn">Add to watchlist</button>
                            <div class="dropdown-content" style="left:0;">
                                @foreach(Auth::user()->watchlists as $watchlist)
                                <a href="#">{{$watchlist->title}}</a>
                                @endforeach
                            </div>
                        </div>
                        <!-- Drop down menu/lists -->

                    </div>
                </div>
            </div>
            @endforeach

        </div>

        <!-- Your watchlist section -->
        @auth


        <section class="featured">
            <h2><a href="#">Your watchlist > </a></h2>
        </section>
        <div class="watchlist">
            <div class="highlight_item">
                <a href="#"><img src="{{ URL('images/dracula.jpeg')}}" alt=""></a>
                <div class="button_border">
                    <p>Dracula</p>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <p>7.1</p>
                    </div>

                </div>
            </div>

            <div class="highlight_item">
                <a href="#"><img src="{{ URL('images/dracula.jpeg')}}" alt=""></a>
                <div class="button_border">
                    <p>Dracula</p>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <p>7.1</p>
                    </div>

                </div>
            </div>
            <div class="highlight_item">
                <a href="#"><img src="{{ URL('images/1917.jpeg')}}" alt=""></a>
                <div class="button_border">
                    <p>1917</p>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <p>8.3</p>
                    </div>

                </div>
            </div>
            <div class="highlight_item">
                <a href="#"><img src="{{ URL('images/venom.jpeg')}}" alt=""></a>
                <div class="button_border">
                    <p>Venom 2</p>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <p>7.9</p>
                    </div>

                </div>
            </div>
        </div>
        @endauth


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

</body>

</html>