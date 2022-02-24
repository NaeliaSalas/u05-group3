<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<body>

    <section class=px-6 py-8>

        <main class="max-6xl mx-auto mt-10 lg:mt-20 space-y-6">
            <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">

                <div class="col-span-4 lg:text-center lg:pt-14 mb-10">

                    <p class="mt-4b block text-gray-400 text-xs">
                        Published <time>
                    </p>


                    <div class="flex items-center lg:justify-center text-sm mt-4">


                    </div>

                    <div class="col-span-8">
                        <div class="hidden lg:flex justify-between mb-6">
                            <a href="/" class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                                <svg width="22" height"22" viewBox="0 0 22 22" class="mr-2">
                                    <g fill=none" fill-rule="evenodd">
                                        <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84v1z">
                                        </path>
                                        <path class="fill-current" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                        </path>
                                    </g>
                                </svg>
                                Back to Posts
                            </a>

                            <div class="space-x-2">
                                <x-category-button :category="$post->category" />
                            </div>
                        </div>

                        <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                            {{ $post->title }}
                        </h1>
                        <div class="space-y-4 lg:text-lg leading-loose">{!! $post->body !!}</div>
                    </div>

                    <!-- //postcomment -->
                    <section class="col-span-8 col-start-5 mt-10">
                        <article class="flex bg-gray-100 border border-grey-200 p-6 rounded-xl space-x-4">
                            <div class="flex-shrink-0">
                                <img src="https://i.pravatar.cc/100 " alt="" width="60" height="60" class="rounded-xl">
                            </div>

                            <div>
                                <header>
                                    <h3 class="font-bold">John Doe</h3>
                                    <p class="text-xs">
                                        Posted
                                        <time>4 months ago </time>
                                    </p>
                                </header>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam non
                                    aspernatur dolorum accusantium error omnis. Voluptatum culpa similique error aspernat
                                    ur aut quae blanditiis tenetur fuga repudiandae? Reiciendis delectus hic a?</p>
                            </div>

                        </article>
                    </section>
            </article>
        </main>
    </section>
</body>

</html>