<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Models\System\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index( Request $request )
    {

        $site           = ___getSite();

        $carouselImages = Site::getCarouselImages( $site->id );

        $programs       = Site::getPrograms( $site->school_id );
       
        return view('system.sites.index', [
            'carouselImages' => $carouselImages,
            'programs'       => $programs
        ]);

    }

    public function getDataNotices( Request $request )
    {
        
        $site    = ___getSite();

        $notices = Site::getNotices( $request->date );
        
        return json_encode($notices);

    }


}
