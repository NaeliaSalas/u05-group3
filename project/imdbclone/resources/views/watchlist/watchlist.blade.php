<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="css/hero.css" />
    <link rel="stylesheet" href="css/welcome.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/highlight.css" />
    <link rel="stylesheet" href="css/watchlist.css" />
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
                            <img src="images/logo.jpeg" alt="">
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
                            <li class="nav-item"><a class="menuItem" href="watchlist">Watchlist</a></li>
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


        <!-- Flexbox -->
        <div class="watchlist-flex">

            <!-- Create watchlist -->
            <section class="top_picks">
                <h2>Create watchlist</h2>
                <input type="text" class="input-watchlist" placeholder="Watchlist name" name="watchlist-title">
                <button class="createBtn">Add List</button>
            </section>

            <!-- watchlist -->
            <section class="top_picks">
                <h2>My watchlists </h2>
            </section>

            <!-- Row -->
            <section class="watchlist-head">
                <p class="watchlist-txt">Min första spellista
                    <button class="deleteBtn2">Edit List</button>
                    <button class="deleteBtn2">Delete List</button>
                </p>

            </section>

            <!-- Showcase -->
            <div class="movie_Showcase2">

                <!-- item -->
                <div class="watchlist-item">
                    <img class="watchlist-img" src="images/matrix.jpeg" alt="">
                    <div class="button_border">
                        <p class="watchlist-txt">Bigget than the Big Lebowski</p>
                        <button class="deleteBtn">Delete</button>
                    </div>
                </div>
                <!-- item -->

                <!-- item -->
                <div class="watchlist-item">
                    <img class="watchlist-img" src="images/matrix.jpeg" alt="">
                    <div class="button_border">
                        <p class="watchlist-txt">Matrix</p>
                        <button class="deleteBtn">Delete</button>
                    </div>
                </div>
                <!-- item -->

                <!-- item -->
                <div class="watchlist-item">
                    <img class="watchlist-img" src="images/matrix.jpeg" alt="">
                    <div class="button_border">
                        <p class="watchlist-txt">Halvlång titel</p>
                        <button class="deleteBtn">Delete</button>
                    </div>
                </div>
                <!-- item -->

                <!-- item -->
                <div class="watchlist-item">
                    <img class="watchlist-img" src="images/matrix.jpeg" alt="">
                    <div class="button_border">
                        <p class="watchlist-txt">Bigget than the Big Lebowski</p>
                        <button class="deleteBtn">Delete</button>
                    </div>
                </div>
                <!-- item -->

                <!-- item -->
                <div class="watchlist-item">
                    <img class="watchlist-img" src="images/matrix.jpeg" alt="">
                    <div class="button_border">
                        <p class="watchlist-txt">Matrix</p>
                        <button class="deleteBtn">Delete</button>
                    </div>
                </div>
                <!-- item -->

                <!-- item -->
                <div class="watchlist-item">
                    <img class="watchlist-img" src="images/matrix.jpeg" alt="">
                    <div class="button_border">
                        <p class="watchlist-txt">Halvlång titel</p>
                        <button class="deleteBtn">Delete</button>
                    </div>
                </div>
                <!-- item -->

                <!-- item -->
                <div class="watchlist-item">
                    <img class="watchlist-img" src="images/matrix.jpeg" alt="">
                    <div class="button_border">
                        <p class="watchlist-txt">Bigget than the Big Lebowski</p>
                        <button class="deleteBtn">Delete</button>
                    </div>
                </div>
                <!-- item -->

                <!-- item -->
                <div class="watchlist-item">
                    <img class="watchlist-img" src="images/matrix.jpeg" alt="">
                    <div class="button_border">
                        <p class="watchlist-txt">Matrix</p>
                        <button class="deleteBtn">Delete</button>
                    </div>
                </div>
                <!-- item -->

                <!-- item -->
                <div class="watchlist-item">
                    <img class="watchlist-img" src="images/matrix.jpeg" alt="">
                    <div class="button_border">
                        <p class="watchlist-txt">Halvlång titel</p>
                        <button class="deleteBtn">Delete</button>
                    </div>
                </div>
                <!-- item -->

                <!-- item -->
                <div class="watchlist-item">
                    <img class="watchlist-img" src="images/matrix.jpeg" alt="">
                    <div class="button_border">
                        <p class="watchlist-txt">Halvlång titel</p>
                        <button class="deleteBtn">Delete</button>
                    </div>
                </div>
                <!-- item -->

            </div>
            <!-- Row -->


            <!-- Row -->
            <section class="watchlist-head">
                <p class="watchlist-txt">Min första spellista <button class="deleteBtn2">Delete List</button></p>

            </section>

            <!-- Showcase -->
            <div class="movie_Showcase2">

                <!-- item -->
                <div class="watchlist-item">
                    <img class="watchlist-img" src="images/matrix.jpeg" alt="">
                    <div class="button_border">
                        <p class="watchlist-txt">Bigget than the Big Lebowski</p>
                        <button class="deleteBtn">Delete</button>
                    </div>
                </div>
                <!-- item -->

                <!-- item -->
                <div class="watchlist-item">
                    <img class="watchlist-img" src="images/matrix.jpeg" alt="">
                    <div class="button_border">
                        <p class="watchlist-txt">Matrix</p>
                        <button class="deleteBtn">Delete</button>
                    </div>
                </div>
                <!-- item -->

                <!-- item -->
                <div class="watchlist-item">
                    <img class="watchlist-img" src="images/matrix.jpeg" alt="">
                    <div class="button_border">
                        <p class="watchlist-txt">Halvlång titel</p>
                        <button class="deleteBtn">Delete</button>
                    </div>
                </div>
                <!-- item -->

                <!-- item -->
                <div class="watchlist-item">
                    <img class="watchlist-img" src="images/matrix.jpeg" alt="">
                    <div class="button_border">
                        <p class="watchlist-txt">Bigget than the Big Lebowski</p>
                        <button class="deleteBtn">Delete</button>
                    </div>
                </div>
                <!-- item -->

                <!-- item -->
                <div class="watchlist-item">
                    <img class="watchlist-img" src="images/matrix.jpeg" alt="">
                    <div class="button_border">
                        <p class="watchlist-txt">Matrix</p>
                        <button class="deleteBtn">Delete</button>
                    </div>
                </div>
                <!-- item -->

                <!-- item -->
                <div class="watchlist-item">
                    <img class="watchlist-img" src="images/matrix.jpeg" alt="">
                    <div class="button_border">
                        <p class="watchlist-txt">Halvlång titel</p>
                        <button class="deleteBtn">Delete</button>
                    </div>
                </div>
                <!-- item -->

                <!-- item -->
                <div class="watchlist-item">
                    <img class="watchlist-img" src="images/matrix.jpeg" alt="">
                    <div class="button_border">
                        <p class="watchlist-txt">Bigget than the Big Lebowski</p>
                        <button class="deleteBtn">Delete</button>
                    </div>
                </div>
                <!-- item -->

                <!-- item -->
                <div class="watchlist-item">
                    <img class="watchlist-img" src="images/matrix.jpeg" alt="">
                    <div class="button_border">
                        <p class="watchlist-txt">Matrix</p>
                        <button class="deleteBtn">Delete</button>
                    </div>
                </div>
                <!-- item -->

                <!-- item -->
                <div class="watchlist-item">
                    <img class="watchlist-img" src="images/matrix.jpeg" alt="">
                    <div class="button_border">
                        <p class="watchlist-txt">Halvlång titel</p>
                        <button class="deleteBtn">Delete</button>
                    </div>
                </div>
                <!-- item -->

                <!-- item -->
                <div class="watchlist-item">
                    <img class="watchlist-img" src="images/matrix.jpeg" alt="">
                    <div class="button_border">
                        <p class="watchlist-txt">Halvlång titel</p>
                        <button class="deleteBtn">Delete</button>
                    </div>
                </div>
                <!-- item -->

            </div>
            <!-- Row -->





        </div>
        <!-- Flexbox -->


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