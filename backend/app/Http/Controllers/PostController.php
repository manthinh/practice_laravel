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
        $article = new Post();
        $article->text = $request->input('tweet');
        $article->save();
        return redirect()->route('index');
    }
}
