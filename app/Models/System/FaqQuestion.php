<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqQuestion extends Model
{
    
    use HasFactory;

    protected $table = 'faq_questions';

    const TABLE      = "faq_questions";

    const REMOVED    = 0;

    const ALIVE      = 1;

    public static function getFaqQuestions( $id )
    {
        $result = null;

        if ( $id ) {

            $query = self::where('school_id', $id )
                ->where('status', self::ALIVE)
                ->orderBy('created_at', 'desc')
                ->take(5)
                ->get();

            if ( $query ) {

                $result = $query;

            }

        }

        return $result;
    }

}
