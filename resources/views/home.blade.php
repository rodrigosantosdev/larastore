<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaraStore</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <x-header />

    <main class="container mx-auto">
        <x-hero />
        <x-filtered-advertises />

        <section class="grid grid-cols-4 gap-8">
            <x-simple-advertise />
            <x-simple-advertise />
            <x-simple-advertise />
            <x-simple-advertise />
            <x-simple-advertise />
        </section>
    </main>

    <x-footer />

</body>

</html>
