<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add comment</title>
    <link rel="stylesheet" href="mix{{'css/app.css'}}">
</head>

<body>
    <h1>Update movie</h1>

    <section>

        <form action="{{ url('movie/' . $movie->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label for="title">Add movie title:</label>
                <input type="text" name="title" value="{{ $movie->title }}"><br>

                <label for="body">Add movie description:</label>
                <input type="text" name="body" value="{{ $movie->body }}"><br>

                <label for="cover">Add movie picture:</label>
                <input type="url" name="cover" value="{{ $movie->cover }}"><br>

                <label for="rating">Add rating:</label>
                <input list="rating" name="rating" value="{{ $movie->rating }}">
                <datalist id="rating">
                    <option value="1">
                    <option value="2">
                    <option value="3">
                    <option value="4">
                    <option value="5">
                </datalist><br>

                <label for="trailer">Add trailer:</label>
                <input type="url" name="trailer" value="{{ $movie->trailer }}"><br>

                <label for="yearproduced">Add year produced:</label>
                <input type="number" min="1900" max="2023" name="yearproduced" value="{{ $movie->yearproduced }}"><br>

                <label for="director">Add director:</label>
                <input type="text" name="director" value="{{ $movie->director }}"><br>

            </div>
            <div>

                <button type="submit">Post</button>
            </div>
        </form>

        @if ($errors->any())
        @foreach ($errors->all() as $error)
        <li>
            {{ $error }}
        </li>
        @endforeach
        @endif
        <br>
        <div>

        </div>
    </section>
</body>

</html>