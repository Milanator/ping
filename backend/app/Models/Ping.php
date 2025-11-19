<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ping extends Model
{
    protected $fillable = [
        'uuid',
        'battery_percent'
    ];

    public $timestamps = false;
}
