<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Models\System\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index( Request $request )
    {
        $site  = ___getSite();

        $posts = Post::getAlivePostsById( $site->school_id );

        return view('system.posts.index',[
            'posts' => $posts
        ]);

    }

    public function show( Request $request )
    {

        $post = Post::getPostAliveBySlug( $request->slug );

        return view('system.posts.show', [
            'post' => $post
        ]);

    }

}
