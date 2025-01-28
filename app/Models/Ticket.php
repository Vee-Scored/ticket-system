<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Ticket extends Model
{
    public function event () : BelongsTo {
        return $this->belongsTo(Event::class,'event_id','id');
    }

    public function order () : HasOne {
        return $this->hasOne(Order::class,'ticket_id','id');
    }
}
