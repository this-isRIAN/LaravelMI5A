<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Prodi extends Model
{
    use HasFactory;

    protected $table='prodi';

    public function fakultas(){
        return $this->belongsTo(Fakultas::class,'fakultas_id','id');
    }
}
