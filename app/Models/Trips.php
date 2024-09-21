<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trips extends Model
{
    use HasFactory;

    protected $casts = [
        'startDate' => 'datetime',
        'endDate' => 'datetime',
        'duration' => 'string',
        'departuredateandtime' => 'string',
        'arrivaldateandtime' => 'string',

    ];

    public function trip_destination()
    {
        return $this->belongsTo(Destinations::class, 'destination');
    }

    public function accomodations()
    {
        return $this->hasMany(activity_accomodation::class, 'trip_id');
    }

    public function trip_flights()
    {
        return $this->hasMany(Flights::class, 'tripe_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
