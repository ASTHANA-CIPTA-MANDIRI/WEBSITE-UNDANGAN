@props([
'route',
'activeRoutes' => null,
])

@php
$checkRoutes = $activeRoutes ?? [$route];
$isActive = collect($checkRoutes)->contains(fn($r) => request()->routeIs($r));
@endphp

<div class="submenu-item {{ $isActive ? 'active' : '' }}">
    <a class="text-decoration-none {{ $isActive ? 'text-white': 'text-light' }}" href="{{ route($route) }}" wire:navigate>
        {{ $slot }}
    </a>
</div>