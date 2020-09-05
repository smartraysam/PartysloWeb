<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $table = 'events';
    protected $guarded = [];

    public function Events()
    {
        return $this->hasMany(Eventstat::class, 'event_id');
    }
}