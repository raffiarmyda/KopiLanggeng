<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function home(){
        return view('home',["title"=>"Home"]);
    }
    public function about(){
        return view('about',["title"=>"About"]);
    }
    public function signup(){
        return view('signup',["title"=>"Signup"]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns|unique:users',
            'username' => 'required|unique:users',
            'password' => 'required',
            'role' => 'required'
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'username'=>$request->username,
            'password'=>bcrypt($request->password),
            'role'=>$request->role,
        ]);
        return redirect('/home')->with('status', 'Berhasil Membuat Akun!');
    }

    public function member(){
        $members = User::where('role',"User")->get();
        return view('member',compact('members'),["title"=>"Member"]);
    }
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
