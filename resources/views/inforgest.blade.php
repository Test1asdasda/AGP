<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <title>Laravel</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="shortcut icon" href="{{ asset('../img/apple-touch-icon.png') }}" type="image/x-icon">

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body  class="font-sans antialiased dark:bg-cyan-200  dark:text-white/50 hero-pattern ">

    <div class="min-h-screen bg-[#DFD0B8] ">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                <section>
                <h1 class="text-black text-center m-10 font-bold font-bg">Guias de estudo</h1>
                    <div class="w-[100%] h-[350px] bg-[#153448] flex flex-row">
                        <div class=" sm:m-20 m-10">
                         <h1 class="text-white sm:text-[20px]  text-[15px] leading-relaxed">Carissímo estudante, saudações 👋, aqui teras a possibilidade de baixar e ler guias de estudo !</h1>
                         <button class="box-shadow: rgba(0, 0, 0, 0.3)  0px 19px 38px,
                       rgba(0, 0, 0, 0.22) 0px 15px 12px; border bg-[#DFD0B8] w-[100px] rounded-lg text-black mt-20">Comece</button>
                        </div>
                         <div class=" w-[600px]">
                              <img width="400" src="{{ asset('../img/learning.png') }}" alt="">
                        </div>

                    </div>
                    <div class="w-full sm:h-[700px] h-[1700px] xl:grid xl:grid-cols-4 flex flex-col justify-center items-center ">
                        <div class="w-[200px] h-[270px] bg-[#ffffff] m-10 border rounded-lg">
                            <h1 class="p-2 text-white bg-emerald-600 font-bg rounded-sm">Guia Grátis</h1>
                            <h1 class="p-2 text-black">Aprenda HTML</h1>
                            <div class="flex justify-center items-center">
                                 <img class="" src="https://cdn-icons-png.flaticon.com/128/1051/1051277.png" alt="">
                            </div>
                            <div class="flex flex-row items-center p-2 gap-2 justify-between">
                                <img width="30" src="https://cdn-icons-png.flaticon.com/128/14359/14359377.png" alt="">
                                <h1 class="text-black">Básico</h1>
                                <p class="text-black">16H</p>
                            </div>
                        </div>
                        <div class="w-[200px] h-[270px] bg-[#ffffff] m-10 border rounded-xl">
                            <h1 class="p-2 text-white bg-emerald-600 font-bg rounded-sm">Guia Grátis</h1>
                            <h1 class="p-2 text-black">Aprenda CSS</h1>
                            <div class="flex justify-center items-center">
                                 <img class="" src="https://cdn-icons-png.flaticon.com/128/732/732190.png" alt="">
                            </div>
                            <div class="flex flex-row items-center p-2 gap-2 justify-between">
                                <img width="30" src="https://cdn-icons-png.flaticon.com/128/14359/14359377.png" alt="">
                                <h1 class="text-black">Básico</h1>
                                <p class="text-black">16H</p>
                            </div>
                        </div>
                        <div class="w-[200px] h-[270px] bg-[#ffffff] m-10 border rounded-xl">
                            <h1 class="p-2 text-white bg-emerald-600 font-bg rounded-sm">Guia Grátis</h1>
                            <h1 class="p-2 text-black">Aprenda JS</h1>
                            <div class="flex justify-center items-center">
                                 <img class="" src="https://cdn-icons-png.flaticon.com/128/5968/5968292.png" alt="">
                            </div>
                            <div class="flex flex-row items-center p-2 gap-2 justify-between">
                                <img width="30" src="https://cdn-icons-png.flaticon.com/128/14359/14359377.png" alt="">
                                <h1 class="text-black">Básico</h1>
                                <p class="text-black">16H</p>
                            </div>
                        </div>
                        <div class="w-[200px] h-[270px] bg-[#ffffff] m-10 border rounded-xl">
                            <h1 class="p-2 text-white bg-emerald-600 font-bg rounded-sm">Guia Grátis</h1>
                            <h1 class="p-2 text-black">Aprenda Java</h1>
                            <div class="flex justify-center items-center">
                                 <img class="" src="https://cdn-icons-png.flaticon.com/128/5968/5968282.png" alt="">
                            </div>
                            <div class="flex flex-row items-center p-2 gap-2 justify-between">
                                <img width="30" src="https://cdn-icons-png.flaticon.com/128/14359/14359377.png" alt="">
                                <h1 class="text-black">Básico</h1>
                                <p class="text-black">16H</p>
                            </div>
                        </div>
                        <div class="w-[200px] h-[270px] bg-[#ffffff] m-10 border rounded-xl">
                            <h1 class="p-2 text-white bg-emerald-600 font-bg rounded-sm">Guia Grátis</h1>
                            <h1 class="p-2 text-black">Aprenda Excel</h1>
                            <div class="flex justify-center items-center">
                                 <img class="" src="https://cdn-icons-png.flaticon.com/128/732/732220.png" alt="">
                            </div>
                            <div class="flex flex-row items-center p-2 gap-2 justify-between">
                                <img width="30" src="https://cdn-icons-png.flaticon.com/128/14359/14359377.png" alt="">
                                <h1 class="text-black">Básico</h1>
                                <p class="text-black">16H</p>
                            </div>
                        </div>

                    </div>
                </section>
            </main>
        </div>
    </body>
</html>
