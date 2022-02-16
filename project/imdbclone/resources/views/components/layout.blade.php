<!DOCTYPE html>

<title>Login</title>
<!-- <link rel="stylesheet" href="/app.css"> -->
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">


<body>

    <div class="mt-8 md:mt-0">
        @auth
        <span class="text-xs font-bold uppercase">Welcome!</span>

        <form method="POST" action="/logout" class="text-xs font-semibold text-blue-500 ml-6">
            @csrf

            <div class="mb-6">
                <button type="submit" class="bg-blue-400 text-whote rounded py-2 px-4 hover:bg-blue-500">
                    Log out
                </button>
            </div>

        </form>

        @else
        <a href="/register" class="text-xs font-bold uppercase">Register</a>

        <a href="/login" class="ml-6 text-xs font-bold uppercase">Log In</a>

        @endauth
    </div>

</body>