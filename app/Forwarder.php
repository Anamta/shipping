<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forwarder extends Model
{
    protected $table = "forwarders";
    protected $fillable = ['name','address','contact_no','fax_no','email','contact_person','user_id'];
    public $timestamps=false; 
        
}
