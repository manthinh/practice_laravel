<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;


class PostController extends Controller
{
    public function index()
    {
        return view('post.index');
    }    

    public function tweet(Request $request)
    {
        // $post = new Post();
        // $currentUser = $request->session()->get('user');
        // dd($currentUser);
        // $post->text = $request->input('tweet');
        // $post->save();
        // $post->fill($request->all())->save();<-　1行で済むやつ
        $post = Post::create([
            'text' => $request->input('tweet'),
            'user_id' => $request->session()->get('user')
            ]);
        return redirect()->route('index');
    
    }

    public function tweet_view(Request $request,$id)
    {
        $tweets = Post::get();
        $currentUser = $request->session()->get('user');
        // dd($currentUser);
        return view('post.tweet_view',compact('tweets'));
        
    }

    public function detail($id)
    {
        $detail = Post::find($id);
        // dd($detail);
        return view('post.detail',['detail'=>$detail]);
    }

    public function edit(Request $request,$id)
    {
        $edit = Post::findOrFail($id);
        // dd($edit);
        return view('post.edit',['edit'=>$edit]);
    }

    public function update(Request $request,$id)
    {
    $edit = Post::findOrFail($id);
    // dd($edit);
    $edit->text = $request->input('text');
    $edit->contents = $request->input('contents');
    $edit->save();
    // dd($edit->save());
    return redirect()->route('tweet_view')->with('status',"{$edit->id}のつぶやきと詳細を編集しました");
    }
    
    public function destroy($id)
    {
        $destroy = Post::where('id',$id)->delete();
        return redirect('tweet_view')->with('status',"つぶやきと詳細を削除しました");
    }
}
