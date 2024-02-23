<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Foto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FotoController extends Controller
{
    public function index()
    {
        $user = User::where('userId', auth()->user())->first();
        $fotos = Foto::latest('tanggalDiunggah')->get();
        return view('foto.index', compact('user', 'fotos'));
    }



    public function create()
    {
        return view('foto.create');
    }

    public function store(Request $request)
    {
        $file = $request->file('lokasiFile');
        if ($file) {
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'img';
            $file->move($path, $filename);
        }

        Foto::create([
            'userId' =>  auth()->user()->userId,
            'judulFoto' => $request->judulFoto,
            'deskripsi' => $request->deskripsi,
            'lokasiFile' => $filename
        ]);

        return redirect('/');
    }

    public function show(string $fotoId){
        $foto = Foto::find($fotoId);
        return view('foto.detail', compact('foto'));
    }

    public function edit(string $fotoId){
        $foto = Foto::where('fotoId', $fotoId)->first();
        $album = Album::all();
        return view( 'foto.toAlbum',compact('foto', 'album') );
    }

    public function update(Request $request, string $id){
        Foto::where( 'fotoId',$id )->update([
            'albumId' => request('albumId')
        ]);

        return redirect('/album');
    }

    public function destroy(string $fotoId)
    {
        Foto::destroy($fotoId);
        return redirect('/');
    }
}
