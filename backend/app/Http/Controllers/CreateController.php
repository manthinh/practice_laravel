<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CreateController extends Controller
{
    public function create(Request $request)
    {
        return view('create');
        $create = $request->input('comment');
        $NewCreate = User::insert(['NewCreate' => $create]);
    }    

    public function NewCreate(Request $request)
    {
        $create = $request->input('comment');
        $NewCreate = User::create(['name','email' => $create]);
        dd($create,$NewCreate);
    }
    
}
