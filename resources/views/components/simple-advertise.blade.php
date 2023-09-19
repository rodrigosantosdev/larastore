<a href="{{ $href }}" class="bg-gray-100 p-4">
    <img src="{{ $bgImage }}" alt="" class="w-full bg-cover h-[320px]">
    <h1 class="text-2xl text-purple-800 mt-4">{{ $nameProduct }}</h1>
    <p class="py-4">{{ $description }}</p>
    <div class="flex justify-between items-center">
        <span>Valor R$ {{ $price }}</span>
        <button type="button" class="bg-purple-500 text-white p-2">Add Cart</button>
    </div>
</a>
