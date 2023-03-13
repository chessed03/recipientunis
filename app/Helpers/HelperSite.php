<?php

use App\Models\System\Site;

function ___getSite()
{

    $server = $_SERVER["SERVER_NAME"] ?? "recipientunis.test";

    $site   = Site::getSite( $server );

    return $site;

}
