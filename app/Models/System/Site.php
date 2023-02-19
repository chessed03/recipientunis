<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{

    use HasFactory;

    protected $table = 'sites';

    protected $casts = [
        'social_networks'  => 'json'
    ];

    const TABLE      = "sites";

    const REMOVED    = 0;

    const ALIVE      = 1;

    public static function getSite( $server )
    {

        $result = null;

        $query = self::where('server_name', $server)
            ->where('status', self::ALIVE)
            ->first();

        if ( $query ) {

            $result = $query;

        }

        return $result;

    }

    public static function getCarouselImages( $id )
    {

        return CarouselImage::getCarouselImages( $id );

    }

}
