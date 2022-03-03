<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('css/welcome.css')}}" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/405a204514.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
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
</body>

</html>