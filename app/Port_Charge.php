<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Charge;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Port_Charge extends Model
{
    protected $table = "port_charges";
    protected $fillable = ['port_id','charges_id','amount',];
    public $timestamps=false; 
    
    public function charge()
    {
        return $this->hasOne('App\Charge','id','charges_id');
    }
}
