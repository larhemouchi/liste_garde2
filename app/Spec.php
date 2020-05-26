<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use \Venturecraft\Revisionable\RevisionableTrait;

use Illuminate\Database\Eloquent\SoftDeletes;

class Spec extends Model
{
    use RevisionableTrait;

    use SoftDeletes;

    protected $revisionCreationsEnabled = true;

    protected $revisionNullString = 'Rien';
    protected $revisionUnknownString = 'unconnu';
    
    protected $fillable = [
        'name', 'roly_id'
    ];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
