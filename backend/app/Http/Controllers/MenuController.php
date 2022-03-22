<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;


class MenuController extends Controller
{
    public function menu() 
    {
        print('ログイン成功');
    }
}