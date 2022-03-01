<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit user</title>
    <link rel="stylesheet" href="mix{{'css/app.css'}}">
</head>

<body>

    <h1>Update user</h1>

    @if(session('status'))
    {{ session('status') }}
    @endif


    <form action="{{ route('admin.update', ['id'=>$users->id]) }}" method="POST">



        @csrf
        @method('PUT')

        <div>
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ $users->name}}"><br>

            <label for="username">Username</label>
            <input type="text" name="username" value="{{ $users->username }}"><br>

            <label for="email">Email</label>
            <input type="email" name="email" value="{{ $users->email }}"><br>

            <div>
                <button type="submit" name="submit">Save changes</button>
            </div>
    </form>

</body>

</html>