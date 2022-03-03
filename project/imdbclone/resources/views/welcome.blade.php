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
            <div class="carousel__item carousel__item--visible hidden">
                <img src="{{ $movies[0]->hero }}" />
            </div>
            <div class="carousel__item">
                <img src="{{ URL('images/dark-knight.jpeg')}}" />
            </div>
            <div class="carousel__item">
                <img src="{{ URL('images/infinity-war.jpeg')}}" />
            </div>
            <div class="carousel__item">
                <img src="{{ URL('images/transformers.jpeg')}}" />
            </div>
            <div class="carousel__item">
                <img src="{{ URL('images/interstellar.jpeg')}}" />
            </div>
            <div class="carousel__item">
                <img src="{{ URL('images/django.jpeg')}}" />
            </div>

            <div class="carousel__actions">
                <button id="carousel__button--prev" aria-label="Previous slide">
                    < </button>
                        <button id="carousel__button--next" aria-label="Next slide">></button>
            </div>
        </div>


        <div class="main">

            <!-- Featured section -->
            <section class="featured">
                <h2>Featured today ></h2>
            </section>
            <div class="highlight">
                <div class="highlight_item">
                    <a href="#"><img src="{{ URL('images/watchmen.jpeg')}}" alt=""></a>
                    <P>WATCHMEN</P>
                </div>
                <div class="highlight_item">
                    <a href="#"><img src="{{ URL('images/pirates.jpeg')}}" alt=""></a>
                    <P>Pirates of the Caribbean</P>
                </div>
                <div class="highlight_item">
                    <a href="#"><img src="{{ URL('images/007.jpeg')}}" alt=""></a>
                    <p>007 SPECTRE</p>
                </div>
            </div>

            <!-- Top picks section -->
            <section class="top_picks">
                <h2>Top Picks ></h2>
            </section>
            <div class="movie_Showcase">
                <div class="showcase_item">
                    <a href="#"><img src="{{ URL('images/matrix.jpeg')}}" alt=""></a>
                    <div class="button_border">
                        <p>Matrix</p>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <p>8.7</p>
                        </div>

                        <!-- Drop down menu/lists -->
                        <div class="dropdown" style="float:left;">
                            <button class="dropbtn">Add to watchlist</button>
                            <div class="dropdown-content" style="left:0;">
                                <a href="#">Link 1</a>
                                <a href="#">Link 2</a>
                                <a href="#">Link 3</a>
                            </div>
                        </div>
                        <!-- Drop down menu/lists -->

                    </div>
                </div>
                <div class="showcase_item">
                    <a href="#"><img src="{{ URL('images/tenet.jpeg')}}" alt=""></a>
                    <div class="button_border">
                        <p>Tenet</p>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <p>7.4</p>
                        </div>
                        <button>Add Watchlist</button>
                    </div>
                </div>
                <div class="showcase_item">
                    <a href="#"><img src="{{ URL('images/looper.jpeg')}}" alt=""></a>
                    <div class="button_border">
                        <p>Looper</p>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <p>7.3</p>
                        </div>
                        <button>Add Watchlist</button>
                    </div>
                </div>
                <div class="showcase_item">
                    <a href="#"><img src="{{ URL('images/lotr.jpeg')}}" alt=""></a>
                    <div class="button_border">
                        <p>Return of the King</p>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <p>8.9</p>
                        </div>
                        <button>Add Watchlist</button>
                    </div>
                </div>
                <div class="showcase_item">
                    <a href="#"><img src="{{ URL('images/deadpool.jpeg')}}" alt=""></a>
                    <div class="button_border">
                        <p>Deadpool</p>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <p>8.0</p>
                        </div>
                        <button>Add Watchlist</button>
                    </div>
                </div>
                <div class="showcase_item">
                    <a href="#"><img src="{{ URL('images/et.jpeg')}}" alt=""></a>
                    <div class="button_border">
                        <p>E.T.</p>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <p>7.8</p>
                        </div>
                        <button>Add Watchlist</button>
                    </div>
                </div>
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