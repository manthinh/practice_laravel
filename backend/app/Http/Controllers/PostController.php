<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('post.index');
    }    

    public function tweet(Request $request)
    {
        $post = new Post();
        $post->text = $request->input('tweet');
        $post->save();
        return redirect()->route('index');
    }

    public function tweet_view()
    {
        $tweets = Post::all();
        // dd($tweets);
        return view('post.tweet_view',compact('tweets'));
        
    }
    
}
