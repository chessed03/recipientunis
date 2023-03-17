<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $casts = [
        'schools' => 'json'
    ];

    const TABLE    = "posts";

    const DELETED  = 0;

    const ALIVE    = 1;

    public static function getPostBySlug( $slug )
    {
        $result = null;

        if ( $slug ) {

            $query = self::where('slug', $slug)
                ->where('status', self::ALIVE)
                ->first();

            if ( $query ) {

                $result = $query;

            }

        }

        return $result;
    }

    public static function getPosts( $school_id )
    {

        $result = null;

        if ( $school_id ) {

            $school_id = implode( ',', [ $school_id ] );

            $query     = self::whereJsonContains('schools', $school_id)
                ->where('status', self::ALIVE)
                ->orderBy('created_at', 'desc')
                ->take(3)
                ->get();

            if ( $query ) {

                $result = $query;

            }

        }

        return $result;

    }

    public static function getLatestPosts( $school_id )
    {

        $result = null;

        if ( $school_id ) {

            $school_id = implode( ',', [ $school_id ] );

            $query     = self::whereJsonContains('schools', $school_id)
                ->where('status', self::ALIVE)
                ->orderBy('created_at', 'desc')
                ->take(2)
                ->get();

            if ( $query ) {

                $result = $query;

            }

        }

        return $result;

    }

}
