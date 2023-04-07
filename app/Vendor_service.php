<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor_service extends Model
{
    protected $guarded = [ ];
    public function category(){
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }
    public function service(){
        return $this->belongsTo('App\Service', 'service_id', 'id');
    }
    public function vendor(){
        return $this->belongsTo('App\Vendor', 'vendor_id', 'id');
    }
}
