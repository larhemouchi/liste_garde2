<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use \Venturecraft\Revisionable\RevisionableTrait;

use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{

    use RevisionableTrait;

    use SoftDeletes;


    protected $fillable = [
        'comment', 'user_id' , 'guardy_id'
    ];


    public function user()
    {
        return $this->belongsTo('App\user');
    }

    public function guardy()
    {
        return $this->belongsTo('App\Guardy');
    }
}
