<?php

namespace App\Http\Controllers;

use App\Models\Pengirim;
use Illuminate\Http\Request;

class pengirimController extends Controller
{
    public function create(Request $request)
    {
        $pengirims = new pengirim();

        $pengirims->nama_pengirim = $request->input('nama_pengirim');
        $pengirims->kota_pengirim = $request->input('kota_pengirim');
        $pengirims->telp_pengirim = $request->input('telp_pengirim');

        $pengirims->save();
        return response()->json($pengirims);
    }

    public function show(Request $request)
    {
        $pengirims = pengirim::all();
        return response()->json($pengirims);
    }

    public function update(Request $request, $id)
    {
        $pengirims = pengirim::find($id);
        $pengirims->nama_pengirim = $request->input('nama_pengirim');
        $pengirims->kota_pengirim = $request->input('kota_pengirim');
        $pengirims->telp_pengirim = $request->input('telp_pengirim');

        $pengirims->save();
        return response()->json($pengirims);
    }

    public function delete(Request $request, $id)
    {
        $pengirims = pengirim::find($id);
        $pengirims->delete();
        return response()->json($pengirims);
    }
}
