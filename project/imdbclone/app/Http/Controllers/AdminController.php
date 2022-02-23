<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Closure;
use GuzzleHttp\Psr7\Request;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

// class AdminController extends Controller
// {
//     public function handle(Request $request, Closure $next)
//     {
//         if (Auth::user()->isAdmin == 0) {
//             return redirect("Not admin")->withSuccess('You need to be admin to access this page.');
//         }
//         return $next($request);
//     }


    // public function show(Post $post)
    // {
    //     return view('posts.show', [
    //         'post' => $post

    //     ]);
    // }

    // public function create()

    // {
    //     return view('posts.create');
    // }
