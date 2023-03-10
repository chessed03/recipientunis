<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\System\Event;

class EventController extends Controller
{
    
    public static function show( $slug )
    {
        
        $event = Event::getEventBySlug( $slug );

        return view('system.events.show', [
            'event' => $event
        ]);

    }

}
