<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surface extends Model
{

    use HasFactory;

    protected $table = 'surfaces';

    const TABLE      = "surfaces";

    const REMOVED    = 0;

    const ALIVE      = 1;

    public static function createItem($data)
    {
        
        $item           = new self();
        $item->name     = $data->name;
        $item->email    = $data->email;
        $item->comments = $data->comments;


        if ( $item->save() ) {
            
            return true;

        }

        return false;

    }


}
