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
    <h1>test movies</h1>
    
    @if(session('status'))
        {{ session('status') }}
    @endif
    
    <section>
    
        <form action="{{ url('movie') }}" method="POST">
            @csrf

            <div>
                <label for="title">Add movie title:</label>
                <input type="text" name="title"><br>

                <label for="body">Add movie description:</label>
                <input type="text" name="body"><br>

                <label for="pics">Add movie picture:</label>
                <input type="url" name="pics"><br>

                <label for="rating">Add rating:</label>
                <input list="rating" name="rating">
                <datalist id="rating">
                    <option value="1">
                    <option value="2">
                    <option value="3">
                    <option value="4">
                    <option value="5">
                </datalist><br>

                <label for="trailer">Add trailer:</label>
                <input type="url" name="trailer"><br>

                <label for="yearproduced">Add year produced:</label>
                <input type="number" min="1900" max="2023" name="yearproduced"><br>

                <label for="director">Add director:</label>
                <input type="text" name="director"><br>

            </div>
            <div>
                <button type="submit">Post</button>
            </div>
        </form>

        @foreach ($movies as $movie)
        {{ $movie->title }} <br><br>
        {{ $movie->id }} <br><br>
        {{ $movie->body }} <br><br>
        {{ $movie->pics }} <br><br>
        {{ $movie->rating }} <br><br>
        {{ $movie->trailer }} <br><br>
        {{ $movie->yearproduced }} <br><br>
        {{ $movie->director }} <br><br>

        <form action="{{ url('movie/'.$movie->id . '/edit') }}" method="POST">
            @csrf
            @method('GET')
            <button type="submit">Edit</button>
        </form><br>


        
        <form action="{{ url('movie/'.$movie->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form><br><br>

        <hr>
       

        @endforeach

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