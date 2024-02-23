@include('user.layout.index');

<div class="w-full max-w-2xl p-5 pb-10 mx-auto mb-10 mt-5">
    <form action="/toAlbum/{{$foto->fotoId}}" method="POST">
        @csrf
        @method('put')
        <h1 class="text-4xl font-semibold mb-5 border-b-4 border-gray-500 w-max">Add To Album</h1>
        <div class="mb-6">
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900">Choose Your Album</label>
            <select name="albumId" id="albumId">
                @foreach ($album as $item)
                    <option value="{{$item->albumId}}">{{$item->namaAlbum ?? 'Tidak Ada Album'}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit"
            class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
    </form>
</div>
