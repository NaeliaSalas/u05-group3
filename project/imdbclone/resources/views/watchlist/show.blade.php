<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @foreach ($watchlists as $watchlist)
    <li>{{ $watchlist->title }}</li>

    <!-- @foreach ($entries as $entry)
    <li>{{ $entry->title }}</li>
    @endforeach -->

    <form action="{{url('watchlist/' . $watchlist->id . '/delete')}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    @endforeach
</body>

</html>