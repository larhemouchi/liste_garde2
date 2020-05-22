<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use \Venturecraft\Revisionable\RevisionableTrait;

class Servicy extends Model
{
    use RevisionableTrait;


    protected $revisionCreationsEnabled = true;

    protected $revisionNullString = 'Rien';
    protected $revisionUnknownString = 'unconnu';
    
    protected $fillable = [
        'name', 'order'
    ];
    
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
