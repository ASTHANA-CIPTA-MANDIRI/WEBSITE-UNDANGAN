<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TemplateUndangan extends Model
{
    protected $table = 'tabel_template_undangan';

    protected $fillable = [
        'nama_template',
        'slug',
        'kategori_template',
        'layout_template',
        'konfigurasi_tema',
        'foto_sampul',
        'harga',
    ];

    protected function casts(): array
    {
        return [
            'konfigurasi_tema' => 'object',
        ];
    }

    /**
     * Relasi ke undangan siapa
     */
    public function undangan(): HasMany
    {
        return $this->hasMany(Undangan::class, 'fkid_template_undangan', 'id');
    }
}
