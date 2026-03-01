<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TamuUndangan extends Model
{
    protected $table = 'tabel_tamu_undangan';

    protected $fillable = [
        'fkid_undangan',
        'nama_tamu',
        'slug',
        'is_opened',
    ];

    /**
     * Casting status buka undangan.
     */
    protected function casts(): array
    {
        return [
            'is_opened' => 'boolean',
        ];
    }

    /**
     * Relasi: Tamu ini milik undangan mana.
     */
    public function undangan(): BelongsTo
    {
        return $this->belongsTo(Undangan::class, 'fkid_undangan', 'id');
    }
}
