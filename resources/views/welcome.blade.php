<x-mi-layout>
    <x-div.container>
        @include('components.card.card')
        @if (isset($eventos))
            @foreach ($eventos as $evento)
                <x-card.elemento>
                    <x-slot name="imagen">
                        {{ $evento->imagen }}
                    </x-slot>
                    <x-slot name="descripcion">
                        {{ $evento->descripcion }}
                    </x-slot>
                    <x-slot name="nombre">
                        {{ $evento->nombre }}
                    </x-slot>
                    <x-slot name="fecha">
                        {{ $evento->fecha }}
                    </x-slot>
                </x-card.elemento>
            @endforeach
        @endif
    </x-div.container>
</x-mi-layout>
@include('components.footer.footer')
