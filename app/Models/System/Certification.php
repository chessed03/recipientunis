<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Certification extends Model
{
    
    use HasFactory;

    protected $table = 'certifications';

    const TABLE      = "certifications";

    const REMOVED    = 0;

    const ALIVE      = 1;

    public static function getCertifications( $id )
    {
        
        $result = null;

        if ( $id ) {

            $query = self::where('school_id', $id)
            ->where('status', self::ALIVE)
            ->get();

            if ( $query ) {

                $result = $query;

            }

        }

        return $result;

    }

}
