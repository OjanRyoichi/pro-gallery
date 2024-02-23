@include('user.layout.index')
<div class="p-4 sm:ml-64">
    <div class="flex justify-center">
        <div class="grid grid-cols-1 gap-4 mb-4">
            <div class="max-w-sm bg-white rounded-lg shadow mt-[50px]">
                <div>
                    <h5 class="text-2xl font-semibold mb-5 inline">{{ $foto->user->username }}</h5>
                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                        class="float-end text-black bg-grey-200 hover:bg-gray-100 focus:outline-none focus:ring-2 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-grey-600 dark:hover:bg-grey-700 dark:focus:ring-grey-800"
                        type="button"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="M12 6h0m0 6h0m0 6h0" />
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdown"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="/toAlbum/{{ $foto->fotoId }}"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tambahkan
                                    ke Album</a>
                            </li>
                        </ul>
                    </div>

                    <img class="rounded-lg " src="{{ asset('img/' . $foto->lokasiFile) }}" alt="" />
                </div>

                <div class="p-5">
                    <h5 class="mb-2 text-l font-semibold tracking-tight text-gray-900 dark:text-white inline-block">
                        {{ $foto->user->username }}
                    </h5>
                    <span class="inline-block mx-1 text-sm">
                        {{ $foto->deskripsi }}
                    </span>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        {{ \Carbon\Carbon::parse($foto->tanggalDiunggah)->format('d F Y') }}
                    </p>
                    <p class="mb-3 font-normal">
                    <form action="/{{ $foto->fotoId }}/deleteFoto" method="post">
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

</div>
