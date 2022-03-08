<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;


class MenuController extends Controller
{
    public function menu()
    {
        $menu = view('menu');

        // $all_user = DB::table('users')->get();
        $test = User::where('id', 1)->first();
        return $menu;
        // dd($test);
        // $menu->all_user = $all_user;ß
    }
    public function getMenu()
  {
  return view('user.menu');
  }

  public function postMenu(Request $request)
  {
  $this->validate($request,[
  'name' => 'name|required',
  'password' => 'required|min:4'
  ]);
 
  if(Auth::attempt(['name' => $request->input('name'), 'password' => $request->input('password')])){
  return redirect()->route('user.menu');
  }
  return redirect()->back();
}