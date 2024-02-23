@include('user.layout.index')
<div class="container w-50">
    <form action="/{{ $album->albumId }}/editAlbum" method="post">
        @csrf
        @method('put')
        <div class="border border-secondary m-3">
            <h1 class="text-center"><b>FORM EDIT</b></h1>
            <div class="m-3">
                <div class="mt-3">
                    <input type="hidden" name="userId" id="userId" value="{{ Auth::User()->userId }}">
                    <label class="form-label">Nama Album</label>
                    <input class="form-control" type="text" name="namaAlbum" id="namaAlbum"
                        value="{{ old('namaAlbum') ?? $album->namaAlbum }}">
                </div>
                <div class="mt-3">
                    <label class="form-label">Deskripsi</label>
                    <input class="form-control" type="text" name="deskripsi" id="deskripsi"
                        value="{{ old('deskripsi') ?? $album->deskripsi }}">
                </div>
                <div class="mt-3">
                    <a href="/album" class="btn btn-outline-secondary rounded-4">Back</a>
                    <button class="btn btn-outline-success rounded-4">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>
