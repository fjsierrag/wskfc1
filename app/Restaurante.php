<?php

namespace App;

use App\Cadena;
use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'Restaurante';
    protected $primaryKey = 'Cod_Restaurante';

    public function cadena()
    {
        return $this->belongsTo(
            Cadena::class,
            'Cod_Cadena'
        );
    }
}
