<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Models\System\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function show( Request $request )
    {

        $post = Post::getPostBySlug( $request->slug );

        return view('system.posts.show', [
            'post' => $post
        ]);

    }

}
