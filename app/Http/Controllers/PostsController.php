<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('news')->with('posts', $posts);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $other_posts = Post::all()->random(2);
        $post = Post::findOrFail($id);
        return view('single_news')->with('post',$post)
                                ->with('other_posts', $other_posts);
    }
}
