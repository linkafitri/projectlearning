<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::paginate(10);
        return response()->json([
            'data' => $produks
        ]);
    }

    public function store(Request $request)

    {  
        $produk = Produk::create([
            'namaproduk' => $request->namaproduk,
            'hargaproduk' => $request->hargaproduk,
            'desk'=> $request->desk,
            'fotoproduk' => $request->fotoproduk
        ]);
        return response()->json([
            'data' => $produk
        ]);
    }

    public function show(Produk $produk)
    {
        return response()->json([
            'data' => $produk
        ]);
    }

   public function update(Request $request, Produk $produk)
    {
        $produk->namaproduk = $request->namaproduk;
        $produk->hargaproduk = $request->hargaproduk;
        $produk->desk = $request->desk;
        $produk->fotoproduk = $request->fotoproduk;
        $produk->save();

        return response()->json([
            'data' => $produk
        ]);
    
    }


    public function destroy(Produk $produk)
    {
        $produk->delete();
        return response()->json([
            'message' => 'Produk deleted'
        ], 204);
    }
    

    // crud web paket

    public function ProdukView() {
        $Data['allDataProduk']=Produk::all();
        return view('backend.produk.view_produk', $Data);


    }

    public function ProdukAdd() {
        return view('backend.produk.add_produk');
    }

    public function ProdukStore(Request $request){
        
        // $validateData=$request->validate([
        //     'email' =>'required|unique:users',
        //     'textNama' =>'required'
        // ]);
        //dd($request);
        $data=new Produk();
        $data->namaproduk=$request->namaproduk;
        $data->hargaproduk=$request->hargaproduk;
        $data->desk=$request->desk;
        $data->fotoproduk=$request->fotoproduk;
        $data->save();

        return redirect()->route('produk.view')->with('info','Tambah Produk berhasil');
    }

    public function ProdukEdit($id){
    
        $editData= Produk::find($id);
        return view('backend.produk.edit_produk', compact('editData'));
    }

    public function ProdukUpdate(Request $request, $id){
        
        // $validateData=$request->validate([
        //     'email' =>'required|unique:users',
        //     'textNama' =>'required'
        // ]);
        //dd($request);
        $data=Produk::find($id);
        $data->namaproduk=$request->namaproduk;
        $data->hargaproduk=$request->hargaproduk;
        $data->desk=$request->desk;
        $data->fotoproduk=$request->fotoproduk;
        // if($request->password!=""){
        //     $data->password=bcrypt($request->password);
        // }
        
        $data->save();

        return redirect()->route('produk.view')->with('info','Update Produk berhasil');
    }

    public function ProdukDelete($id){
        //dd('berhasil masuk controller user edit');
        $deleteData= Produk::find($id);
        $deleteData->delete();

        return redirect()->route('produk.view')->with('info','Delete Produk berhasil');

    }
}
