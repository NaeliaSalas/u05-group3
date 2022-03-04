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
            <h1>Edit user</h1>
        </div>

        @if(session('status'))
        {{ session('status') }}
        
        @endif
        <div class="update-form">

            <form action="{{ url('user/' . $user->id) }}" method="POST">
                
                @csrf
                @method('PUT')

                <div class="input-fields">
                    <div class="form-input-material">
                        <label for="name">Name</label>
                        <input class="input" type="text" name="name" value="{{ $user->name}}"><br>
                    </div>
                    <div class="form-input-material">
                        <label for="username">Username</label>
                        <input class="input" type="text" name="username" value="{{ $user->username }}"><br>
                    </div>

                    <div class="form-input-material">
                        <label for="email">Email</label>
                        <input class="input" type="email" name="email" value="{{ $user->email }}"><br>
                    </div>
                </div>

                <div class="save-changes">
                    <button type="submit" name="submit" class="submit btn-primary btn-ghost ">Save changes</button>
                </div>

            </form>
        </div>
    </div>


</body>

</html>