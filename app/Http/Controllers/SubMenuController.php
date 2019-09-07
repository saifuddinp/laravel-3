<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;
use App\EcSubmenu;

class SubMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $sub_menus= EcSubmenu::all();
       return view('BackEnd.submenu.manage', compact('sub_menus'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus= menu::all();
       return view('BackEnd.submenu.create', compact('menus'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
            'menu'=>'required',
            'Title'=>'required|max:50',
            'Url'=>'required'
        ]);
        $menu=new EcSubmenu();
        $menu->menu_id=$request->menu;
        $menu->Title=$request->Title;
        $menu->Url=$request->Url;
        $menu->save();
           if($menu){
            return redirect()->back()->with('success','Insert sub menu successfully');
        }else{
            return redirect()->back()->with('danger','Insert menu Unsuccessfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $menus=menu::all();
      $sub_menu=EcSubMenu::find($id);
            return view('BackEnd.submenu.edit',compact('menus', 'sub_menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
