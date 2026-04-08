<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function customer(){
        return $this->BelongsTo(Customer::class);
    }

    public function details() {
        return $this->hasMany(BookingDetail::class);
    }
}
