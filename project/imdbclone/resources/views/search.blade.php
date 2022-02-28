<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search with pagination</title>
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

    <!-- Navbar -->

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

                <input type="text" placeholder="Search Movie" name="query">
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
                    <h4>Search result</h4>
                    <hr>
                    <form action"" method="GET">
                        <div class="form-group">
                        </div>
                        <div class="form-group">
                            <label for=""></label>
                        </div>
                    </form>
                </div>
                <br>
                <br>
                <hr>
                <br>
                @if(isset($movies))

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-white">Title</th>
                        </tr>
                    </thead>
                    <tbody class="text-white">
                        @if(isset($movies) > 0)
                        @foreach($movies as $movie)
                        <tr>
                            <td>{{ $movie-> title }}</td>
                            <img src=" {{ $movie->pics }}" width="200" height="300">
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td class="table table-hover">No result found!</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            @endif

        </div>
</body>

</html>