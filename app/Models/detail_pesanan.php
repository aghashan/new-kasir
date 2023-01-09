<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_pesanan extends Model
{
    use HasFactory;
    protected  $guarded = [
        'id_detail',
    ];
    protected $table = 'detail_pesanans';

    public function pesanan()
    {
        $this->belongsTo(Pesanans::class);
    }

    public function masakan()
    {
        $this->belongsTo(Masakans::class);
    }
}
