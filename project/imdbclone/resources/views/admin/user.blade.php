<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="dash.css" />
    <title>CINEMAH-Dashboard</title>
    <script src="https://cdn.tailwindcss.com/"></script>
    <script src="https://kit.fontawesome.com/b81c5c3bb7.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="flex">
        <div class="flex flex-col w-64 h-screen px-4 py-8 overflow-y-auto border-r">
            <h2 class="text-2xl font-extralight text-center text-white logo-bg">CINEMAH</h2>


            <div class="flex flex-col justify-between mt-6">
                <aside>

                    <ul>
                        <!-- Element-->
                        <li>
                            <a class="flex items-center px-4 py-2 text-gray-700 bg-gray-100 rounded-md " href="/admin/dashboard">
                                <i class="fa fa-home" aria-hidden="true"></i>

                                <span class="mx-4 font-medium">Dashboard</span>
                            </a>
                        </li>
                        <!-- Element-->

                        <!-- Element-->
                        <li>
                            <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200" href="/settings.html">
                                <i class="fa fa-cog" aria-hidden="true"></i>

                                <span class="mx-4 font-medium">Settings</span>
                            </a>
                        </li>
                        <!-- Element-->

                        <!-- Element-->
                        <li>
                            <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200" href="/user">
                                <i class="fas fa-user-alt" aria-hidden="true"></i>

                                <span class="mx-4 font-medium">Users</span>
                            </a>
                        </li>
                        <!-- Element-->

                        <!-- Element-->
                        <li>
                            <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200" href="/movies.html">
                                <i class="fa fa-film" aria-hidden="true"></i>

                                <span class="mx-4 font-medium">Movies</span>
                            </a>
                        </li>
                        <!-- Element-->

                        <!-- Element-->
                        <li>
                            <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200" href="#">
                                <i class="fa fa-cog" aria-hidden="true"></i>

                                <span class="mx-4 font-medium">Something</span>
                            </a>
                        </li>
                        <!-- Element-->

                        <!-- Element-->
                    </ul>

                </aside>


            </div>
        </div>

        <div class="w-full h-full p-4 m-8 overflow-y-auto bg-slate-200">
            <!-- Content-->
            <div class="flex items-center justify-center w-full">
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <!-- <th scope="col" class="px-10 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                            <th scope="col" class="px-60 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th> -->
                                            <!-- <th scope="col" class="relative px-6 py-3"> -->
                                            <span class="sr-only">Edit</span>

                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($users as $user)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">

                                                    <div class="ml-4">
                                                        <div class="text-sm text-gray-500">{{$user->name}}</div>
                                                        <div class="text-sm text-gray-500">{{$user->email}}</div>
                                                        <div class="text-sm text-gray-500">{{$user->password}}</div>

                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800"> User </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"></td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">


                                                <form action="{{url('user/' . $user->id . '/edit')}}" method="GET">
                                                    @csrf
                                                    <button type="submit">Edit</button>
                                                </form>
                                                <form action="{{url('user/' . $user->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Table-->
            <!-- <div class="bg-white px-4 md:px-10 pb-5 w-full"> -->
            <div class="overflow-x-auto">
                <table class="w-full whitespace-nowrap">
                    <tbody class="w-full">
                        <!-- row-->
                        <tr tabindex="0" class="w-full focus:outline-none text-sm leading-none text-gray-600 h-16 hover:bg-slate-50">
                            <td class="w-1/2">
                                <div class="flex items-center">

                                    <!-- row-->
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Table-->

    </div>
    <!-- Content-->
    </div>
</body>

</html>