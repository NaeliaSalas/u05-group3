<title>Login</title>

<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.ner/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>


<body>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">

            <h1 class="text-center font-bold text-xl" font-bold text-xl>Log In</h1>

            <form method="POST" action="{{ route('login.user') }}" class="mt-10">
                @csrf


                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="emails">
                        Email
                    </label>
                    <input class="border border-gray-400 p-2 w-full" type="email" name="email" id="email" value="{{old ('email')}}" required>

                    @error('email')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

            

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">
                        Password
                    </label>

                    <input class="border border-gray-400 p-2 w-full" type="password" name="password" id="password" required>
                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-whote rounded py-2 px-4 hover:bg-blue-500">
                        Log in
                    </button>
                </div>

                <div class="text-grey-dark mt-6">
                    Not registered?  
                    <a class="no-underline border-b border-blue text-blue " href="../register/">
                       <p  class="submit btn-primary btn-ghost underline"> Sign up here</p>
                    </a>
                </div>

</body>
</form>

</main>
</section>
</body>