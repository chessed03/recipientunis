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

    public static function findNoticeById( $id )
    {
        
        $result = null;
        
        $query = self::where('id', $id)
            ->where('status', self::ALIVE)
            ->first();

        if ( $query ) {

            $result = (object)[
                'type'        => 'events',
                'slug'        => $query->slug,    
                'name'        => $query->name,
                'description' => $query->description,
                'start_date'  => $query->start_date,
                'finish_date' => $query->finish_date,
                'location'    => $query->location,
                'image_url'   => $query->image_url
            ];

        }

        return $result;

    }

    public static function getEventBySlug( $slug )
    {
        
        $result = null;
        
        $query = self::where('slug', $slug)
            ->where('status', self::ALIVE)
            ->first();

        if ( $query ) {

            $result = $query;

        }

        return $result;

    }

}
