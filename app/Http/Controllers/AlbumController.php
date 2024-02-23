<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Foto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlbumController extends Controller
{
    public function index()
    {
        $title = 'Album';
        $album = Album::where ('userId', auth( )->id())->get();
        return view('album.index', compact('title', 'album'));
    }

    public function create()
    {
        return view('album.create');
    }

    public function store(Request $request)
    {
        $album = Album::create([
            'userId' => $request->input('userId'),
            'namaAlbum' => $request->input('namaAlbum'),
            'deskripsi' => $request->input('deskripsi')
        ]);
        return redirect('/album');
    }

    public function show(string $albumId)
    {
        $album = Album::with(['user', 'foto'])->find($albumId);
        $foto = Foto::with('user')->get();
        return view('album.detail', compact('album', 'foto'));
    }

    public function edit(string $albumId)
    {
        $album = Album::where('albumId', $albumId)->first();
        return view('album.edit', compact('album'));
    }

    public function update(string $albumId)
    {
        Album::where('albumId', $albumId)->update([
            'namaAlbum' => request('namaAlbum'),
            'deskripsi' => request('deskripsi')
        ]);

        return redirect('/album');
    }

    public function destroy(string $albumId)
    {
        Album::destroy($albumId);
        return redirect('/album');
    }
}
