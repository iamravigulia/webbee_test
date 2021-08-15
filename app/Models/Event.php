<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function workshops(){
        return $this->hasMany('App\Models\Workshop', 'event_id');
    }
}
