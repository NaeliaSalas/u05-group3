<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <link rel="stylesheet" href="{{url('css/hero.css')}}" />
    <link rel="stylesheet" href="{{url('css/button.css')}}" />
    <link rel="stylesheet" href="{{url('css/welcome.css')}}" />
    <link rel="stylesheet" href="{{url('css/footer.css')}}" />
    <link rel="stylesheet" href="{{url('css/highlight.css')}}" />
    <link rel="stylesheet" href="{{url('css/watchlist.css')}}" />
    <link rel="stylesheet" href="{{url('css/movie.css')}}" />
    <link rel="stylesheet" href="{{url('css/modal.css')}}" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/405a204514.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
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


        <!-- Movie hero -->
        <div class="moviebg">
            <div class="movieflex">
                <div class="flex-item">
                    <img src="{{ $movie->hero}}" alt="" class="cover">
                </div>

                <!-- center space-->
                <div class="flex-item"></div>

                <!-- play-->
                <div class="flex-item">
                    <button id="myBtn"><img src="{{ URL('images/PlayBtn.png')}}" alt="">l</button>
                    <h3>Spela trailer</h3>
                    <p>2021, 2h 32min - Drama, Historia, Action. Land: USA.</p>
                </div>
                <!-- play-->

                <!--MODAL -->
                <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <iframe src="https://www.youtube.com/embed/5zdBG-iGfes" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <!--MODAL -->

            </div>

        </div>
        <!-- Movie hero -->

        <!-- txt section -->
        <div class="main">
            <div class="txtSection">
                <h1 class="MovieH1">{{$movie->title}}</h1>
                <p class="MovieTxt"> {{$movie->body}}</p>
                <br>
                <p class="MovieTxt">Director: {{$movie->director}}</p>
                <p class="MovieTxt">Year: {{$movie->yearproduced}}</p>
                <p class="MovieTxt">Rating: {{$movie->rating}}</p>
            </div>



            <!-- images section -->
            <section class="featured">
                <h2 class="reviewstext"><a href="#">User reviews</a></h2>
            </section>
            <!-- reviews section -->
            <div class="reviewFlex">
                <div class="review-item">
                    <p class="MovieTxt">
                        <img src="{{ URL('images/star.png')}}" alt=""> 6,2
                    </p>
                    <p>
                        Had heard nothing but great things about 'The Walking Dead' from friends and IMDb reviewers. It took a while to get round to walking, both from being busy and also not being sure whether it would be my cup of tea.
                    </p>
                </div>

                <div class="review-item">
                    <p class="MovieTxt">
                        <img src="{{ URL('images/star.png')}}" alt=""> 6,2
                    </p>
                    <p>
                        Had heard nothing but great things about 'The Walking Dead' from friends and IMDb reviewers. It took a while to get round to walking, both from being busy and also not being sure whether it would be my cup of tea.
                    </p>
                </div>

                <div class="review-item">
                    <p class="MovieTxt">
                        <img src="{{ URL('images/star.png')}}" alt=""> 6,2
                    </p>
                    <p>
                        Had heard nothing but great things about 'The Walking Dead' from friends and IMDb reviewers. It took a while to get round to walking, both from being busy and also not being sure whether it would be my cup of tea.
                    </p>
                </div>
            </div>
            <!-- reviews section -->

            <!-- reviews section -->
            <div class="reviewFlex">
                <div class="review-item">
                    <p class="MovieTxt">
                        <img src="{{ URL('images/star.png')}}" alt=""> 6,2
                    </p>
                    <p>
                        Had heard nothing but great things about 'The Walking Dead' from friends and IMDb reviewers. It took a while to get round to walking, both from being busy and also not being sure whether it would be my cup of tea.
                    </p>
                </div>

                <div class="review-item">
                    <p class="MovieTxt">
                        <img src="{{ URL('images/star.png')}}" alt=""> 6,2
                    </p>
                    <p>
                        Had heard nothing but great things about 'The Walking Dead' from friends and IMDb reviewers. It took a while to get round to walking, both from being busy and also not being sure whether it would be my cup of tea.
                    </p>
                </div>

                <div class="review-item">
                    <p class="MovieTxt">
                        <img src="{{ URL('images/star.png')}}" alt=""> 6,2
                    </p>
                    <p>
                        Had heard nothing but great things about 'The Walking Dead' from friends and IMDb reviewers. It took a while to get round to walking, both from being busy and also not being sure whether it would be my cup of tea.
                    </p>
                </div>
            </div>
            <!-- reviews section -->

            <!-- Add reviews -->
            <div class="center">
                <button class="custom-btn btn-15">Add review</button>
            </div>
            <!-- Add reviews -->

            <!-- Your watchlist section -->
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
                        <button>Watchlist</button>
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
                        <button>Watchlist</button>
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
                        <button>Watchlist</button>
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
    <script src="{{url('js/modal.js')}}"></script>

</body>

</html>