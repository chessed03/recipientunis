<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    use HasFactory;

    protected $table = 'schools';

    const TABLE      = "schools";

    const REMOVED    = 0;

    const ALIVE      = 1;

}
