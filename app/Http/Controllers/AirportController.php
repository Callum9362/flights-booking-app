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
            'airport_name' => ['required', 'unique:airports'],
            'country' => ['required'],
            'city' => ['required'],
            'code' => ['required', 'unique:airports'],
        ]);

        Airport::create([
            'airport_name' => $request->get('airport_name'),
            'country' => $request->get('country'),
            'state' => $request->get('state'),
            'city' => $request->get('city'),
            'code' => $request->get('code'),
        ]);

        return back();
    }

    public function delete(Airport $id)
    {
        $airport = Airport::find($id);
        $airport->each->delete();
        return back();
    }
}
