<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use Illuminate\Http\Request;

class AirportController extends Controller
{
    public function index()
    {
        return view('airports.index')
        ->with('airports', Airport::cursorPaginate(20));
    }

    public function store(Request $request)
    {
        $request->validate([
            'airport-name' => ['required'],
            'airport-country' => ['required'],
            'airport-city' => ['required'],
            'airport-code' => ['required'],
        ]);

        Airport::create([
            'airport_name' => $request->get('airport-name'),
            'country' => $request->get('airport-country'),
            'state' => $request->get('airport-state'),
            'city' => $request->get('airport-city'),
            'code' => $request->get('airport-code'),
        ]);

        return back();
    }
}
