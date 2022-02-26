<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
</head>

<body>
    <p>
        {{ $review->title }} <br>
        {{ $review->body }} <br>
        @foreach ($comments as $comment)
        <li>{{ $comment->body }}</li>
        @endforeach
    </p>
</body>

</html>