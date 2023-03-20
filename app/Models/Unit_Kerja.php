<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit_Kerja extends Model
{
    use HasFactory;

    protected $table = 'unit_kerja';
    
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone-number',
    ];
}
