<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;

    protected $guarded = ['id_pesanan'];
    protected $table = 'pesanans';

    protected $casts = [
        'tanggal_pesanan' => 'datetime',
    ];

    public function user()
    {
        $this->belongsTo(Users::class);
    }

    public function meja()
    {
        $this->belongsTo(Mejas::class);
    }

    public function detailPesanan()
    {
        $this->hasMany(DetailPesanans::class);
    }
}
