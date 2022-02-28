<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <link rel="stylesheet" href="{{url('css/welcome.css')}}" />
    <link rel="stylesheet" href="{{url('css/footer.css')}}" />
    <link rel="stylesheet" href="{{url('css/highlight.css')}}" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/405a204514.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
    <!-- Navbar -->
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
                <form method="get" action="/">
                    <input type="text" placeholder="Search">
                </form>
                <div class="search-input">
                    <nav class="nav-wrapper">
                        <ul class="nav-links">
                            <li class="nav-item"><a class="menuItem" href="/">Home</a></li>
                            <li class="nav-item"><a class="menuItem" href="#">Watchlist</a></li>
                            <li class="nav-item"><a class="menuItem" href="category">Categories</a></li>
                            <li class="nav-item"><a class="menuItem" href="#">Login/register</a></li>
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

        <!-- adventure section -->
        <div class="main">
            <section class="top_picks">
                <h2><a href="category">Go Back > </a> </h2>
            </section>
            <div class="movie_Showcase">
                <div class="showcase_item">
                    <a href="#"><img src="{{ URL('images/lotr.jpeg')}}" alt=""></a>
                    <div class="button_border">
                        <p>Return of the King</p>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <p>8.7</p>
                        </div>
                        <button>Add Watchlist</button>
                    </div>
                </div>
                <div class="showcase_item">
                    <a href="#"><img src="{{ URL('images/lotr.jpeg')}}" alt=""></a>
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
                    <a href="#"><img src="{{ URL('images/lotr.jpeg')}}" alt=""></a>
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
                    <a href="#"><img src="{{ URL('images/lotr.jpeg')}}" alt=""></a>
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
                    <a href="#"><img src="{{ URL('images/lotr.jpeg')}}" alt=""></a>
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


            <div class="movie_Showcase">
                <div class="showcase_item">
                    <a href="#"><img src="{{ URL('images/lotr.jpeg')}}" alt=""></a>
                    <div class="button_border">
                        <p>Return of the King</p>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <p>8.7</p>
                        </div>
                        <button>Add Watchlist</button>
                    </div>
                </div>
                <div class="showcase_item">
                    <a href="#"><img src="{{ URL('images/lotr.jpeg')}}" alt=""></a>
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
                    <a href="#"><img src="{{ URL('images/lotr.jpeg')}}" alt=""></a>
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
                    <a href="#"><img src="{{ URL('images/lotr.jpeg')}}" alt=""></a>
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
                    <a href="#"><img src="{{ URL('images/lotr.jpeg')}}" alt=""></a>
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


            <div class="movie_Showcase">
                <div class="showcase_item">
                    <a href="#"><img src="{{ URL('images/lotr.jpeg')}}" alt=""></a>
                    <div class="button_border">
                        <p>Return of the King</p>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <p>8.7</p>
                        </div>
                        <button>Add Watchlist</button>
                    </div>
                </div>
                <div class="showcase_item">
                    <a href="#"><img src="{{ URL('images/lotr.jpeg')}}" alt=""></a>
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
                    <a href="#"><img src="{{ URL('images/lotr.jpeg')}}" alt=""></a>
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
                    <a href="#"><img src="{{ URL('images/lotr.jpeg')}}" alt=""></a>
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
                    <a href="#"><img src="{{ URL('images/lotr.jpeg')}}" alt=""></a>
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


            <div class="movie_Showcase">
                <div class="showcase_item">
                    <a href="#"><img src="{{ URL('images/lotr.jpeg')}}" alt=""></a>
                    <div class="button_border">
                        <p>Return of the King</p>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <p>8.7</p>
                        </div>
                        <button>Add Watchlist</button>
                    </div>
                </div>
                <div class="showcase_item">
                    <a href="#"><img src="{{ URL('images/lotr.jpeg')}}" alt=""></a>
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
                    <a href="#"><img src="{{ URL('images/lotr.jpeg')}}" alt=""></a>
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
                    <a href="#"><img src="{{ URL('images/lotr.jpeg')}}" alt=""></a>
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
                    <a href="#"><img src="{{ URL('images/lotr.jpeg')}}" alt=""></a>
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


            <div class="movie_Showcase">
                <div class="showcase_item">
                    <a href="#"><img src="{{ URL('images/lotr.jpeg')}}" alt=""></a>
                    <div class="button_border">
                        <p>Return of the King</p>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <p>8.7</p>
                        </div>
                        <button>Add Watchlist</button>
                    </div>
                </div>
                <div class="showcase_item">
                    <a href="#"><img src="{{ URL('images/lotr.jpeg')}}" alt=""></a>
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
                    <a href="#"><img src="{{ URL('images/lotr.jpeg')}}" alt=""></a>
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
                    <a href="#"><img src="{{ URL('images/lotr.jpeg')}}" alt=""></a>
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
                    <a href="#"><img src="{{ URL('images/lotr.jpeg')}}" alt=""></a>
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
                            <li><a href="#">Get the IMDB APP</a></li>
                            <li><a href="#">IMDBPro</a></li>
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

    <script src="{{url('js/hamburger.js')}}"></script>
</body>

</html>