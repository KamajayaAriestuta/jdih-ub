<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raper extends Model
{
    use HasFactory;

    protected $table = 'raper';
    
    protected $fillable = [
        'perihal',
        'kategori_id',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

}
