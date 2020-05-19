<?php

namespace App;

use \Venturecraft\Revisionable\RevisionableTrait;

use Illuminate\Database\Eloquent\Model;

class Guardy extends Model implements \Acaronlex\LaravelCalendar\Event
{

    use RevisionableTrait;

    protected $revisionCreationsEnabled = true;
    
    protected $fillable = [
        'name', 'servuser_id', 'plage_id', 'date_start', 'date_end'
    ];

    # EVENT 
    protected $dates = ['date_start', 'date_end'];

/**
 * Get the event's id number
 *
 * @return int
 */
public function getId() {
    return $this->id;
}

/**
 * Get the event's title
 *
 * @return string
 */
public function getTitle()
{
    return $this->title;
}

/**
 * Is it an all day event?
 *
 * @return bool
 */
public function isAllDay()
{
    return (bool)$this->all_day;
}

/**
 * Get the start time
 *
 * @return DateTime
 */
public function getStart()
{
    return $this->start;
}

/**
 * Get the end time
 *
 * @return DateTime
 */
public function getEnd()
{
    return $this->end;
}


// Implement all Event methods ...




    public function servuser()
    {
        return $this->belongsTo('App\Servuser');
    }
    

    public function plage()
    {
        return $this->belongsTo('App\Plage');
    }
}
