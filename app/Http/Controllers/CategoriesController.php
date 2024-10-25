<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('welcome');
        // return "CREATE";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "STORE METHOD";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "Category #" . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       return "No# " . $id . " has been edited";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Category # " . $id . " has been updated";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Category # " . $id . " has been deleted";
    }

     public function attach_post()
     {
        return "attaching post";
     }
}
