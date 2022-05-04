<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;



class LoginController extends controller
{
    public function login() 
    {
        return view('login');

    }
    public function connect(Request $request)
    {
        // $id1 = $request->input('user_id');
        // $pass1 = $request->input('password');
        // $id2 = User::where('id',1)->get()->pluck('name');
        // $id3 = User::where('id',1)->get()->pluck('password');
        // $id4 = User::where('id',2)->get()->pluck('name');
        // $id5 = User::where('id',2)->get()->pluck('password');
        // // dd($id2,$id3);        
        // foreach($id2 as $name)
        // foreach($id3 as $password)
        // foreach($id4 as $name2)
        // foreach($id5 as $password2)
        // dd($name,$password,$name2,$password2);
        // if($id1 === $name && $pass1 === $password)
        // {
        //     // echo "ログイン成功";
        //     header('Location: http://localhost:8080/todoIndex');
        //     exit();;
        // } 
        // else if($id1 === $name2 && $id2 === $password2) 
        // {
        //     // echo "ログイン成功";
        //     header('Location: http://localhost:8080/todoIndex');
        //     exit();;
        // } else 
        // {
        //     header('Location: http://localhost:8080/login');
        //     exit();
        // }
        
        $userName = $request->input('user_id');
        $pass = $request->input('password');
        $user = User::where('name',$userName)->first();
        // dd($user->id);
        // dd($user->name,$user->password);
        if($user === null)
        {
            return view('login');
        }

        if($user->name === $userName && $user->password === $pass)
        {
            $request->session()->put('user',$user->id);
            return view('todoIndex');
        } 
        session()->flash('flash_message', 'ユーザー名とパスワードが一致しません');
        return view('login');
    
    }
    
    
}
    