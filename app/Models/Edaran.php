<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edaran extends Model
{
    use HasFactory;

    protected $table = 'surat_edaran';
    
    protected $fillable = [
        'perihal',
        'nomor',
        'tahun',
        'file_upload'
    ];
}
