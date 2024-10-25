<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function index(Request $request)
    {
        // return $request->session()->get('name');
        // return $request->session()->only(['name']);   
        
        return session()->all();
    }

    // Methods to play with sessions
    public function set(Request $request)
    {
        // $query = $request->query();
        // session(['cars' => ['Mercedes', 'Audi', 'Tesla', 'Opel']]);
        // session()->push('cars', 'Dacia');
        // $request->session()->put($query);

        // TURN THE ARRAY INTO A COLLECTION TO REMOVE SPECIFIC 
        $cars = ['Mercedes', 'Audi', 'Tesla', 'Opel'];
        session(['cars'=> collect($cars)]);
        
        return 'session($key => $value SESSION SET)';
    }

    public function delete()
    {

        // DELETE KEY OF ARRAY USING COLLECTIONS METHODS
        $car = session('cars')->search('Opel');

        session('cars')->forget($car);
        // session()->forget('cars');
        // session()->forget('name');
        // foreach(session('cars') as $car) {
        //     echo $car;
        // }
        // WITH THIS WE PUT BACK IN THE CARS ARRAY, THE RESULT OF THE ARRAY_DIFF AFTER WE TAKE OUT TOYOTA
        // session()->put('cars', array_diff(session()->get('cars'), ['Dacia']));

        return "forgotten";
    }
}
