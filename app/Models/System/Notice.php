<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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

            $data = $notice->noticeable_type::findNoticeById( $notice->noticeable_id );
                        
            if ( $data ) {

                $collectionNotices[$not] = (object)[
                    'notice_id'   => $notice->id,
                    'type'        => $data->type,    
                    'name'        => $data->name,
                    'slug'        => $data->slug,
                    'description' => $data->description,
                    'start_date'  => $data->start_date,
                    'time'        => Carbon::createFromDate($data->start_date)->isoFormat('h:mm a'),
                    'day'         => Carbon::createFromDate($data->start_date)->isoFormat('DD'),
                    'month'       => Carbon::createFromDate($data->start_date)->isoFormat('MMMM'),
                    'year'        => Carbon::createFromDate($data->start_date)->isoFormat('YYYY'),
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