<li class="flex items-start space-x-4 py-6">
    <img
        class="h-40 w-40 flex-none rounded-md object-cover object-center"
        src="{{ $image }}"
        alt="IMAGEM DO {{ $name }}"
    >
    <div class="flex-auto space-y-1">
        <h3 class="text-xl font-bold text-white">{{ $name }}</h3>
        <p class="text-slate-400">Details</p>
        @foreach($features as $feature)
            <p class="font-semibold text-amber-200">{{ $feature }}</p>
        @endforeach
    </div>
    <div class="flex flex-col">
        <p class="flex-none text-xl font-medium text-secondary-300"> @money($price) </p>
        <p class="text-white">x {{$quantity}}</p>
    </div>
</li>
