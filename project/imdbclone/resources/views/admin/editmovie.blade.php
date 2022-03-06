<title>Admin Dashboard</title>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/dash.css') }}">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <title>CINEMAH-Dashboard</title>
    <script src="https://cdn.tailwindcss.com/"></script>
    <script src="https://kit.fontawesome.com/b81c5c3bb7.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="flex">
        <div class="flex flex-col w-64 h-screen px-4 py-8 overflow-y-auto border-r">
            <a href="/">
                <img src="{{ URL('images/Cinemah-Logo2.png')}}" alt="">
            </a>
            <div class="flex flex-col justify-between mt-6">
                <aside>

                    <ul>
                        <li>
                            <a class="flex items-center px-4 py-2 text-gray-700 bg-gray-100 rounded-md " href="/admin/dashboard">
                                <i class="fa fa-home" aria-hidden="true"></i>

                                <span class="mx-4 font-medium">Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200" href='/user'>
                                <i class="fas fa-user-alt" aria-hidden="true"></i>

                                <span class="mx-4 font-medium">Users</span>
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200" href='/movie'>
                                <i class="fa fa-film" aria-hidden="true"></i>

                                <span class="mx-4 font-medium">Movies</span>
                            </a>
                        </li>

                        <li>
                            <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200" href='/logout'>
                                <i class="fa fa-cog" aria-hidden="true"></i>

                                <span class="mx-4 font-medium">Logout</span>
                            </a>
                        </li>

                    </ul>

                </aside>

            </div>
        </div>

        <body>
            <div class="edit-user">
                <div class="title">
                    <h1>Edit movie</h1>
                </div>

                <div class="update-form">
                    <form action="{{ url('movie/' . $movie->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="input-fields">

                            <div class="form-input-material">
                                <label for="title">Title</label>
                                <input class="input" type="text" name="title" value="{{ $movie->title }}"><br>
                            </div>

                            <div class="form-input-material">
                                <label for="body">Add movie description:</label>
                                <input class="input" type="text" name="body" value="{{ $movie->body }}"><br>
                            </div>

                            <div class="form-input-material">
                                <label for="cover">Add movie picture:</label>
                                <input class="input" type="url" name="cover" value="{{ $movie->cover }}"><br>
                            </div>

                            <div class="form-input-material">
                                <label for="hero">Add hero picture:</label>
                                <input class="input" type="url" name="hero"><br>
                            </div>

                            <div class="form-input-material">
                                <label for="rating">Add rating:</label>
                                <input class="input" list="rating" name="rating" value="{{ $movie->rating }}">
                                <datalist id="rating">
                                    <option value="1">
                                    <option value="2">
                                    <option value="3">
                                    <option value="4">
                                    <option value="5">
                                </datalist><br>
                            </div>
                            <div class="form-input-material">
                                <label for="trailer">Add trailer:</label>
                                <input class="input" type="url" name="trailer" value="{{ $movie->trailer }}"><br>
                            </div>
                            <div class="form-input-material">
                                <label for="yearproduced">Add year produced:</label>
                                <input class="input" type="number" min="1900" max="2023" name="yearproduced" value="{{ $movie->yearproduced }}"><br>
                            </div>
                            <div class="form-input-material">
                                <label for="director">Add director:</label>
                                <input class="input" type="text" name="director" value="{{ $movie->director }}"><br>
                            </div>
                        </div>
                        <div class="save-changes">
                            <button type="submit" name="submit" class="submit btn-primary btn-ghost">Save changes</button>
                        </div>

                    </form>
                </div>

                {{-- GENRE FORM--}}
                <h2 class="text-white">{{$message ?? ''}}</h2>

                @if ($posted)
                <form action="/moviegenre" method="post">
                    @csrf
                    <input type="checkbox" name="genres[]" value="1">Adventure<br>
                    <input type="checkbox" name="genres[]" value="2">Action<br>
                    <input type="checkbox" name="genres[]" value="3">Comedy<br>
                    <input type="checkbox" name="genres[]" value="4">Horror<br>
                    <input type="checkbox" name="genres[]" value="5">Thriller<br>
                    <input type="checkbox" name="genres[]" value="6">Drama<br>
                    <input type="checkbox" name="genres[]" value="7">Romance<br>
                    <input type="checkbox" name="genres[]" value="8">Sci-fi<br>
                    <input type="hidden" name="movie_id_fk" value="{{$movie->id ?? $movieId}}">
                    <input type="submit" value="Submit">
                </form>
                @endif


                @if ($errors->any())
                @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
                @endforeach
                @endif
                <br>
            </div>

        </body>

        </html>