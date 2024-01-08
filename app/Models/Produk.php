<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';
    
    protected $fillable = [
        'perihal',
        'kategori_id',
        'nomor',
        'tahun',
        'tanggal_ditetapkan',
        'kaitan',
        'penyusun',
        'file_upload',
        'counter',
        'subjek',
        'last_visited_at',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

}
