<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemohon extends Model
{
    protected $table = 'pemohon'; 
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone-number',
        'avatar',
        'nomor',
        'unit_kerja',
        'jabatan'
    ];
}
