<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pulsera;


class PulseraController extends Controller
{
    public function index()
    {
        return Pulsera::all();
    }

    public function show(Pulsera $pulsera)
    {
        return $pulsera;
    }

    public function store(Request $request)
    {
        $pulsera = Pulsera::create($request->all());

        return response()->json($pulsera, 201);
    }

    public function update(Request $request, Pulsera $pulsera)
    {
        $pulsera->update($request->all());

        return response()->json($pulsera, 200);
    }

    public function delete(Pulsera $pulsera)
    {
        $pulsera->delete();

        return response()->json(null, 204);
    }

}