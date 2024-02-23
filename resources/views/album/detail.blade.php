@include('user.layout.index')
<div class="p-4 sm:ml-64">
    @foreach ($album->foto as $item)
        <div class="flex justify-center">
            <div class="grid grid-cols-1 gap-4 mb-4">
                <div class="max-w-sm bg-white rounded-lg shadow mt-[50px]">
                    <div>
                        <h5 class="text-2xl font-semibold mb-5 inline">{{ $item->user->username }}</h5>
                        <img class="rounded-lg max-h-96 w-72" src="{{ asset('img/' . $item->lokasiFile) }}"
                            alt="" />
                    </div>
                    <div class="p-5">
                        <h5 class="mb-2 text-l font-semibold tracking-tight text-gray-900 dark:text-white inline-block">
                            {{ $item->user->username }}
                        </h5>
                        <span class="inline-block mx-1 text-sm">
                            {{ $item->deskripsi }}
                        </span>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            {{ \Carbon\Carbon::parse($item->tanggalDiunggah)->format('d F Y') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


</div>
