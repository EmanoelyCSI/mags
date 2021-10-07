<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    public function turno()
    {
    return $this->hasOne(Leitura::class, 'turno_id', 'id');
    }
}
