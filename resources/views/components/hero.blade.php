<section class="my-10">
    <h1 class="text-5xl text-center">Aqui você encontra o que tanto procura!</h1>
    <h2 class="text-2xl text-center my-4">O que você está procurando ?</h2>

    <form class="flex justify-center gap-10 my-8 w-full">
        <label for="search"></label>
        <input type="text" name="search" placeholder="Estou procurando por..">

        <select>
            <option selected hidden disabled value="">Categoria</option>
            @foreach ($categories as $category)
                <option value="{{ $category['value'] }}">{{ $category['name'] }}</option>
            @endforeach
        </select>
        <select>
            <option selected hidden disabled value="">Estado</option>
            @foreach ($states as $state)
                <option value="{{ $state['value'] }}">{{ $state['name'] }}</option>
            @endforeach
        </select>

        <button class="bg-purple-500 text-white py-2 px-8">Procurar</button>
    </form>
</section>
