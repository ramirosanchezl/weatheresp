<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Measurement extends Model
{
    protected $fillable = ['id_est', 'temperature', 'humidty', 'pressure', 'created_at'];
}
