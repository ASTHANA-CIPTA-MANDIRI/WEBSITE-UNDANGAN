<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Daftar Master Layout
    |--------------------------------------------------------------------------
    | Key: Path file blade (tanpa .blade.php)
    | Value: Nama yang tampil di form dropdown admin
    */
    'layouts' => [
        'layout-template-undangan.master-klasik' => 'Layout Klasik (Bunga & Elegan)',
        'layout-template-undangan.master-modern' => 'Layout Modern (Minimalis & Bersih)',
        'layout-template-undangan.master-rustic' => 'Layout Rustic (Vintage & Kayu)',
    ],

    /*
    |--------------------------------------------------------------------------
    | Daftar Font Lokal
    |--------------------------------------------------------------------------
    | Key: Nama font-family (digunakan di CSS)
    | Value: Nama tampilan di dropdown
    | Pastikan Anda sudah mengunduh file .woff2 font ini ke public/fonts/
    */
    'fonts' => [
        // --- Serif (Klasik/Elegan) ---
        'Playfair Display' => 'Playfair Display (Elegan)',
        'Cormorant Garamond' => 'Cormorant Garamond (Mewah & Klasik)',
        'Lora' => 'Lora (Formal & Lembut)',
        'Cinzel' => 'Cinzel (Megah/Hanya Huruf Kapital)',

        // --- Sans-Serif (Modern/Bersih) ---
        'Montserrat' => 'Montserrat (Tegas & Jelas)',
        'Poppins' => 'Poppins (Modern & Bulat)',
        'Raleway' => 'Raleway (Minimalis & Rapi)',

        // --- Script (Tegak Bersambung/Romantis) ---
        'Dancing Script' => 'Dancing Script (Santai & Dinamis)',
        'Great Vibes' => 'Great Vibes (Mewah & Klasik)',
        'Alex Brush' => 'Alex Brush (Elegan & Mudah Dibaca)',
        'Parisienne' => 'Parisienne (Romantis ala Eropa)',
        'Sacramento' => 'Sacramento (Tipis & Aesthetic)',
    ],
];
