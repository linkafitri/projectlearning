<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index()
    {
        $pakets = Paket::paginate(10);
        return response()->json([
            'data' => $pakets
        ]);
    }

    public function store(Request $request) {
       
        $paket = Paket::create([
                    'namapaket' => $request->namapaket,
                    'deskripsi' => $request->deskripsi,
                    'hargapaket' => $request->hargapaket,
                    'foto' => $request->foto
                ]);
                return response()->json([
                    'data' => $paket
                ]);
    }

    public function show(Paket $paket)
    {
        return response()->json([
            'data' => $paket
        ]);
    }

    public function update(Request $request, Paket $paket) {
       
        $paket->namapaket=$request->namapaket;
        $paket->deskripsi=$request->deskripsi;
        $paket->hargapaket=$request->hargapaket;
        $paket->foto=$request->foto;
        $paket->save();

        return response()->json([
            'data' => $paket
        ]);
    }

    public function destroy(Paket $paket)
    {
        $paket->delete();
        return response()->json([
            'message' => 'Paket deleted'
        ], 204);
    }


    // crud web paket

     public function PaketView() {
        $Data['allDataPaket']=Paket::all();
        return view('backend.paket.view_paket', $Data);
    }

    public function PaketAdd() {
        return view('backend.paket.add_paket');
    }

    public function PaketStore(Request $request){
        
        // $validateData=$request->validate([
        //     'email' =>'required|unique:users',
        //     'textNama' =>'required'
        // ]);
        //dd($request);
        $data=new Paket();
        $data->namapaket=$request->namapaket;
        $data->deskripsi=$request->deskripsi;
        $data->hargapaket=$request->hargapaket;
        $data->foto=$request->foto;
        $data->save();

        return redirect()->route('paket.view')->with('info','Tambah Paket berhasil');
    }

    public function PaketEdit($id){
    
        $editData= Paket::find($id);
        return view('backend.paket.edit_paket', compact('editData'));
    }

    public function PaketUpdate(Request $request, $id){
        
        // $validateData=$request->validate([
        //     'email' =>'required|unique:users',
        //     'textNama' =>'required'
        // ]);
        //dd($request);
        $data=Paket::find($id);
        $data->namapaket=$request->namapaket;
        $data->deskripsi=$request->deskripsi;
        $data->hargapaket=$request->hargapaket;
        $data->foto=$request->foto;
        // if($request->password!=""){
        //     $data->password=bcrypt($request->password);
        // }
        
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
