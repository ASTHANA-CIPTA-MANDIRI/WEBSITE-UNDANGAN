<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TemplateUndanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $templates = [
            [
                'nama_template' => 'Elegan Emas (Gold)',
                'slug' => Str::slug('Elegan Emas (Gold)'),
                'kategori_template' => 'pernikahan',
                'layout_template' => 'templates.master-klasik',
                'konfigurasi_tema' => json_encode([
                    'primary_color' => '#D4AF37', // Gold
                    'font' => 'Playfair Display',
                    'bg_url' => '',
                ]),
                'foto_sampul' => null,
                'harga' => 99000,
            ],
            [
                'nama_template' => 'Modern Monokrom',
                'slug' => Str::slug('Modern Monokrom'),
                'kategori_template' => 'pernikahan',
                'layout_template' => 'templates.master-modern',
                'konfigurasi_tema' => json_encode([
                    'primary_color' => '#333333', // Dark Grey/Black
                    'font' => 'Montserrat',
                    'bg_url' => '',
                ]),
                'foto_sampul' => null,
                'harga' => 75000,
            ],
            [
                'nama_template' => 'Rustic Vintage Wood',
                'slug' => Str::slug('Rustic Vintage Wood'),
                'kategori_template' => 'pernikahan',
                'layout_template' => 'templates.master-rustic',
                'konfigurasi_tema' => json_encode([
                    'primary_color' => '#8B5A2B', // Brown Wood
                    'font' => 'Dancing Script',
                    'bg_url' => '',
                ]),
                'foto_sampul' => null,
                'harga' => 125000,
            ],
            [
                'nama_template' => 'Sweet Seventeen Pink',
                'slug' => Str::slug('Sweet Seventeen Pink'),
                'kategori_template' => 'ulang tahun',
                'layout_template' => 'templates.master-modern',
                'konfigurasi_tema' => json_encode([
                    'primary_color' => '#FF69B4', // Hot Pink
                    'font' => 'Poppins',
                    'bg_url' => '',
                ]),
                'foto_sampul' => null,
                'harga' => 50000,
            ],
            [
                'nama_template' => 'Navy Blue Royal',
                'slug' => Str::slug('Navy Blue Royal'),
                'kategori_template' => 'pernikahan',
                'layout_template' => 'templates.master-klasik',
                'konfigurasi_tema' => json_encode([
                    'primary_color' => '#000080', // Navy
                    'font' => 'Cormorant Garamond',
                    'bg_url' => '',
                ]),
                'foto_sampul' => null,
                'harga' => 150000,
            ],
            [
                'nama_template' => 'Kids Party Ceria',
                'slug' => Str::slug('Kids Party Ceria'),
                'kategori_template' => 'ulang tahun',
                'layout_template' => 'templates.master-modern',
                'konfigurasi_tema' => json_encode([
                    'primary_color' => '#FF4500', // Orange Red
                    'font' => 'Montserrat',
                    'bg_url' => '',
                ]),
                'foto_sampul' => null,
                'harga' => 45000,
            ],
            [
                'nama_template' => 'Khitanan Islami Biru',
                'slug' => Str::slug('Khitanan Islami Biru'),
                'kategori_template' => 'khitanan',
                'layout_template' => 'templates.master-klasik',
                'konfigurasi_tema' => json_encode([
                    'primary_color' => '#008080', // Teal
                    'font' => 'Playfair Display',
                    'bg_url' => '',
                ]),
                'foto_sampul' => null,
                'harga' => 55000,
            ],
            [
                'nama_template' => 'Emerald Green Nature',
                'slug' => Str::slug('Emerald Green Nature'),
                'kategori_template' => 'pernikahan',
                'layout_template' => 'templates.master-rustic',
                'konfigurasi_tema' => json_encode([
                    'primary_color' => '#50C878', // Emerald
                    'font' => 'Great Vibes',
                    'bg_url' => '',
                ]),
                'foto_sampul' => null,
                'harga' => 110000,
            ],
            [
                'nama_template' => 'Minimalis Putih Elegan',
                'slug' => Str::slug('Minimalis Putih Elegan'),
                'kategori_template' => 'pernikahan',
                'layout_template' => 'templates.master-modern',
                'konfigurasi_tema' => json_encode([
                    'primary_color' => '#808080', // Grey
                    'font' => 'Raleway',
                    'bg_url' => '',
                ]),
                'foto_sampul' => null,
                'harga' => 85000,
            ],
            [
                'nama_template' => 'Maroon Classic Romance',
                'slug' => Str::slug('Maroon Classic Romance'),
                'kategori_template' => 'pernikahan',
                'layout_template' => 'templates.master-klasik',
                'konfigurasi_tema' => json_encode([
                    'primary_color' => '#800000', // Maroon
                    'font' => 'Alex Brush',
                    'bg_url' => '',
                ]),
                'foto_sampul' => null,
                'harga' => 135000,
            ],
        ];

        // Tambahkan timestamp ke setiap array agar tidak error di database
        foreach ($templates as &$template) {
            $template['created_at'] = $now;
            $template['updated_at'] = $now;
        }

        DB::table('tabel_template_undangan')->insert($templates);
    }
}
