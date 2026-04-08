<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function bookings(){
        return $this->hasmany(Booking::class);
    }

    public function testimonials(){
        return $this->hasmany(Testimonial::class);
    }
}
