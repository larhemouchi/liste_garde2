<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use \Venturecraft\Revisionable\RevisionableTrait;

use Illuminate\Database\Eloquent\SoftDeletes;

class Roly extends Model
{
    use RevisionableTrait;

    use SoftDeletes;


    protected $revisionCreationsEnabled = true;

    protected $revisionNullString = 'Rien';
    protected $revisionUnknownString = 'unconnu';
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
