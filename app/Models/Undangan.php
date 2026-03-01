<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Undangan extends Model
{
    protected $table = 'tabel_undangan';

    protected $fillable = [
        'fkid_user',
        'fkid_template_undangan',
        'slug',
        'data_event_undangan',
    ];

    /**
     * Casting event_data dari JSON di DB menjadi Array di PHP secara otomatis.
     */
    protected function casts(): array
    {
        return [
            'data_event_undangan' => 'array',
        ];
    }

    /**
     * Relasi ke pemilik (User/Pembeli).
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'fkid_user', 'id');
    }

    /**
     * Relasi ke Template yang dipilih.
     */
    public function templateUndangan(): BelongsTo
    {
        return $this->belongsTo(TemplateUndangan::class, 'fkid_template_undangan', 'id');
    }
}
