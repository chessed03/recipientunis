<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    
    use HasFactory;

    protected $table = 'courses';

    const TABLE      = "courses";

    const REMOVED    = 0;

    const ALIVE      = 1;

}
