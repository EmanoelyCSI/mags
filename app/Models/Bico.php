<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bomba;


class Bico extends Model
{
    public function bomba()
    {
    return $this->hasOne(Bomba::class, 'id', 'bomba_id');
    }
}
