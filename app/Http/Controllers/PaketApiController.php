<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class PaketApiController extends Controller
{
    public function index()
    {
        $pakets = Paket::all();
        return response()->json(['data' => $pakets]);
    }

    public function store(Request $request) 
    {
        $paket = Paket::create($request->all());
        return response()->json(['data' => $paket]);
    }

    public function show($id)
    {
        $paket = Paket::find($id);
        return response()->json(['data' => $paket]);
    }

    public function update(Request $request, $id) 
    {
        $paket = Paket::find($id);
        $paket->update($request->all());
        return response()->json(['data' => $paket]);
    }

    public function destroy(Paket $paket, $id)
    {
        $paket = Paket::find($id);
        $paket->delete();
        return response()->json(['data' => null]);
    
    }
}
