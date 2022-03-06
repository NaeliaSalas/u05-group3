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


        <!-- Movie hero -->
        <div class="moviebg">
            <div class="movie-hero">
                <img src="{{url($movie->hero)}}" alt="" class="">
            </div>

            <div class="movieflex">

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
                        <iframe src="{{url($movie->trailer)}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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

            <div class="dropdown">
                @guest
                <button class="dropbtn btn-17"><a href="/login">Add to watchlist</a></button>
                @endguest
                @auth
                <button class="dropbtn btn-17"><a href="/watchlist">Add to watchlist</a></button>
                <div class="dropdown-content" style="left:0;">
                    @foreach(Auth::user()->watchlists as $watchlist)
                    <a href="#">{{$watchlist->title}}</a>
                    @endforeach
                </div>
                @endauth
            </div>

            <!-- Add reviews -->
            <div class="center">
                <a href="{{'/movie/' . $movie->id . '/review/create'}}"><button class="custom-btn btn-15">Add review</button></a>
            </div>
            <!-- Add reviews -->

            <!-- images section -->
            <section class="featured">
                <h2 class="reviewstext"><a href="#">User reviews</a></h2>
            </section>
            <!-- reviews section -->
            <div class="reviewFlex">
                @if ($movie->reviews->isEmpty())
                <p class="MovieTxt">
                    Be the first to review this!
                </p>
                @else
                @foreach ($movie->reviews as $review)
                <div class="review-item">
                    <p class="MovieTxt">{{$review->user->username}}<br>
                        {{ $review->title }}
                        @for ($i = 0; $i < $movie->rating; $i++)
                            <i class="fa-solid fa-star"></i>
                            @endfor

                    </p>
                    <br>
                    <p>{{ $review->body }}</p>
                </div>
                @endforeach
                @endif
            </div>
            <!-- reviews section -->

            <div class="reviewFlex">

                <!-- Review withcomments -->
                <div class="review-item">

                    <!-- main-->
                    <div class="tab-container full-height">
                        <!-- Gör en flexbox div här-->
                        <p><img src="images/star.png" alt=""> 6,2</p>
                        <p>The review goeas here. Had heard nothing but great things about 'The Walking Dead' from friends and IMDb reviewers. It took a while to get round to walking, both from being busy and also not being sure whether it would be my cup of tea.</p>
                        <!-- Gör en flexbox div här-->

                        <section>
                            <button onclick="myFunction()"> <span class="comments-txt">See comments | Add comment</span></button>

                            <!-- js reveal -->
                            <div id="myDIV">
                                <!-- content -->
                                <div class="comments-content">
                                    <!-- comments loop-->
                                    <section class="comments">
                                        <span class="comment-name-txt">Erika A</span>
                                        <p class="comments-txt">This is a comment on a reviw. Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde fugiat sint amet repellat, architecto, odit dolorum quibusdam incidunt necessitatibus cum odio nostrum consectetur, natus corrupti perspiciatis iusto sit qui aliquam.</p>
                                    </section>
                                    <!-- comments-->

                                    <!-- form-->
                                    <section>
                                        <form action="{{url('comment')}}" method="post">
                                            <textarea class="txtInputBig" type="text" placeholder="Your comment" name="body"></textarea>

                                            <input type="hidden" name="user_id_fk" value="1">
                                            <input type="hidden" name="movie_id_fk" value="1">
                                            <br />
                                            <button type="submit" class="custom-btn btn-15">Add</button>
                                        </form>
                                    </section>
                                    <!-- form-->
                                </div>
                                <!-- content -->
                            </div>
                            <!-- js reveal -->

                        </section>

                    </div>
                    <!-- main-->

                </div>
            </div>
            <!-- Review withcomments -->

        </div>
        <!-- Your watchlist section -->
        @auth

        <section class="featured">
            <h2><a href="/watchlist">Your watchlist > </a></h2>
        </section>

        <div class="movie_Showcase">
            @foreach(Auth::user()->watchlists as $watchlist)
            @foreach($watchlist->movies as $movie)
            <div class="showcase_item">
                <a href=" url('/movie/' . $movie->id)"><img src="{{ URL($movie->cover)}}" alt="Movie cover"></a>
                <div class="button_border">
                    <div class="button_border_title">
                        <p>{{ $movie->title }}</p>
                    </div>
                    <div class="rating">
                        @for ($i = 0; $i < $movie->rating; $i++)
                            <i class="fa-solid fa-star"></i>
                            @endfor
                            <p>{{ $movie->rating }}</p>
                    </div>

                </div>
            </div>
            @endforeach
            @endforeach
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
    <script src="{{url('js/modal.js')}}"></script>
    <script src="{{url('js/subMenu.js')}}"></script>
    <script src="{{url('js/comment.js')}}"></script>

</body>

</html>