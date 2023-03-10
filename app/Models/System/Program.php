<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Program extends Model
{
    
    use HasFactory;

    protected $table = 'programs';

    const TABLE      = "programs";

    const REMOVED    = 0;

    const ALIVE      = 1;

    public static function getPrograms( $id )
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

    public static function getProgramAliveBySlug( $slug )
    {
        $result = null;

        if ( $slug ) {

            $query = self::where('slug', $slug)
                ->where('status', self::ALIVE)
                ->first();

            if ( $query ) {

                $result = $query;

            }

        }

        return $result;
    }

}
