<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class masakan extends Model
{
    use HasFactory;
    protected $guarded = ['id_masakan'];
    protected $table = 'masakans';

    public function detailPesanan()
    {
        $this->belongsTo(DetailPesanans::class);
    }
}
