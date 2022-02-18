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
    <h1>test comments</h1>
    @if(session('status'))
        {{ session('status') }}
    @endif
    
    <section>
        <form action="{{ url('comment') }}" method="POST">
            @csrf
            <label for="body">Add comment</label>
            <input type="text" name="body"><br>
            <input type="hidden" value="1" name="user_id_fk"><br>
            <input type="hidden" value="1" name="review_id_fk"><br>
            <button type="submit">Post</button>
        </form>
        <br>
    <div>
        

    </div>
    </section>
</body>
</html>