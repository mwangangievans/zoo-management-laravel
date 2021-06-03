<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
	'user_id',
    'phone',
    'gender',
    'age',
    'check_in',
    'check_out'];
    public function userBooking(){
        return $this->belongsTo('app\User','user_id');
    }
}

//bokking->userBooking <-- returns user who booked
