<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Venturecraft\Revisionable\RevisionableTrait;

class Plage extends Model
{
    use RevisionableTrait;

    protected $fillable = [
        'name', 'time_start' , 'time_end'
    ];

    public function guardies()
    {
        return $this->hasMany('App\Guardy');
    }
    
}
