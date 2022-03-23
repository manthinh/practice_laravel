<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class LoginController extends controller
{
    public function login() 
    {
        return view('login');

    }
    public function connect(Request $request)
    {
        $id1 = $request->input('user_id');
        $pass1 = $request->input('password');
        $id2 = User::where('id',1)->get()->pluck('name');
        $id3 = User::where('id',1)->get()->pluck('password');
        $id4 = User::where('id',2)->get()->pluck('name');
        $id5 = User::where('id',2)->get()->pluck('password');
        // dd($id2,$id3);        
        foreach($id2 as $name)
        foreach($id3 as $password)
        foreach($id4 as $name2)
        foreach($id5 as $password2)
        // dd($name,$password);
        if($id1 === $name && $pass1 === $password)
        {
            echo "ログイン成功";
        } else if($id1 === $name2 && $pass1 === $password2) 
        {
            echo "ログイン成功";
        } else 
        {
            echo "ユーザー名とパスワードが一致しません";
        }
    
    }
}
    // public function pass(Request $request)
    // {
    //     $pass = $request->input('password');
    //     $User = User::find('password');
    //     dd($User);
    //     if(Hash::check($User->password,$pass)) {
    //         echo '一致しています';
    //     } else {
    //         echo '一致していません';
    //     }
    // }
    