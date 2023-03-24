<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $table = 'data';
    
    protected $fillable = [
        'perihal',
        'kategori_id',
        'nomor',
        'nomor_perundangan',
        'tahun',
        'tanggal_ditetapkan',
        'tanggal_diundangkan',
        'kaitan',
        'file_upload',
        'status_id',
        'rekomendasi',
        'unit_kerja_id'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
    public function unit_kerja()
    {
        return $this->belongsTo(Unit_Kerja::class);
    }
}
