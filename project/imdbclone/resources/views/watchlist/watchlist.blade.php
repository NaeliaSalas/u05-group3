<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div>

        <?php

        use Illuminate\Support\Facades\Auth;

        echo Auth::user();
        ?>
    </div>
    <form action="" method="post">
        @csrf
        <input type="text" name="title">
        <input type="hidden" name="user_id_fk" value=" {{ Auth::id() }} ">
        <button type="submit">Create watchlist</button>
    </form>

    @foreach ($watchlists as $watchlist)
    <li>{{ $watchlist->title }}</li>
    <form action="{{url('watchlist/' . $watchlist->id . '/delete')}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
        @endforeach
</body>

</html>