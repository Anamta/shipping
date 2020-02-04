<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Port extends Model
{
    protected $table = "ports";
    public $timestamps=false; 
    
    public function portcharges()
    {
        return $this->hasOne('App\Port_Charge','port_id','id');
    }
}
