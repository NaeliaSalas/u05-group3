<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Add a review</h1>

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{url('review')}}" method="post">
        @csrf
        <input type="text" placeholder="title" name="title">
        <br>
        <input type="text" placeholder="body" name="body">
        <br>
        <input type="text" placeholder="rating" name="rate">
        <br>
        <input type="hidden" name="user_id_fk" value="1">
        <input type="hidden" name="movie_id_fk" value="1">
        <button type="submit">Post</button>
    </form>

    <div>
        @foreach ($reviews as $review)
        <div style="margin: 2rem">
            {{ $review->id }}
            {{ $review->title }} <br>
            {{ $review->body }} <br>
            {{ $review->rate }} <br>
            <form action="{{url('review/' . $review->id . '/edit')}}" method="GET">
                @csrf
                <button type="submit">Edit</button>
            </form>
            <form action="{{url('review/' . $review->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>

        @endforeach
    </div>
</body>

</html>