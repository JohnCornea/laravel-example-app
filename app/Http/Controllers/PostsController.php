<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller 
{

    public function index(Request $request) 
    {
        return view('welcome');
    }

    // public function create()
    // {
    //     return view('posts/create');
    // }

    public function update(Request $request, string $id)
    {
        return "UPDATED POST no" . $id;
    }

    public function the_path(Request $request)
    {
        // if ($request->is('posts/path'))
        // {
        //     return "TRUE";
        // }

        if ($request->routeIs('posts.path'))
        {
            return "The route name is posts.path";
        }
    }
}