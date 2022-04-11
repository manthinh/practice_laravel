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
        $POST = new Post();
        $POST->text = $request->input('tweet');
        $POST->save();
        return redirect()->route('index');
    }

    public function tweet_view()
    {
        $tweets = Post::pluck('text');
        $tweetDays = Post::pluck('created_at');
        // dd($tweets);
        return view('post.tweet_view',compact('tweets','tweetDays'));
        // return view('post.tweet_view',compact('tweets'));
       
        
    }
    
}
