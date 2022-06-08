<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        $users = User::all();
        return view('menu',compact('menus','users'),["title"=>"Menu"]);
    }

    public function store(Request $request)
    {
//        return $request;
        $request->validate([
            'menu_name' => ['required','unique:menus'],
            'menu_description' => 'required',
            'menu_category' => 'required',
        ]);

        Menu::create([
            'users_id'=>1,
            'menu_name'=>$request->menu_name,
            'menu_description'=>$request->menu_description,
            'menu_category'=>$request->menu_category,
        ]);
        return redirect('/menu')->with('status', 'Data Menu Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    public function create(Menu $menu)
    {
        $menus = Menu::all();
        $users = User::all();
        return view('addmenu',compact('menus','users'),["title"=>"Add Menu"]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
