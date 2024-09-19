<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trips extends Model
{
    use HasFactory;

    public function trip_destination()
    {
        return $this->belongsTo(Destinations::class, 'destination');
    }

    public function accomodations()
    {
        return $this->hasMany(activity_accomodation::class, 'trip_id');
    }
}
