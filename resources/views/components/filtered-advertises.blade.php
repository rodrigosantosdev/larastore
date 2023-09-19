<div>
    <div class="my-4 text-2xl font-bold">Categorias:</div>
    <div class="flex justify-between my-10">
        <button class="text-purple-900 py-3 px-8 rounded text-xl border">
            Item 1
        </button>
        <button class="text-purple-900 py-3 px-8 rounded text-xl border">
            Item 2
        </button>
        <button class="text-purple-900 py-3 px-8 rounded text-xl border">
            Item 3
        </button>
        <button class="text-purple-900 py-3 px-8 rounded text-xl border">
            Eletronicos
        </button>
        <button class="text-purple-900 py-3 px-8 rounded text-xl border">
            Roupas
        </button>
        <button class="text-purple-900 py-3 px-8 rounded text-xl border">
            Sapatos
        </button>
    </div>

    <section class="grid grid-cols-4 gap-8">
        @foreach ($advertisesList as $ad)
            <x-simple-advertise href={{ $ad['href'] }} bgImage={{ $ad['image'] }} nameProduct={{ $ad['title'] }}
                description={{ $ad['description'] }} price={{ $ad['price'] }} />
        @endforeach
    </section>
</div>
