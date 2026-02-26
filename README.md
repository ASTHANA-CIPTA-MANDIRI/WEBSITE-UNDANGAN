# WEBSITE UNDANGAN

---

## Standar Penulisan Kode (Coding Conventions)

### 1. Full Bahasa Indonesia

Semua elemen di dalam kodingan harus menggunakan Bahasa Indonesia agar seragam dan mudah dipahami oleh tim. Ini berlaku untuk:

- Penamaan variabel dan fungsi/method.
- Komentar (_comments_) pada kode.
- Nama tabel database dan kolom (sebisa mungkin diterjemahkan, misal: `users` menjadi `pengguna`).
- menggunakan php 8.4
- menggunakan laravel 12
- menggunakan livewire 4
- pastikan install composer & npm

### 2. Aturan Penamaan (Naming Cases)

Kita menggunakan standar penamaan berikut untuk membedakan struktur kode:

- **Variabel & Fungsi/Method:** Gunakan `camelCase`.
    - _Contoh:_ `$namaTamu`, `$statusKehadiran`, `simpanDataUndangan()`, `hitungTotalTamu()`.
- **Class & Model:** Gunakan `PascalCase` (huruf kapital di awal setiap kata).
    - _Contoh:_ `class TamuUndangan`, `class PengaturanWebsite`.
- **Kolom Database:** Gunakan `snake_case` (huruf kecil semua dipisah garis bawah).
    - _Contoh:_ `nama_lengkap`, `nomor_whatsapp`, `waktu_kehadiran`.

### 3. Penyesuaian Kode Hasil AI (AI-Generated Code)

Penggunaan AI (seperti ChatGPT, Gemini, dll) untuk membantu koding sangat diperbolehkan. **Namun**, setiap kode hasil _generate_ AI wajib **diperiksa dan disesuaikan ulang** standar penulisannya agar selaras dengan aturan di repositori ini (ubah ke Bahasa Indonesia, sesuaikan format variabel, dll) sebelum di-_commit_. Jangan asal _copy-paste_!

### 4. Standar Livewire v4 (Class-Based)

Kita tetap menggunakan pendekatan _Class-based_ (cara lama/klasik) untuk komponen Livewire, bukan mode _Volt/inline_.

**Perintah membuat komponen Livewire:**
Gunakan _flag_ `--class` saat men-generate komponen baru via terminal:

```bash
php artisan make:livewire Direktori/SubDirektori/NamaKomponen --class
```

(Contoh: php artisan make:livewire BukuTamu/FormIsiPesan --class)

Penulisan Route di web.php:
Gunakan pemanggilan route khusus Livewire v4 sesuai struktur folder.

```php
// Format standar
Route::livewire('/url-path', 'nama-folder.nama-komponen');
// Contoh penerapan:
Route::livewire('/undangan/buat', 'undangan.buat-undangan');
```

### 5. Kerapian Lainnya

- Fat Model, Skinny Controller: Usahakan logic perhitungan atau pengolahan data yang rumit diletakkan di dalam Model atau Action class, biarkan Controller/Livewire component hanya bertugas menerima request dan mengembalikan view.

- Hapus kode-kode yang di-komen (dead code) jika sudah tidak digunakan sebelum melakukan git push.
