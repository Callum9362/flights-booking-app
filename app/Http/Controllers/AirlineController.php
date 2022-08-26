<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Airline;

class AirlineController extends Controller
{
   public function index()
   {
       return view('airlines.index');
   }

   public function store(Request $request)
   {
       $airline = new Airline;

       $request->validate([
           'airline-code' => ['required'],
           'airline-name' => ['required'],
           'airline-country' => ['required'],
       ]);

       $airline::create([
           'airline_code' => $request->get('airline-code'),
           'airline_name' => $request->get('airline-name'),
           'airline_country' => $request->get('airline-country'),
           ]);

       return back();

   }
}
