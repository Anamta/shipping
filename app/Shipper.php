<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class  Shipper extends Model
{
    protected $table = "shippers";
    protected $fillable = ['name','address','contact_no','fax_no','email','contact_person'];
    public $timestamps=false; 
        
}
