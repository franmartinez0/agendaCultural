<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kubik - Tailwind Template</title>
    <link rel="stylesheet" href="assets/css/tailwind.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"
        integrity="sha512-7x3zila4t2qNycrtZ31HO0NnJr8kg2VI67YLoRSyi9hGhRN66FHYWr7Axa9Y1J9tGYHVBPqIjSE1ogHrJTz51g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white">

    <!-- home section -->
    <section class="py-8 md:py-16">

        <div class="container max-w-screen-xl mx-auto px-4">

            <nav class="flex-wrap lg:flex items-center justify-between mb-20 lg:mb-40" x-data="{ navbarOpen: false }">
                <div class="flex items-center justify-between mb-10 lg:mb-0">
                    <img src="{{ asset('storage/logo.png') }}" alt="Logo" style="width: 100px; height: auto;">

                    <button
                        class="flex items-center justify-center border border-green-500 w-10 h-10 text-green-500 rounded-md outline-none lg:hidden ml-auto"
                        @click="navbarOpen = !navbarOpen">
                        <i data-feather="menu"></i>
                    </button>
                </div>



                <ul class="hidden lg:block lg:flex flex-col lg:flex-row lg:items-center lg:space-x-20"
                    :class="{ 'hidden': !navbarOpen, 'flex': navbarOpen }">
                    <li
                        class="font-medium text-green-500 text-lg hover:text-green-300 transition ease-in-out duration-300 mb-5 lg:mb-0">
                        <a href="{{ url('/dashboard') }}">Agenda</a>
                    </li>

                    <li
                        class="font-medium text-green-500 text-lg hover:text-green-300 transition ease-in-out duration-300 mb-5 lg:mb-0">
                        <a href="#">Explora</a>
                    </li>

                    <li
                        class="font-medium text-green-500 text-lg hover:text-green-300 transition ease-in-out duration-300 mb-5 lg:mb-0">
                        <a href="#">Experiencias</a>
                    </li>
                    @if (Route::has('login'))
                        @auth
                            <li
                                class="px-8 py-3 font-medium text-green-500 text-lg text-center border-2 border-green-500 rounded-md hover:bg-green-500 hover:text-white transition ease-linear duration-300">
                                <a href="{{ url('/dashboard') }}">Dashboard</a>
                            </li>
                        @else
                            <li
                                class="px-8 py-3 font-medium text-green-500 text-lg text-center border-2 border-green-500 rounded-md hover:bg-green-500 hover:text-white transition ease-linear duration-300">
                                <a href="{{ route('login') }}">login</a>
                            </li>
                            @if (Route::has('register'))
                                <li
                                    class="px-8 py-3 font-medium text-green-500 text-lg text-center border-2 border-green-500 rounded-md hover:bg-green-500 hover:text-white transition ease-linear duration-300">
                                    <a href="{{ route('register') }}">Register</a>
                                </li>
                    </ul>
                    @endif
                @endauth
            </nav>
            @endif


        </div>
        <div>
            {{ $slot }}
        </div>
    </section>
</body>
