<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>{{ $watchlist->title }}</p>
    @foreach ($entries as $entry)
    <li> {{ $entry->title }} </li>
    @endforeach

    <form action="{{url('watchlist/' . $watchlist->id . '/edit')}}" method="GET">
        @csrf
        <button type="submit">Edit</button>
    </form>
    <form action="{{url('watchlist/' . $watchlist->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</body>

</html>