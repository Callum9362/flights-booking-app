<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Airline;

class AirlineController extends Controller
{
   public function index()
   {
       return view('airlines.index')
           ->with('airlines', Airline::cursorPaginate(20));
   }

   public function store(Request $request)
   {

       $request->validate([
           'airline-code' => ['required', 'unique:airlines'],
           'airline-name' => ['required', 'unique:airlines'],
           'airline-country' => ['required'],
       ]);

       Airline::create([
           'airline_code' => $request->get('airline-code'),
           'airline_name' => $request->get('airline-name'),
           'airline_country' => $request->get('airline-country'),
           ]);

       return back();

   }

   public function delete(Airline $id)
   {
        $airline = Airline::find($id);
        $airline->each->delete();
        return back();
   }
}
