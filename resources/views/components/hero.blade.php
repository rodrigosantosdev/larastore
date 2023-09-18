<section>
    <span>Aqui você encontra o que tanto procura!</span>
    <h2>O que você está procurando ?</h2>

    <form>
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

        <button>Procurar</button>
    </form>
</section>
