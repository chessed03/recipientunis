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

        $faq_questions  = Site::getFaqQuestions( $site->school_id );
        
        return view('system.sites.index', [
            'carouselImages' => $carouselImages,
            'programs'       => $programs,
            'certifications' => $certifications,
            'posts'          => $posts,
            'faq_questions'  => $faq_questions
        ]);

    }

    public function getNotices( Request $request )
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

    public static function processContact( Request $request )
    {
        
        $bucketEmail = 'contacto@sisadesel.com.mx';//contacto@sisadesel.com.mx chessed03@gmail.com
        
        $name        = trim($request->name);

        $email       = trim($request->email);

        $phone       = $request->phone;

        $message     = trim($request->message);

        $sendCopy    = true;
        
        $pattern	 = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';

        if ( $email != '' && $message != '') {

            if ( preg_match($pattern, $email) ) {

                if ($name == '') $subject_a = 'Message from Guest';
                else $subject_a = 'Message from ' . $name;
                $headers_a = 'From: ' . $email . "\r\n";
                
                mail($bucketEmail, $subject_a, $message, $headers_a);
                
                if ($sendCopy) {
                    
                    $subject_b = 'Message from ' . $bucketEmail;

                    $headers_b = 'From: ' . $bucketEmail . "\r\n";
                    
                }
                
                return json_encode('success|Envío completado.');

            } else {

                return json_encode('error|Por favor ingresa un correo válido!');

            }

        } else {

            return json_encode('error|Por favor rellena los campos solicitados!');

        }

        return true;

    }


}
