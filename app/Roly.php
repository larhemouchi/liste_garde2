<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use \Venturecraft\Revisionable\RevisionableTrait;

class Roly extends Model
{
    use RevisionableTrait;
    //
    protected $fillable = [
        'name',
    ];
    
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function specs()
    {
        return $this->hasMany('App\Spec');
    }
}