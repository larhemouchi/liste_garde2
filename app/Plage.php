<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Venturecraft\Revisionable\RevisionableTrait;

use Illuminate\Database\Eloquent\SoftDeletes;

class Plage extends Model
{
    use RevisionableTrait;

    use SoftDeletes;

    protected $revisionCreationsEnabled = true;

    protected $revisionNullString = 'Rien';
    protected $revisionUnknownString = 'unconnu';

    protected $fillable = [
        'name', 'time_start' , 'time_end'
    ];

    protected $dates = ['time_start', 'time_end'];

    public function guardies()
    {
        return $this->hasMany('App\Guardy');
    }
    
}
