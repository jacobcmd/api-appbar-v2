<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Orden;

class OrdenController extends Controller
{
    public function index()
    {
        return Orden::all();
    }

    public function show($id)
    {
        $orden = DB::table('ordens')
                ->where('id_pulsera', '=', $id)
                ->get();
        return $orden;
    }

    public function store(Request $request)
    {
        $orden = Orden::create($request->all());

        return response()->json($orden, 201);
    }

    public function update(Request $request, Orden $orden)
    {
        $orden->update($request->all());

        return response()->json($orden, 200);
    }

    public function delete(Orden $orden)
    {
        $orden->delete();

        return response()->json(null, 204);
    }

}
