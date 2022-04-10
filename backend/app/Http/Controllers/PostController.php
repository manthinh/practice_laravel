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

    public function tweet_view(Request $request)
    {
        $articles = Post::all();
        return view('post.tweet_view');
        // dd($articles);
        
    }
    
}
