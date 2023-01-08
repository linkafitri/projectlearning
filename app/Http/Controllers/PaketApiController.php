<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PaketApiController extends Controller
{
    public function index()
    {
        $paket = Paket::all();
        return response()->json(['pakets' => $paket], 200);
    }

    public function store(Request $request) 
    {
        $request->validate([
            'namapaket'=>'required|max:255',
            'deskripsi'=>'required|max:255',
            'hargapaket'=>'required|integer',
            'foto'=>'required|image|mimes:png,jpg,jpeg|max:2040',
        ]);

        $paket = new Paket;
        $paket->namapaket = $request->namapaket;
        $paket->deskripsi = $request->deskripsi;
        $paket->hargapaket = $request->hargapaket;
        if($request->hasfile('foto'))
        {
            $file = $request->file('foto');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('upload/pakets/', $filename);
            $paket->foto=$request->foto = $filename;
        } 
        $paket->save();

        return response()->json(['message'=>'Pakage Added Successfuly'], 200);
    }

    public function show($id)
    {
        $paket = Paket::find($id);
        if($paket)
        {
            return response()->json(['pakets' => $paket], 200);  
        }
        else
        {
            return response()->json(['message' => 'No Pakage Found'], 404);
        }
    }

    public function update(Request $request, $id) 
    {
        $request->validate([
            'namapaket'=>'required|max:255',
            'deskripsi'=>'required|max:255',
            'hargapaket'=>'required|integer',
            'foto'=>'required|image|mimes:png,jpg,jpeg|max:2040',
        ]);

        $paket = Paket::find($id);
        if($paket)
        {
        $paket->namapaket=$request->namapaket;
        $paket->deskripsi=$request->deskripsi;
        $paket->hargapaket=$request->hargapaket;
        if($request->hasfile('foto'))
        {
            $destination = 'upload/pakets/'.$paket->foto=$request->foto;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('foto');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('upload/pakets/', $filename);
            $paket->foto=$request->foto = $filename;
        }
        $paket->update();

        return response()->json(['message'=>'Pakage Updated Successfuly'], 200);
        }
        else{
            return response()->json(['message'=>'No Pakage Found'], 404);
        }
    
    }

    public function destroy(Paket $paket, $id)
    {
        $paket = Paket::find($id);
        if($paket)
        {
            $paket->delete();
            return response()->json(['message' => 'Pakage deleted successfuly'], 200); 
        }
        else{
            return response()->json(['message' => 'No Pakage Found'], 404); 
        }
    }
}
