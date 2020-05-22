<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use \Venturecraft\Revisionable\RevisionableTrait;

use Silber\Bouncer\Database\HasRolesAndAbilities;

class User extends Authenticatable
{
    use Notifiable;
    use HasRolesAndAbilities;
    use RevisionableTrait;


    protected $revisionCreationsEnabled = true;


    protected $revisionNullString = 'Rien';
    protected $revisionUnknownString = 'unconnu';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function specs()
    {
        return $this->belongsToMany('App\Spec');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    
    public function servicies()
    {
        return $this->belongsToMany('App\Servicy');
    }
}
