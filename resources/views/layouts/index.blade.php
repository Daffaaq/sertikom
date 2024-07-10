@include('layouts.sidebar')
@include('layouts.header')
{{-- @include('layouts_baru.content') --}}

<main>
    @yield('container') <!-- Ini adalah tempat untuk konten yang akan digantikan -->
</main>
@include('layouts.footer')
