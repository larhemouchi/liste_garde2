<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use \Venturecraft\Revisionable\RevisionableTrait;

class Servicy extends Model
{
    use RevisionableTrait;
    
    protected $fillable = [
        'name',
    ];
    
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
