<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukApiController extends Controller
{
    public function index()
    {
        $produks = Produk::all();
        return response()->json(['data' => $produks]);
    }

    public function store(Request $request)

    {  
        $produks = Produk::create($request->all());
        return response()->json(['data' => $produks]);
    }

    public function show($id)
    {
        $produk = Produk::find($id);
        return response()->json(['data' => $produk]);
    }

   public function update(Request $request, $id)
    {
        $produk = Produk::find($id);
        $produk->update($request->all());
        return response()->json(['data' => $produk]);
        }

    public function destroy(Produk $produk, $id)
    {
        $produk = Produk::find($id);
        $produk->delete();
        return response()->json(['data' => null]);
    }
}
