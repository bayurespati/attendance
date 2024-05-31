<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $table = 'peserta';

    protected $guarded = [];

    public function meja()
    {
        return $this->hasOne(Meja::class, 'id', 'meja_id');
    }
}
