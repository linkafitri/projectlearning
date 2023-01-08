<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProdukApiController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return response()->json(['produks' => $produk], 200);
    }

    public function store(Request $request)

    {  
        $request->validate([
            'namaproduk'=>'required|max:255',
            'hargaproduk'=>'required|integer',
            'desk'=>'required|max:255',
            'fotoproduk'=>'required|image|mimes:png,jpg,jpeg|max:2040',
        ]);

        $produk = new Produk;
        $produk->namaproduk = $request->namaproduk;
        $produk->hargaproduk = $request->hargaproduk;
        $produk->desk = $request->desk;
        if($request->hasfile('fotoproduk'))
        {
            $file = $request->file('fotoproduk');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('upload/produks/', $filename);
            $produk->fotoproduk=$request->fotoproduk = $filename;
        } 
        $produk->save();

        return response()->json(['message'=>'Product Added Successfuly'], 200);
    }

    public function show($id)
    {
        $produk = Produk::find($id);
        if($produk)
        {
            return response()->json(['produks' => $produk], 200);  
        }
        else
        {
            return response()->json(['message' => 'No Product Found'], 404);
        }
    }

   public function update(Request $request, $id)
    {
        $request->validate([
            'namaproduk'=>'required|max:255',
            'hargaproduk'=>'required|integer',
            'desk'=>'required|max:255',
            'fotoproduk'=>'required|image|mimes:png,jpg,jpeg|max:2040',
        ]);

        $produk = Produk::find($id);
        if($produk)
        {
            $produk->namaproduk = $request->namaproduk;
            $produk->hargaproduk = $request->hargaproduk;
            $produk->desk = $request->desk;
            if($request->hasfile('fotoproduk'))
        {
            $destination = 'upload/produks/'.$produk->fotoproduk=$request->fotoproduk;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('fotoproduk');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('upload/produks/', $filename);
            $produk->fotoproduk=$request->fotoproduk = $filename;
        } 
            $produk->update();
    
            return response()->json(['message'=>'Product Updated Successfuly'], 200);    
        }
        else{
            return response()->json(['message'=>'No Product Found'], 404);
        }
        
        }

    public function destroy(Produk $produk, $id)
    {
        $produk = Produk::find($id);
        if($produk)
        {
            $produk->delete();
            return response()->json(['message' => 'Product deleted successfuly'], 200); 
        }
        else{
            return response()->json(['message' => 'No Product Found'], 404); 
        }
    }
}
