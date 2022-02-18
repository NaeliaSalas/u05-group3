<title>Admin</title>

<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<section class="px-6 py-8">

    <body>
        <section class="px-6 py-8">
            <main class="max-w-lg mx-auto mt-10 bg-gray-100 border-gray-200 p-6 rounded-xl">
                <h1 class="text-center font-bold text-xl">Admin</h1>

                <form method="POST" action="{{ url('admin/posts/create') }}" class="mt-10">
                    @csrf


                </form>
        </section>

    </body>