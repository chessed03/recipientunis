<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    
    use HasFactory;

    protected $table = 'videos';

    const TABLE      = 'videos';

    const REMOVED    = 0;

    const ALIVE      = 1;

    public static function getVideo( $id )
    {
        
        $result = null;

        if ( $id ) {

            $query = self::where('school_id', $id)
            ->where('status', self::ALIVE)
            ->first();

            if ( $query ) {

                $result = $query;

            }

        }

        return $result;

    }

}
