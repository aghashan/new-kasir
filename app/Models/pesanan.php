<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_pesanan',
        'tgl_pesanan',
        'id_user',
        'no_meja',
        'total_harga',
        'bayar',
        'kembali',
        'status_pesanan',
        'status_makanan_pesanan'
    ];
}
