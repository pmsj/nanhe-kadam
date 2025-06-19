<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Copyright extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'statement',        
    ];
    
}
