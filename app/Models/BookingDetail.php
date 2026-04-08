<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookingDetail extends Model
{
    public function booking () {
        return $this->belongsTo(Booking::class);
    }

    public function service() {
        return $this->belongsTo(Service::class);
    }
}
