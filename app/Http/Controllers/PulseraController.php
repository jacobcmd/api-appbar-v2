<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pulsera;
use Illuminate\Support\Facades\DB;


class PulseraController extends Controller
{
    public function index()
    {
        return Pulsera::all();
    }

    public function show($id)
    {
        $pulsera = DB::table('pulseras')
                ->where('id_pulsera', '=', $id)
                ->get();
        return $pulsera;
    }

    public function store(Request $request)
    {
        $pulsera = Pulsera::create($request->all());

        return response()->json($pulsera, 201);
    }

    public function update($id)
    {
        $affected = DB::table('pulseras')
              ->where('id_pulsera', $id)
              ->update(['pagado' => 1]);

        return response()->json($affected, 200);
    }

    public function delete(Pulsera $pulsera)
    {
        $pulsera->delete();

        return response()->json(null, 204);
    }

}
