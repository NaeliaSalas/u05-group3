<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add movie</title>
    <link rel="stylesheet" href="mix{{'css/app.css'}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/dash.css') }}"></head>

@extends('admin/components/menu')
@section('content')
@endsection
<body>
    <div class="edit-user">
        <div class="title">
            <h1>Add movie</h1>
        </div>
    <section>
        <div class="update-form">

        <form action="/movie" method="POST">
            @csrf

            <div class="input-fields">
                <div class="form-input-material">
                <label for="title">Title:</label>
                <input class="input" type="text" name="title"><br>
            </div>

            <div class="form-input-material">
                <label for="body">Add movie description:</label>
                <input class="input" type="text" name="body"><br>
            </div>

            <div class="form-input-material">
                <label for="cover">Add movie picture:</label>
                <input class="input" type="url" name="cover"><br>
            </div>

            <div class="form-input-material">
                <label for="hero">Add hero picture:</label>
                <input class="input" type="url" name="hero"><br>
            </div>

            <div class="form-input-material">
                <label for="rating">Add rating:</label>
                <input class="input"  list="rating" name="rating">
                <datalist id="rating">
                    <option value="1">
                    <option value="2">
                    <option value="3">
                    <option value="4">
                    <option value="5">
                </datalist><br>
            </div>

            <div class="form-input-material">
                <label for="trailer">Add trailer:</label>
                <input class="input" type="url" name="trailer"><br>
            </div>

            <div class="form-input-material">
                <label for="yearproduced">Add year produced:</label>
                <input class="input" type="number" min="1900" max="2023" name="yearproduced"><br>
            </div>

            <div class="form-input-material">
                <label for="director">Add director:</label>
                <input class="input" type="text" name="director"><br>
            </div>

            </div>
            <div class="save-changes">
                <button type="submit" name="submit" class="submit btn-primary btn-ghost">Save changes</button>
            </div>
        </form>
       </div>
    </div>
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