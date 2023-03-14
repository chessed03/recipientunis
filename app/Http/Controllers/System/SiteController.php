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

        $certifications = Site::getCertifications( $site->school_id );

        $posts          = Site::getPosts( $site->school_id );
        
        return view('system.sites.index', [
            'carouselImages' => $carouselImages,
            'programs'       => $programs,
            'certifications' => $certifications,
            'posts'          => $posts      
        ]);

    }

    public function getDataNotices( Request $request )
    {
        
        $site    = ___getSite();

        $notices = Site::getNotices( $request->date );
        
        return json_encode($notices);

    }

    public function maintenance( Request $request )
    {

        
        return view('system.sites.maintenance');

    }

    public function createSurface( Request $request )
    {
        
        $result = Site::createSurface( $request );

        return json_encode($result);

    }


}
