<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{
    protected $fillable = ['_id', 'idAlert', 'nReport', 'type', 'title', 'status', 'date', 'hour', 'description', 'zones', 'severity', 'polygon', 'update'];
}
