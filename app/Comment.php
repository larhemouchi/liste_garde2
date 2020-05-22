<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{


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
