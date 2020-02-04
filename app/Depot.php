<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Depot extends Model
{
    protected $table = "depots";
    protected $fillable = ['code','name','address','contact_no','contact_person'];
    public $timestamps=false; 
    
}
