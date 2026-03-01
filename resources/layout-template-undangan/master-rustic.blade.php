<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan {{ $data->mempelai_pria ?? 'Pria' }} & {{ $data->mempelai_wanita ?? 'Wanita' }}</title>

    {{-- Load Bootstrap 5 (Asumsi via Vite) --}}
    @vite(['resources/sass/app.scss', 'resources/css/local-fonts.css', 'resources/js/app.js'])

    <style>
        /* CSS 100% bebas dari syntax Blade agar tidak rusak oleh formatter */
        body {
            background-color: #fcfcfc;
            color: #333;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .mobile-container {
            max-width: 480px;
            margin: 0 auto;
            background-color: #fff;
            min-height: 100vh;
            box-shadow: 0 0 40px rgba(0, 0, 0, 0.05);
            position: relative;
            overflow: hidden;
        }

        .accent-text {
            color: var(--primary-color);
            font-family: var(--main-font);
        }

        .bg-accent {
            background-color: var(--primary-color);
            color: #fff;
        }

        .hero-section {
            min-height: 80vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 2rem;
            background-image: var(--ornament-bg);
            background-size: cover;
            background-position: center;
            position: relative;
        }

        /* Overlay transparan jika pakai background foto */
        .hero-section::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 1));
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .divider-line {
            width: 50px;
            height: 2px;
            background-color: var(--primary-color);
            margin: 1.5rem auto;
        }

        .guest-box {
            border: 1px solid var(--primary-color);
            border-radius: 8px;
            padding: 1.5rem;
            margin-top: 2rem;
            background-color: rgba(255, 255, 255, 0.9);
        }

        .btn-modern {
            border: 1px solid var(--primary-color);
            color: var(--primary-color);
            background: transparent;
            border-radius: 50px;
            padding: 10px 30px;
            transition: all 0.3s;
        }

        .btn-modern:hover {
            background-color: var(--primary-color);
            color: #fff;
        }
    </style>
</head>

{{-- INJEKSI VARIABEL CSS DARI DATABASE DILAKUKAN DI ATRIBUT STYLE --}}

<body style="
    --primary-color: {{ $template->theme_config->primary_color ?? '#333333' }};
    --main-font: '{{ $template->theme_config->font ?? 'Montserrat' }}', sans-serif;
    --ornament-bg: url('{{ $template->theme_config->bg_url ?? '' }}');
">

    <div class="mobile-container">

        <section class="hero-section">
            <div class="hero-content">
                <p class="text-uppercase tracking-widest text-muted small mb-3">Pernikahan Kami</p>

                <h1 class="accent-text display-4 fw-bold mb-0">
                    {{ $data->mempelai_pria ?? 'Romeo' }}
                </h1>
                <h2 class="accent-text fs-4 my-2">&</h2>
                <h1 class="accent-text display-4 fw-bold mt-0">
                    {{ $data->mempelai_wanita ?? 'Juliet' }}
                </h1>

                <div class="divider-line"></div>

                <p class="text-muted mb-0 fw-light">
                    {{ \Carbon\Carbon::parse($data->tanggal_acara ?? now())->translatedFormat('l, d F Y') }}
                </p>

                @if(isset($guest) && $guest)
                <div class="guest-box">
                    <small class="text-muted d-block mb-1">Kepada Yth.</small>
                    <h4 class="accent-text fw-bold mb-0">{{ $guest->name }}</h4>
                </div>
                @endif
            </div>
        </section>

        @if(!empty($data->quote))
        <section class="py-5 px-4 text-center bg-light">
            <i class="bi bi-quote fs-1 text-muted opacity-50"></i>
            <p class="fst-italic text-secondary mt-2">
                "{{ $data->quote }}"
            </p>
        </section>
        @endif

        <section class="py-5 px-4 text-center">
            <h3 class="accent-text mb-4">Lokasi Acara</h3>
            <div class="card shadow-sm border-0">
                <div class="card-body py-4">
                    <i class="bi bi-geo-alt fs-2 accent-text mb-3 d-block"></i>
                    <p class="fw-bold mb-1">Gedung Resepsi</p>
                    <p class="text-muted small mb-4">{{ $data->lokasi ?? 'Alamat belum ditentukan' }}</p>

                    <a href="https://maps.google.com" target="_blank" class="btn btn-modern">
                        Buka Google Maps
                    </a>
                </div>
            </div>
        </section>

        <footer class="bg-accent text-center py-4 mt-4">
            <h2 class="accent-text text-white mb-0 fs-5">{{ $data->mempelai_pria ?? 'R' }} & {{ $data->mempelai_wanita ?? 'J' }}</h2>
            <small class="opacity-75">Terima kasih atas doa & restunya.</small>
        </footer>

    </div>

</body>

</html>