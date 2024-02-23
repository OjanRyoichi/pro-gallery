@include('user.layout.index');

<div class="p-4 sm:ml-64">
    @if (isset($fotos) && count($fotos) > 0)
        @foreach ($fotos as $item)
            <div class="flex justify-center">
                <div class="grid grid-cols-1 gap-4 mb-4">
                    <div class="max-w-sm bg-white rounded-lg shadow mt-[50px]">
                        <a href="/detailFoto/{{$item->fotoId}}" class="block hover:scale-105 ease-in-out duration-300 hover:cursor-pointer">
                            <h5 class="text-2xl font-semibold mb-5 inline">{{ $item->user->username }}</h5>
                            <img class="rounded-lg " src="{{ asset('img/' . $item->lokasiFile) }}" alt="" />
                        </a>

                        <div class="p-5">
                            <h5
                                class="mb-2 text-l font-semibold tracking-tight text-gray-900 dark:text-white inline-block">
                                {{ $item->user->username }}
                            </h5>
                            <span class="inline-block mx-1 text-sm">
                                {{ $item->deskripsi }}
                            </span>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                {{ \Carbon\Carbon::parse($item->tanggalDiunggah)->format('d F Y') }}
                            </p>
                            <p class="mb-3 font-normal">
                            <form action="/{{ $item->fotoId }}/deleteFoto" method="post">
                                @csrf
                                @method('delete')
                                <button>
                                    <svg class="w-6 h-6 text-red-700 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                    </svg>
                                </button>
                            </form>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="flex items-center p-4 mb-4 mt-6 text-sm text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300 dark:border-yellow-800"
            role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">Tidak Ada Foto yang Tersedia.</span>
            </div>
        </div>
    @endif

</div>

<div data-dial-init class="fixed end-8 bottom-10 group">
    <a href="/newFoto" data-dial-toggle="speed-dial-menu-default" aria-controls="speed-dial-menu-default"
        aria-expanded="false"
        class="flex items-center justify-center text-white bg-blue-700 rounded-full w-14 h-14 hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800">
        <svg class="w-5 h-5 transition-transform" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 18 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 1v16M1 9h16" />
        </svg>
    </a>
</div>
