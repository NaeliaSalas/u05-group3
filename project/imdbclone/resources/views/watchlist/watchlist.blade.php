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


        echo Auth::user()->id . ' ';
        echo Auth::user()->username;
        ?>
    </div>
    <form action="" method="post">
        @csrf
        <input type="text" name="title">
        <input type="hidden" name="user_id_fk" value=" {{ Auth::id() }} ">
        <button type="submit">Create watchlist</button>
    </form>

    @foreach ($watchlists as $watchlist)
    <p>{{ $watchlist->title }}</p>
    @foreach ($watchlist->entries as $entry)
    <li>{{ $entry->title }}</li>

    <form action="{{url('entry/' . $entry->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete entry</button>
    </form>
    @endforeach

    <form action="{{url('watchlist/' . $watchlist->id . '/edit')}}" method="GET">
        @csrf
        <button type="submit">Edit</button>
    </form>
    <form action="{{url('watchlist/' . $watchlist->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
        @endforeach
    </form>


    {{-- ///////////////////////////////////// --}}
    <br><br><br>
    <form action="{{ url('entry') }}" method="POST">
        @csrf

        <div>
            <label for="title">Add to watchlist</label>
            <input type="text" name="movie_id_fk" value="{{ request()->id }}">
            <input type="text" name="title" value="{{ request()->movietitle }}">

            {{-- <input type="hidden" name="watchlist_id_fk" value="1"> --}}

            <select name="watchlist_id_fk">
                <option name="" label="-- Choose watchlist --" value="">
                    @foreach ($watchlists as $watchlist)
                <option name="watchlist_id_fk" label="{{ $watchlist->title }}" value="{{ $watchlist->id }}">
                    @endforeach
            </select><br>
            <button type="submit">Add</button>
    </form>

</body>

</html>