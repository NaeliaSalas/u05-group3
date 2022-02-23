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
    <h1>Edit comments</h1>
    @if(session('status'))
        {{ session('status') }}
    @endif

    <section>
        <form action="{{ url('comment/' . $comments->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="body">Edit comment</label>
            <input type="text" name="body" value="{{ $comments->body }}"><br>
            <input type="hidden" value="1" name="user_id_fk"><br>
            <input type="hidden" value="1" name="review_id_fk"><br>
            <button type="submit">Update</button>
        </form>
        <br>
        @if ($errors->any())
        @foreach ($errors->all() as $error)
        <li>
            {{ $error }}
        </li>
        @endforeach
    @endif

    </section>
</body>
</html>