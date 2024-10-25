<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $recordCreated = false;
        $componentName = null;

        if($recordCreated) {
            $componentName = 'success';
        } else {
            $componentName = 'error';
        }

        return view('posts.index', compact('componentName'));
    }
}
