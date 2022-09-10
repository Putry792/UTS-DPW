<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Komen extends Model
{
    protected $table = 'komen';
    public $timestamps = false;
    protected $dates = [
        'created_at',
        'updated_at',
       
    ];
}