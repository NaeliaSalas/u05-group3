<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All comments</title>
    <link rel="stylesheet" href="mix{{'css/app.css'}}">
</head>
<body>
    <h1>Comments</h1>
    <a href="{{ url('comment/create_comment') }}" class=""> Add Comment</a>
    <section>
      
        @if(session('status'))
            {{ session('status') }}
        @endif

        @foreach ($comments as $comment)
            {{ $comment->id }} <br> 
            {{ $comment->body }} <br>

            <a href="{{ url('comment/edit_comment/'.$comment->id.'/edit') }}">Edit</a><br>


            <form action="{{ url('comment/'.$comment->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form><br>
        <hr>

        @endforeach
    </section>
</body>
</html>