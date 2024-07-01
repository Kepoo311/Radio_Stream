@push('title','Radio List')

<div class="min-h-screen">
    <div class="m-3 flex flex-col">
        <h1 class="text-2xl text-black mb-8">Pilih saluran radio mu :</h1>

        <section class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-5">
            @forelse ($station as $item)
            <a href="/radio/stream/{{$item->stationuuid}}" class="text-card-foreground p-4 rounded-lg shadow-md w-48 sm:w-64 mb-5 hover:bg-gray-100 duration-500">
                <div class="bg-zinc-200 rounded-lg overflow-hidden">
                  <img src="{{$item->favicon}}" alt="{{$item->name}}" class="w-full h-52 sm:h-48 object-cover" />
                </div>
                <div class="mt-4">
                  <h2 class="text-lg text-black font-semibold">{{$item->name}}</h2>
                  <p class="text-muted-foreground">{{$item->state}}</p>
                </div>
            </a>
            @empty
                <h1>empty</h1>
            @endforelse
        </section>
    </div>

    <div class="mx-5">
    {{$station->links()}}
    </div>
</div>
