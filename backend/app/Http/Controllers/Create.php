<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    public function create(Request $request)
    {
        return view('create');
        $create = $request->input('comment');
        dd($create);
    }    
}