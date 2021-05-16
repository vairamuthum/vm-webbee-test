<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Event extends Model {
    protected $_table = 'events';

    protected $_primaryKey = 'id';

    public function workshops() {
        return $this->hasMany(Workshop::class, 'event_id');
    }

    public function futureWorkshops() {
        return $this->hasMany(Workshop::class, 'event_id')->whereDate('start', '>', Carbon::now());
    }
}
