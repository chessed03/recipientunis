<?php

use App\Models\System\Site;

function ___getSite()
{

    //$server = $_SERVER["SERVER_NAME"] ?? "recipientunis.test";

    $server = "ici.site.test";

    $site   = Site::getSite( $server );

    //dd($site->dataSchool->name);

    return $site;

}

function ___getCertifications()
{

    $school_id      = ___getSite()->school_id;

    $certifications = Site::getCertifications( $school_id );

    return $certifications;

} 
