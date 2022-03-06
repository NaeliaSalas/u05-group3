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
                    <h1>Add movie</h1>
                </div>
                <div class="update-form">


                    {{-- MOVIE FORM --}}

                    <form action="/movie" method="POST" target="dummyframemovie">
                        @csrf

                        <div class="input-fields">

                            <div class="form-input-material">
                                <label for="title">Title:</label>
                                <input class="input" type="text" name="title" value="hej"><br>
                            </div>

                            <div class="form-input-material">
                                <label for="body">Description:</label>
                                <input class="input" type="text" name="body" value="hej"><br>
                            </div>

                            <div class="form-input-material">
                                <label for="cover">Add picture:</label>
                                <input class="input" type="url" name="cover" value="https://google.com"><br>
                            </div>

                            <div class="form-input-material">
                                <label for="hero">Add hero picture:</label>
                                <input class="input" type="url" name="hero" value="https://google.com"><br>
                            </div>

                            <div class="form-input-material">
                                <label for="rating">Add rating:</label>
                                <input class="input" list="rating" name="rating" value="1">
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
                                <input class="input" type="url" name="trailer" value="https://google.com"><br>
                            </div>

                            <div class="form-input-material">
                                <label for="yearproduced">Add year produced:</label>
                                <input class="input" type="number" min="1900" max="2023" name="yearproduced" value="1990"><br>
                            </div>

                            <div class="form-input-material">
                                <label for="director">Add director:</label>
                                <input class="input" type="text" name="director" value="jeus"><br>
                            </div>
                            @if (!$posted)
                            <div class="save-changes">
                                <button type="hidden" name="submit2" class="submit btn-primary btn-ghost">Add movie</button>
                            </div>
                            @endif
                        </div>
                    </form>
                    {{-- SLUT PÅ MOVIE FORM--}}

                    <h2>{{$message ?? ''}}</h2>
                    {{var_dump($posted)}}
                    @if ($posted)


                    <form method="post" action="/moviegenre">
                        @csrf
                        <input type="hidden" name="movie" value="{{ $movie->id ?? $movie }}">
                        <input type="hidden" name="genre_id_fk" value="1">
                        <input type="hidden" name="movie_id_fk" value="{{$movie->id ?? $movie }}">
                        <button type="submit" class="{{$toggle}}">Adventure</button>
                        {{var_dump($toggle)}}
                    </form>
                    @endif




                    {{-- GENRE FORM--}}
                    {{--<form method="post" action="{{ 'moviegenre' }}" target="dummyframegenre">
                    @csrf

                    <input type="checkbox" id="adventure" name="genre_id_fk" value="1">
                    <label for="adventure">Adventure</label>
                    <input type="hidden" name="movie_id_fk" value="">

                    <input type="checkbox" id="action" name="genre_id_fk" value="2">
                    <label for="action">Action</label>
                    <input type="hidden" name="movie_id_fk" value="">

                    <input type="checkbox" id="comedy" name="genre_id_fk" value="3">
                    <label for="comedy">Comedy</label>
                    <input type="hidden" name="movie_id_fk" value="">

                    <input type="checkbox" id="horror" name="genre_id_fk" value="4">
                    <label for="horror">Horror</label>
                    <input type="hidden" name="movie_id_fk" value="">

                    <input type="checkbox" id="thriller" name="genre_id_fk" value="5">
                    <label for="thriller">Thriller</label>
                    <input type="hidden" name="movie_id_fk" value="">

                    <input type="checkbox" id="drama" name="genre_id_fk" value="6">
                    <label for="drama">Drama</label>
                    <input type="hidden" name="movie_id_fk" value="">

                    <input type="checkbox" id="romance" name="genre_id_fk" value="7">
                    <label for="romance">Romance</label>
                    <input type="hidden" name="movie_id_fk" value="">

                    <input type="checkbox" id="sci-fi" name="genre_id_fk" value="8">
                    <label for="sci-fi">Sci-Fi</label>
                    <input type="hidden" name="movie_id_fk" value="">

                    <button type="submit" name="submit2" class="submit btn-primary btn-ghost">Add Genre</button>
                    </form>--}}
                    {{-- SLUT PÅ GENRE FORM--}}


                    {{--
                    <iframe name="dummyframegenre" id="dummyframegenre" style="display:none;"></iframe>
                    <iframe name="dummyframemovie" id="dummyframemovie" style="display:none;"></iframe>

                    <button onclick="onSubmit()">TRIGGER BOTH</button>
                    <script>
                        function onSubmit() {
                            let forms = document.getElementsByTagName("form");
                            for (let index = 0; index < forms.length; index++) {
                                const form = forms[index];
                                form.submit();
                            }
                        }
                    </script>--}}
                </div>
            </div>

    </div>
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <li>
        {{ $error }}
    </li>
    @endforeach
    @endif
    <br>
    <div>

    </div>
    </section>

</body>

</html>