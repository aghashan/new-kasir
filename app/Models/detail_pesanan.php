<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_pesanan extends Model
{
    use HasFactory;
    protected  $fillable = [
        'id_detail',
        'id_pesanan',
        'id_masakan',
        'jumlah',
        'sub_total',
        'keterangan_pesanan',
        'status_detail_masakan'
    ];
}
