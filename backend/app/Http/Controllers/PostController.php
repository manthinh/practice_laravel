<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

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
        if($request->input('tweet') === null)
        {
            session()->flash('flash_message', '文字を入力してください。');
            return view('tweet');
        } 
        return redirect()->route('index');
    
    }

    public function tweet_view()
    {
        $tweets = Post::all();
        // dd($tweets);
        return view('post.tweet_view',compact('tweets'));
        
    }

    public function detail()
    {
        return view('post.detail');
    }

    public function edit(Request $request)
    {
        $edit = Post::find($request->id);
        // dd($edit);
        return view('post.edit',['text'=>$edit]);
    }

    public function update(Request $request)
    {
    $edit = Post::find($request->id);
    dd($edit);
    $edit->contents = $request->input('contents');
    // dd($edit->text);
    $edit->save();
    return redirect('/')->with('status', 'UPDATE完了!');
    }
    
}
