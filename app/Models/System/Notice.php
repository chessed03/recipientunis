<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    
    use HasFactory;

    protected $table   = 'notices';

    protected $guarded = [];  

    const TABLE      = "notices";

    const REMOVED    = 0;

    const ALIVE      = 1;

    public function noticeable()
    {

        return $this->morphTo();

    }

    public static function getNotices( $dateSelected )
    {
        
        $result  = null;
             
        $notices = self::where('status', self::ALIVE)
                        ->whereDate('start_date', '>=', $dateSelected)
                        ->orderBy('start_date', 'asc')
                        ->take(6)
                        ->get();

        $collectionNotices = [];

        foreach ( $notices as $not => $notice ) {
            
            $data = $notice->noticeable_type::where('id', $notice->noticeable_id)
                ->first();
            
            if ( $data ) {

                $collectionNotices[$not] = (object)[
                    'notice_id'   => $notice->id,
                    'name'        => $data->name,
                    'description' => $data->description,
                    'start_date'  => $data->start_date,
                    'finish_date' => $data->finish_date,
                    'location'    => $data->location,
                    'image_url'   => $data->image_url
                ];

            }
            
        }

        if ( count( $collectionNotices ) > 0 ) {

            $result = $collectionNotices;

        }

        return $result;

    }

}