<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    public function event () : BelongsTo {
        return $this->belongsTo(Event::class,'event_id','id');
    }

    public function tickets() : HasMany {
        return $this->hasMany(Ticket::class,'ticket_id','id');
    }
}
