<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
   
    
    protected $fillable = ['name', 'latitude_pos', 'longitude_pos','forecast','forecast_id','location','winds'];
    
}
