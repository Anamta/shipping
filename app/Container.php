<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Port;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\ContainerType;

class Container extends Model
{
    protected $table = "containers";
    protected $fillable = ['code','description','container_type_id','cost','company_id','pur_port_id','supplier'];
    public $timestamps=false; 
    
    public function port()
    {
        return $this->hasOne('App\Port','id','pur_port_id');
    }

    public function containertype()
    {
        return $this->hasOne('App\ContainerType','id','container_type_id');
    }
}
