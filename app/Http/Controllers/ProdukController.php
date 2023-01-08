<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
// use Iluminate\Support\Facades\File;

class ProdukController extends Controller
{
    
    // crud web produk

    public function ProdukView() {
        $Data['allDataProduk']=Produk::all();
        return view('backend.produk.view_produk', $Data);


    }

    public function ProdukAdd() {
        return view('backend.produk.add_produk');
    }

    public function ProdukStore(Request $request){
        
        $request->validate([
            'namaproduk'=>'required|max:255',
            'hargaproduk'=>'required|integer',
            'desk'=>'required|max:255',
            'fotoproduk'=>'required|image|mimes:png,jpg,jpeg|max:2040',
        ]);

        $data=new Produk();
        $data->namaproduk=$request->namaproduk;
        $data->hargaproduk=$request->hargaproduk;
        $data->desk=$request->desk;
        if($request->hasfile('fotoproduk'))
        {
            $file = $request->file('fotoproduk');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('upload/produks/', $filename);
            $data->fotoproduk=$request->fotoproduk = $filename;
        } 
        // $data->fotoproduk=$request->fotoproduk;
        $data->save();

        return redirect()->route('produk.view')->with('info','Tambah Produk berhasil');
    }

    public function ProdukEdit($id){
    
        $editData= Produk::find($id);
        return view('backend.produk.edit_produk', compact('editData'));
    }

    public function ProdukUpdate(Request $request, $id){
        
        $request->validate([
            'namaproduk'=>'required|max:255',
            'hargaproduk'=>'required|integer',
            'desk'=>'required|max:255',
            'fotoproduk'=>'required|image|mimes:png,jpg,jpeg|max:2040',
        ]);

        $data=Produk::find($id);
        $data->namaproduk=$request->namaproduk;
        $data->hargaproduk=$request->hargaproduk;
        $data->desk=$request->desk;
        if($request->hasfile('fotoproduk'))
        {
            $destination = 'upload/produks/'.$data->fotoproduk=$request->fotoproduk;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('fotoproduk');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('upload/produks/', $filename);
            $data->fotoproduk=$request->fotoproduk = $filename;
        } 
        // $data->fotoproduk=$request->fotoproduk;
        
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
