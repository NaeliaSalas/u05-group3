<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit user</title>
    <link rel="stylesheet" href="mix{{'css/app.css'}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/dash.css') }}">
</head>

<body>

    <div class="edit-user">
        <div class="title">
            <h1>Update user</h1>
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
                    <button type="submit" name="submit" class="submit btn-primary btn-ghost">Save changes</button>
                </div>

            </form>
        </div>
    </div>


</body>

</html>