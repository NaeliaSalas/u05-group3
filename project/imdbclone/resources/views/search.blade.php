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
            <nav>
                <div class="logo">
                    <a href="/">
                        <h1>CINEMAH</h1>
                    </a>
                </div>
            </nav>
            <form action="{{ url('/search')}}" method="GET">
                @csrf

                <input type="text" placeholder="Search Movie" name="search">
            </form>

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
        <!-- Navbar -->

        <div class="container">
            <div class="row">
                <div class="col-md-6" style=>
                    <div class="grid grid-row-3 grid-flow-col gap-3">
                        <h2 class="text-white pl-10">Search result: </h2>
                        <div class="highlight_item">
                            <div class="text-white">
                                @foreach($movies as $movie)
                                <div class="">
                                    <div><a href=" {{ route('item', ['id' => $movie->id])}} ">{{ $movie->title }}
                                        </a></div>
                                    <div>
                                        <img src=" {{ $movie->cover }} " width="300" height="300">
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
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



    <script src="{{url('js/hero.js')}}"></script>
    <script src="{{url('js/hamburger.js')}}"></script>
</body>

</html>