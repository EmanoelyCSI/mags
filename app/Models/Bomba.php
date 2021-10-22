<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Bico;

class Bomba extends Model
{

    use HasFactory;

    public function bico(){
        return $this->hasMany(Bico::class, 'bomba_id', 'id');
        //return $this->belongsTo(Bico::class, 'id', 'bomba_id');
    }


    public function posto(){
        return $this->hasOne(Posto::class, 'id', 'posto_id');
    }


}
