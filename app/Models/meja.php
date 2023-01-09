<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class meja extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'mejas';

    public function pesanan()
    {
        $this->hasMany(Pesanans::class);
    }
}
