<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instruksi extends Model
{
    use HasFactory;

    protected $table = 'instruksi';
    
    protected $fillable = [
        'perihal',
        'nomor',
        'tahun',
        'tanggal_ditetapkan',
        'file_upload'
    ];
}
