<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orden;
use Illuminate\Support\Facades\DB;


class OrdenController extends Controller
{
    public function index()
    {
        return Orden::all();
    }

    public function show($id)
    {
        $orden = DB::table('ordens')
                ->join('productos', 'ordens.id_producto', '=', 'productos.id')
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

    public function delete($id)
    {
        $orden = DB::table('pulseras')->delete($id);
        return response()->json($orden, 200);
    }

}
