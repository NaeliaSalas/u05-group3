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
    <section>
        <form action={{url('comment.destroy' $comment->id)}} method="POST">
            @csrf
            <label for="body">Add comment</label>
            <input type="text" name="body"><br>
            <input type="hidden" value="1" name="user_id_fk"><br>
            <input type="hidden" value="1" name="review_id_fk"><br>
            <button type="submit">Post</button>
        </form>
        <br>
    <div>
        @foreach ($comments as $comment)
            {{ $comment->body }} <br>
            {{ $comment->id }} <br>
            <a href={{url('/destroy_comment/'.$comment->id.'/destroy_comment')}}>Delete</a><br>
            <a href={{url('/edit_comment/'.$comment->id.'/edit_comment')}}>Delete</a><br>
            <hr>
        @endforeach
    </div>
    </section>
</body>
</html>