<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use App\Models\Turno;

class Leitura extends Model
{
    public function bomba()
    {
    return $this->hasOne(Bomba::class, 'id', 'bomba_id');
    }

//-----------------------------------------------------------
    public function bico()
    {
    return $this->hasOne(Bico::class, 'id', 'bico_id');
    }

//-----------------------------------------------------------

  public function leituraBomba()
    {
    return $this->belongsTo(Bomba::class, 'bomba_id', 'id');
    }

//-----------------------------------------------------------
    public function leituraBico()
    {
    return $this->belongsTo(Bico::class, 'bico_id', 'id');
    }
}
