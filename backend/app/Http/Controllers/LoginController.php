<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends controller
{
    public function login(Request $request)
    {
        $user = User::where('name', $request->name)->get();
        if (count($user) === 0){
            return view('login', ['login_error' => '1']);
    }
if (Hash::check($request->password, $user[0]->password)) {
    session(['name'  => $user[0]->name]);
}
if (Hash::check($request->password, $user[0]->password)) {

    session(['name'  => $user[0]->name]);

    session()->flash('flash_flg', 1);
            session()->flash('flash_msg', 'ログインしました。');

            return redirect(url('/'));

        }else{
            return view('login', ['login_error' => '1']);
        }
    } 
    public function logout(Request $request)
    {
        session()->forget('name');
        return redirect(url('/'));
    }  
}