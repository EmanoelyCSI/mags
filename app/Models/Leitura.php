<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bomba;
use App\Models\Bico;
// use App\Models\Turno;

class Leitura extends Model
{
    public function bomba()
    {
    return $this->hasOne(Bomba::class, 'id', 'bomba_id');
    }

    public function bico()
    {
    return $this->hasOne(Bico::class, 'id', 'bico_id');
    }


  
}
