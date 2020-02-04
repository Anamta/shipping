<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Vessel extends Model
{
    protected $table = "vessels";
    protected $fillable = ['code','name','owner',];
    public $timestamps=false; 
    
}
