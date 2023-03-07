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

        //$notices        = Site::getNotices();
        
        return view('system.sites.index', [
            'carouselImages' => $carouselImages,
            //'notices'        => $notices
        ]);

    }

    public function getDataNotices( Request $request )
    {

        $site    = ___getSite();

        $notices = Site::getNotices();
        
        return json_encode($notices);

    }


}
