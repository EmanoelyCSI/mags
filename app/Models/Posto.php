<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contrato;

class Posto extends Model
{
    public function contrato()
    {
    return $this->hasOne(Contrato::class, 'id', 'contrato_id');
    }

}
