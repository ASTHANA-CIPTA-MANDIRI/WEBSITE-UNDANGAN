@props([
'label',
'icon',
'tooltip',
'routes' => [],
])

@php
$isActive = collect($routes)->contains(fn($r) => request()->routeIs($r));
@endphp

<div class="nav-item" x-data="{ expanded: {{ $isActive ? 'true' : 'false' }} }">
    <div class="nav-parent"
        data-tooltip="{{ $tooltip ?? $label }}"
        :class="{ open: expanded, active: {{ $isActive ? 'true' : 'false' }} && !sidebarOpen }"
        @click="expanded = !expanded">
        <span class="nav-icon {{  $isActive ? 'text-white': 'text-light'  }}"><i class="{{ $icon }}"></i></span>
        <span class="nav-label {{  $isActive ? 'text-white': 'text-light'  }}">{{ $label }}</span>
        <span class="nav-chevron"><i class="ph-bold ph-caret-down"></i></span>
    </div>
    <div class="submenu" :class="{ open: expanded && sidebarOpen }">
        <div class="submenu-inner">
            {{ $slot }}
        </div>
    </div>
</div>