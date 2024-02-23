@include('user.layout.index')
<div class="p-4 sm:ml-64">
    <div class="grid grid-cols-3 gap-4 mb-4">
        <a href="/newAlbum">
            <div
                class="flex items-center justify-center h-52 rounded bg-gray-50 dark:bg-gray-800 border-2 border-dashed mt-14 max-w-full">
                <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 1v16M1 9h16" />
                    </svg>
                </p>
            </div>
        </a>
        @foreach ($album as $item)
            <div class="items-center flex flex-col h-52 rounded bg-gray-50 dark:bg-gray-800 border-2 mt-14 hover:cursor-pointer">
                <a href="/detailAlbum/{{$item->albumId}}">
                    <h1 class="text-5xl font-semibold text-gray-400 dark:text-gray-500 mt-16">
                        {{ $item->namaAlbum }}
                    </h1>
                    <h3 class="text-2xl text-gray-400 dark:text-gray-500 font-semibold">{{ $item->deskripsi }}</h3>
                </a>

            </div>
        @endforeach
    </div>
</div>
