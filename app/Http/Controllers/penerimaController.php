<?php

namespace App\Http\Controllers;

use App\Models\Penerima;
use Illuminate\Http\Request;

class penerimaController extends Controller
{
    public function create(Request $request)
    {
        $penerimas = new penerima();

        $penerimas->nama_penerima = $request->input('nama_penerima');
        $penerimas->alamat = $request->input('alamat');
        $penerimas->kode_pos = $request->input('kodepos');
        $penerimas->telp_penerima = $request->input('telp_penerima');

        $penerimas->save();
        return response()->json($penerimas);
    }

    public function show(Request $request)
    {
        $penerimas = penerima::all();
        return response()->json($penerimas);
    }

    public function update(Request $request, $id)
    {
        $penerimas = penerima::find($id);
        $penerimas->nama_penerima = $request->input('nama_penerima');
        $penerimas->alamat = $request->input('alamat');
        $penerimas->kode_pos = $request->input('kodepos');
        $penerimas->telp_penerima = $request->input('telp_penerima');

        $penerimas->save();
        return response()->json($penerimas);
    }

    public function delete(Request $request, $id)
    {
        $penerimas = penerima::find($id);
        $penerimas->delete();
        return response()->json($penerimas);
    }
}
