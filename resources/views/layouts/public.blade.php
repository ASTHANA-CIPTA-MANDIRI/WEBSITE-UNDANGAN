<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/" wire:navigate>TokoUndangan</a>
            <div class="ms-auto">
                @auth
                <span class="text-white me-3">Halo, {{ auth()->user()->name }}</span>
                {{-- Tombol dashboard sesuai role --}}
                @if(auth()->user()->role === 'admin')
                <a href="/admin/dashboard" class="btn btn-outline-light btn-sm">Dashboard Admin</a>
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">Logout</button>
                </form>
                @else
                <a href="/admin/dashboard" class="btn btn-outline-light btn-sm" wire:navigate>Undangan Saya</a>
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">Logout</button>
                </form>
                @endif
                @else
                <a href="{{ route('google.login') }}" class="btn btn-primary">Login / Daftar</a>
                @endauth
            </div>
        </div>
    </nav>
    {{ $slot }}

    @livewireScripts
</body>

</html>