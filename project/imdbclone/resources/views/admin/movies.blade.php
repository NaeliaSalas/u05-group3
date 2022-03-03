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

@extends('admin/components/menu')
@section('content')
@endsection
<section>


        <div class="w-full h-full p-4 m-8 overflow-y-auto">
      
            <a href="/movie/create">
                <button type="button" class="justify-right px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Add movie +</button>
            </a>
          
            <!-- Content-->
            <div class="flex items-right justify-right w-medium">
                <!-- Table-->
                <div class="bg-white px-4 md:px-10 pb-5 w-full">
                    <div class="overflow-x-auto">
                        <table class="w-full whitespace-nowrap">
                            <tbody class="w-full">
                                <!-- row-->
                                @foreach ($movies as $movie)
                                <tr tabindex="0" class="w-full focus:outline-none text-sm leading-none text-gray-600 h-20 hover:bg-slate-50">
                                    <td class="w-1/2">
                                        <div class="flex items-right">
                                            <div class="w-10 h-10 bg-gray-700 rounded-sm flex items-right justify-right">
                                                <img src="{{$movie->cover}}" />
                                            </div>
                                            <div class="pl-2">
                                                <p class="text-sm font-medium leading-none text-gray-800">{{$movie->title}}</p>
                                            </div>

                                            <div class="pl-2">
                                                <p class="text-sm font-medium leading-none text-gray-800">{{$movie->yearproduced}}</p>
                                            </div>

                                            <div class="pl-2">
                                                <p class="text-sm font-medium leading-none text-gray-800">{{$movie->director}}</p>
                                            </div>

                                            <div class="pl-2">
                                                <p class="text-sm font-medium leading-none text-gray-800">{{$movie->genre}}</p>
                                            </div>

                                            <div class="pl-2">
                                                <p class="text-sm font-medium leading-none text-gray-800">2hr</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <form action="{{url('movie/' . $movie->id . '/edit')}}" method="GET">
                                            @csrf
                                            <button type="submit">Edit</button>
                                        </form>
                                        <form action="{{url('movie/' . $movie->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Delete</button>
                                        </form>
                                    <td>
                                        <p class="pl-16">Created at {{$movie->created_at}}</p>
                                    </td>
                                </tr>
                                @endforeach
                                <!-- row-->
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Table-->
            </div>
            <!-- Content-->
        </div>
    </section>

</body>

</html>