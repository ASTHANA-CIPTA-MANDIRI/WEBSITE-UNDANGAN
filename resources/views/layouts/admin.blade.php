<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>
    <!-- Phosphor Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600&family=Plus+Jakarta+Sans:wght@400;500;600&display=swap" rel="stylesheet">

    @vite(['resources/css/custom.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body x-data="sidebarApp()" x-cloak>
    <aside class="sidebar" :class="{ collapsed: !open }">
        <!-- Brand -->
        <div class="sidebar-brand">
            <div class="brand-icon">U</div>
            <span class="brand-text">Undangan.id</span>
        </div>

        <nav class="sidebar-nav">
            <!-- Dashboard -->
            <div class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-parent text-decoration-none {{request()->routeIs('admin.dashboard') ? 'active' : ''}}" data-tooltip="Dashboard" wire:navigate>
                    <span class="nav-icon {{request()->routeIs('admin.dashboard') ? 'text-white' : 'text-light'}}"><i class="ph ph-squares-four"></i></span>
                    <span class="nav-label {{request()->routeIs('admin.dashboard') ? 'text-white' : 'text-light'}}">Dashboard</span>
                </a>
            </div>

            <!-- Section: Katalog -->
            <div class="nav-section-label">Katalog</div>
            <x-sidebar-menu
                label="Undangan"
                icon="ph ph-cube"
                :routes="['admin.templates.*', 'admin.sunatan.*', 'admin.categories.*']">

                <x-sidebar-submenu-item
                    route="admin.templates.index"
                    :active-routes="['admin.templates.*']">
                    Undangan Nikah
                </x-sidebar-submenu-item>
            </x-sidebar-menu>
        </nav>

        <!-- Footer: User -->
        <div class="sidebar-footer">
            <div class="user-card">
                @if(Auth::user()->avatar)
                <img
                    @click="open = true"
                    src="{{ Auth::user()->avatar }}"
                    class="user-avatar p-0 overflow-hidden"
                    alt="{{ Auth::user()->name }}"
                    style="object-fit: cover;">
                @else
                <div class="user-avatar" @click="open = true">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>
                @endif

                <div class="user-info">
                    <div class="user-name">{{ Auth::user()->name }}</div>
                    <div class="user-role">{{ Auth::user()->email }}</div>
                </div>

                <!-- Logout Button -->
                <div class="btn-signout">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="btn p-0 border-0 bg-transparent text-danger fs-5"
                            title="Logout"
                            style="line-height: 1;">
                            <i class="ph-bold ph-sign-out"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </aside>
    <!-- END SIDEBAR -->

    <div class="main-content">
        <!-- Topbar -->
        <header class="topbar">
            <button class="sidebar-toggle" @click="open = !open" :title="open ? 'Tutup sidebar' : 'Buka sidebar'">
                <span class="toggle-icon">
                    <i class="ph" :class="open ? 'ph-caret-left' : 'ph-caret-right'"></i>
                </span>
            </button>
            <span class="topbar-title">Dashboard</span>
            <span class="topbar-spacer"></span>
            <a href="{{route('/')}}" class="topbar-badge text-decoration-none">
                <i class="ph-bold ph-storefront fs-5"></i>
                <span>Toko</span>
            </a>
        </header>
        <!-- End Topbar -->

        <!-- dynamic content body -->
        <div class="p-3">
            {{ $slot }}
        </div>
        <!-- end dynamic content body -->
    </div>

    <script>
        function sidebarApp() {
            return {
                open: true,
                get sidebarOpen() {
                    return this.open;
                },
                setActive(menu) {
                    // handle active state jika diperlukan
                }
            }
        }
    </script>
    @livewireScripts
</body>

</html>