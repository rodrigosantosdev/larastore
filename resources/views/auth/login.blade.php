@extends('layouts.app')

@section('content')
    <form method="POST" action=""
        class="flex flex-col items-center justify-center border w-2/4 md:w-2/6 p-8 mt-40 mx-auto">
        @csrf

        <h2 class="text-zinc-800 mb-10 text-xl">LaraStore</h2>

        <div class="flex flex-col gap-4 w-full">
            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="email" class="w-full">

            <label for="password">Password</label>
            <input type="password" name="password" placeholder="password">


            <a href="/forgot-password" class="text-sky-500 text-right">Esqueceu sua senha? </a>

            <button class="bg-sky-500 text-white py-2 px-4">Logar</button>

            <span>
                Ainda não tem conta?
                <a href="/register" class="text-center text-sky-500 font-medium">Fazer Cadastro</a>
            </span>
        </div>

    </form>
@endsection
