<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    
    use HasFactory;

    protected $table = 'events';

    const TABLE      = "events";

    const REMOVED    = 0;

    const ALIVE      = 1;

}
