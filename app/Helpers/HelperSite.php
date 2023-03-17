<?php

use App\Models\System\Site;

function ___getSite()
{

    $server = $_SERVER["SERVER_NAME"] ?? "recipientunis.test";

    $site   = Site::getSite( $server );
    
    return $site;

}

function ___getLatestPosts()
{

    $school_id = ___getSite()->school_id;

    $posts     = Site::getLatestPosts( $school_id );
    
    return $posts;

}
