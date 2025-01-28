<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    public function event () : BelongsTo {
        return $this->belongsTo(Event::class,'event_id','id');
    }
}
