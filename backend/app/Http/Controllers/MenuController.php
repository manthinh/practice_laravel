<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;


class MenuController extends Controller
{
    public function menu()
    {
        $menu = view('menu');
        $test = User::where('id', 1)->first();
        return $menu;
        dd($test);
    }
}