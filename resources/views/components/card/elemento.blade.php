<div class="container max-w-screen-xl mx-auto px-4">
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-white dark:border-gray-700">

        <img src="{{ asset('storage/' . $imagen) }}" class="rounded-t-lg" alt="" />

        <div class="p-5">

            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $nombre }}</h5>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">Fecha: {{ $fecha }}
            </h5>

            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $descripcion }}</p>

        </div>
    </div>
</div>
