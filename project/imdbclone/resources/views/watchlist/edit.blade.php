<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{url('watchlist/' . $watchlist->id)}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value=" {{ $watchlist->title }} ">
        <br>
        <button type="submit">Save</button>
    </form>
</body>

</html>