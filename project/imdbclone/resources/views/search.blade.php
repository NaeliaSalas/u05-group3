<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search with pagination</title>
    <link rel="stylesheet" href="{{ asset('')}}">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6" style=>
                <h4>Search movies</h4>
                <hr>
                <form action"" method="GET">
                    <div class="form-group">
                        <label for="">Enter keyword</label>
                        <input type="text" class="form-controll" name="query" placeholders="Shearc movie...">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Search</button>
                        <label for=""></label>
                    </div>
                </form>
            </div>
            <br>
            <br>
            <hr>
            <br>
            @if(isset($movies))

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Title</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($movies) > 0)
                    @foreach($movies as $movie)
                    <tr>
                        <td>{{ $movie-> title }}</td>
                        <td>{{ $movie->pics }}</td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td>No result found!</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
        @endif

    </div>
</body>

</html>