<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking_request extends Model
{
    protected $guarded = [ ];
    public function vservice(){
        return $this->belongsTo('App\Vendor_service', 'vservice_id', 'id');
    }
}
