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
    <section class="grid">
        @foreach($advertisesList as $ad)
            <x-simple-advertise
                    bgImage="{{ $ad['image'] }}"
                    title="{{ $ad['title'] }}"
                    price="{{ $ad['price'] }}"
                    href="{{ $ad['href'] }}"
            />
        @endforeach
    </section>
</div>
