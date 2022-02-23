<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="{{url('review/' . $review->id)}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value=" {{ $review->title }} ">
        <br>
        <input type="text" name="body" value=" {{ $review->body }} ">
        <br>
        <input type="text" name="rate" value=" {{ $review->rate }} ">
        <br>
        <button type="submit">Edit</button>
    </form>
</body>

</html>