<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostFormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;

class PostareController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputs = $request->all();

        $rules = [
            'title' => 'required|max:50',
            'body' => 'required'
        ];

        $messages = ['required' => 'the :attribute is required, THIS IS AWESOME'];

        // dd($request->validated());
        $validated = Validator::make($inputs, $rules, $messages)->validate();

        // if($validator->fails()){
        //     // dd($validator);
        //     return redirect()->route('posts.create')->withErrors($validator)->withInput();

            // $validated = $validator->validated();

            dd($validated);
        // }
        // $validatedData = $request->validate([
        //     'title' => 'required|max:50',
        //     'body' => 'required'
        // ]);

        // dd($validatedData);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
