<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Leitura;

class Bico extends Model
{

    use HasFactory;

    protected $table = 'bicos';
    
    public function bomba(){
        return $this->hasOne(Bomba::class, 'id', 'bomba_id');
    }
    
    public function leitura(){
        return $this->hasMany(Leitura::class, 'bico_id', 'id');
    }

}
