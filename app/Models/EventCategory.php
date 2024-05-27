<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventCategory extends Model
{
    use HasFactory;

    protected $table = 'event_categories';

    protected $fillable = [
        'category_event_name',
    ];

    protected $guarded = [
        'id',
    ];

    public function event()
    {
        return $this->hasMany(Event::class);
    }
}
