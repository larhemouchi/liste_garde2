<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use \Venturecraft\Revisionable\RevisionableTrait;

class Spec extends Model
{
    use RevisionableTrait;

    protected $revisionCreationsEnabled = true;

    protected $revisionNullString = 'Rien';
    protected $revisionUnknownString = 'unconnu';
    
    protected $fillable = [
        'name', 'roly_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
