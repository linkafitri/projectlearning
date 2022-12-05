<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function PaketView() {
        $Data['allDataPaket']=Paket::all();
        return view('backend.paket.view_paket', $Data);


    }

    public function PaketAdd() {
        return view('backend.paket.add_paket');
    }

    public function PaketStore(Request $request) {
       
        $data=new Paket();
        $data->namapaket=$request->namapaket;
        $data->deskripsi=$request->deskripsi;
        $data->hargapaket=$request->hargapaket;
        $data->foto=$request->foto;
        $data->save();

        return redirect()->route('paket.view')->with('info','Tambah Paket Berhasil');

    }

    public function PaketEdit($id){
    
        $editData= Paket::find($id);
        return view('backend.paket.edit_paket', compact('editData'));
    }

    public function PaketUpdate(Request $request, $id) {
       
        $data=Paket::find($id);
        $data->namapaket=$request->namapaket;
        $data->deskripsi=$request->deskripsi;
        $data->hargapaket=$request->hargapaket;
        $data->foto=$request->foto;
        
        $data->save();

        return redirect()->route('paket.view')->with('info','Update Paket Berhasil');

    }

    public function PaketDelete($id){
        
        $deleteData= Paket::find($id);
        $deleteData->delete();

        return redirect()->route('paket.view')->with('info','Delete Paket Berhasil');

    }
}
