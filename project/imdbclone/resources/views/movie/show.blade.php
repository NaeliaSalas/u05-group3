<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <p>{{ $movie }}</p>

    {{ $movie->title }} <br>
    {{ $movie->body }}
    {{ $movie->cover }}
    {{ $movie->hero }}
    {{ $movie->trailer }}
    {{ $movie->rating }}
    <br><br>
    @foreach ($movie->reviews as $review)
    {{ $review->title }} <br>
    {{ $review->body }} <br>
    {{ $review->rate }} <br>
    @foreach ($review->comments as $comment)
    <div>{{ $comment->body }}</div>
    @endforeach

    @endforeach

</body>

</html>