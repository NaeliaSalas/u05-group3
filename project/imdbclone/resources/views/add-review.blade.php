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
    <link rel="stylesheet" href="{{url('css/review.css')}}" />
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
            <nav>
                <div class="logo">
                    <a href="/">
                    <img src="{{ URL('images/Cinemah-Logo2.png')}}" alt="">
                    </a>
                </div>
            </nav>
            <input type="text" placeholder="Search">
            <div class="search-input">
                <nav class="nav-wrapper">
                    <ul class="nav-links">
                        <li class="nav-item"><a class="menuItem" href="/">Home</a></li>
                        <li class="nav-item"><a class="menuItem" href="#">Watchlist</a></li>
                        <li class="nav-item"><a class="menuItem" href="category">Categories</a></li>
                        <li class=" nav-item"><a class="menuItem" href="#">Login/register</a></li>
                    </ul>
                    <div class="hamburger">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                </nav>
            </div>
        </div>


        <!-- Movie hero -->
        <div class="reviewbg">
            <div class="reviewflex">
                <div class="flex-item-review">
                    <img src="{{ URL('images/Kingsman-cover.jpg')}}" alt="" class="coverReview">
                    <h3 class="h3txt">The King's Man</h3>
                </div>

                <!-- center space-->
                <div class="flex-item-review"></div>

                <div class="flex-item-review">
                <h1 class="MovieH1">Add review</h1>
                    
                    <form action="{{url('review')}}" method="post">
                        @csrf
                        <input type="text" class="input" placeholder="Headline" name="title">
                        <label>Headline</label>
                        <br>
                        
                        <input class="input" type="text" placeholder="Rating (7,2)" name="rate">
                        <br>
                        <input class="txtInput" type="text" placeholder="Your review" name="body" class="txtInput">
                        <br>
                        <input type="hidden" name="user_id_fk" value="1">
                        <input type="hidden" name="movie_id_fk" value="1">
                        
                        <button type="submit" class="custom-btn btn-15">Add review</button>

                        <button class="custom-btn btn-15">Add review</button>
         
                    </form>
                </div>

                

            </div>
          
        </div>
        <!-- Movie hero -->


        <!-- Footer with links -->
        <footer class="footerReview">
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



    <script src="{{url('js/hero.js')}}"></script>
    <script src="{{url('js/hamburger.js')}}"></script>

</body>

</html>