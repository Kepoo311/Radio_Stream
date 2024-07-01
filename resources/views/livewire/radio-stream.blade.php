@push('title', '📻📻📻')

<div class="min-h-screen w-full flex justify-center">
    <div class="bg-gray-200 w-[65rem] mt-5 grid grid-cols-1 md:grid-cols-3 h-fit">
        <div class="md:col-span-2">
            <div class="flex bg-muted p-4 rounded-lg w-full">
                <video id="my-video" class="video-js rounded-xl" controls preload="auto" width="260" height="260"
                    poster="{{ $station[0]['favicon'] }}" data-setup="{}">
                    <source src="{{ $station[0]['url'] }}" type="application/x-mpegURL">
                </video>
                <div class="mx-2">
                    <h2 class="text-3xl text-black font-bold text-foreground">{{ $station[0]['name'] }}</h2>
                    <p class="text-gray-600 text-lg">{{ $station[0]['state'] }}</p>
                </div>
            </div>
            <p class="text-gray-800 m-3">{{$desc}} (Generated by Groq ai)</p>
        </div>
        <div>
            <p class="p-2 text-xl text-black">Rekomendasi :</p>

            @forelse ($radio as $item)
            <a href="/radio/stream/{{$item->stationuuid}}" class="flex items-center bg-muted p-4 rounded-lg w-80">
              <img src="{{$item->favicon}}" alt="landscape illustration" class="w-16 h-16 rounded-lg mr-4" />
              <div>
                <h2 class="text-md font-bold text-foreground">{{$item->name}}</h2>
                <p class="text-muted-foreground">{{$item->state}}</p>
              </div>
            </a>
            @empty
                <p>empty</p>
            @endforelse
        </div>
    </div>


    <script></script>
</div>
