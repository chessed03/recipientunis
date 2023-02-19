<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CarouselImage extends Model
{
    use HasFactory;

    protected $table = 'carousel_images';

    const TABLE      = "carousel_images";

    const REMOVED    = 0;

    const ALIVE      = 1;

    public static function getCarouselImages( $id )
    {

        $result = null;

        if ( $id ) {

            $query  = DB::table( self::TABLE)
                ->where('status', self::ALIVE)
                ->where('site_id', $id)
                ->get();

            if ( $query ) {

                $result = $query;

            }

        }

        return $result;

    }

}
