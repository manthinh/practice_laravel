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
        $id2 = User::where('id','<',3)->get()->pluck('name','password');
        // dd($id2);        
        foreach($id2 as $name)
        // dd($name);
        if($id2 === 0)
    {
        return view('login', ['login_error' => '1']);
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
    