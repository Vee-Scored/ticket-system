<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    public function images () : HasMany {
        return $this->hasMany(Image::class,'event_id','id');
    }

    public function categories () : BelongsTo {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function type () : BelongsTo {
        return $this->belongsTo(Type::class,'type_id','id');
    }

    public function faqs () : HasMany {
        return $this->hasMany(Faq::class,'event_id','id');
    }

    public function tickets () : HasMany {
        return $this->hasMany(Ticket::class,'event_id','id');
    }
}
