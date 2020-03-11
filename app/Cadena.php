<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cadena extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'Cadena';
    protected $primaryKey = 'Cod_Cadena';

    public function restaurantes()
    {
        return $this->hasMany(
            Restaurante::class,
            'Cod_Cadena'
        );
    }
}
