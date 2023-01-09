<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PaketController extends Controller
{

    // crud web paket
     public function PaketView() {
        $Data['allDataPaket']=Paket::all();
        return view('backend.paket.view_paket', $Data);
    }

    public function PaketAdd() {
        return view('backend.paket.add_paket');
    }

    public function PaketStore(Request $request){
        
        $request->validate([
            'namapaket'=>'required|max:255',
            'deskripsi'=>'required|max:255',
            'hargapaket'=>'required|integer',
            'foto'=>'required|image|mimes:png,jpg,jpeg|max:2040',
        ]);

        $data=new Paket();
        $data->namapaket=$request->namapaket;
        $data->deskripsi=$request->deskripsi;
        $data->hargapaket=$request->hargapaket;
        if($request->hasfile('foto'))
        {
            $file = $request->file('foto');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('upload/pakets/', $filename);
            $data->foto=$request->foto = $filename;
        } 
        // $data->foto=$request->foto;
        $data->save();

        return redirect()->route('paket.view')->with('info','Tambah Paket berhasil');
    }

    public function PaketEdit($id){
    
        $editData= Paket::find($id);
        return view('backend.paket.edit_paket', compact('editData'));
    }

    public function PaketUpdate(Request $request, $id){
        

       $request->validate([
            'namapaket'=>'required|max:255',
            'deskripsi'=>'required|max:255',
            'hargapaket'=>'required|integer',
            'foto'=>'required|image|mimes:png,jpg,jpeg|max:2040',
        ]);

        $data=Paket::find($id);
        $data->namapaket=$request->namapaket;
        $data->deskripsi=$request->deskripsi;
        $data->hargapaket=$request->hargapaket;
        if($request->hasfile('foto'))
        {
            $destination = 'upload/pakets/'.$data->foto=$request->foto;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('foto');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('upload/pakets/', $filename);
            $data->foto=$request->foto = $filename;
        }
        // $data->foto=$request->foto;
        
        $data->save();

        return redirect()->route('paket.view')->with('info','Update Paket berhasil');
    }

    public function PaketDelete($id){
        //dd('berhasil masuk controller user edit');
        $deleteData= Paket::find($id);
        $deleteData->delete();

        return redirect()->route('paket.view')->with('info','Delete Paket berhasil');

    }
}
