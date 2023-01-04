<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class masakan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_masakan',
        'nama_masakan',
        'kategori',
        'status_masakan',
        'harga'
    ];
}
