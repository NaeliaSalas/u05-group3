<!DOCTYPE html>

<title>Login</title>
<link rel="stylesheet" href="/app.css">

<body>

    <div class="mt-8 md:mt-0">
        @auth
        <span class="text-xs font-bold uppercase">Welcome!</span>

        <form method="POST" action="/logout" class="text-xs font-semibold text-blue-500 ml-6">
            @csrf

            <button typ="submit">Log Out</button>

        </form>

        @else
        <a href="/register" class="text-xs font-bold uppercase">Register</a>
        <a href="/login" class="ml-3 text-xs font-bold uppercase">Log In</a>

        @endauth
    </div>
    {{$content}}
</body>