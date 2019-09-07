<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;
class menucontroller extends Controller
{
    public function createmenu(){
    	return view('BackEnd.menu.create');
    }
    public function storemenu(Request $request){
    	$request->validate([
    		'title'=>'required',
    		'url'=>'required'
    	]);
    	$menu=new menu();
    	$menu->title=$request->title;
    	$menu->url=$request->url;
    	$menu->save();
    	   if($menu){
            return redirect('/managemenu')->with('success','Insert menu successfully');
        }else{
            return redirect()->back()->with('danger','Insert menu Unsuccessfully');
        }
    }
    //view
    public function managemenu(){
    	$menus=menu::all();
    	return view('BackEnd.menu.manage',compact('menus'));
    }
    //edit open page
    public function editmenu($id){
    		$edit=menu::find($id);
    		return view('BackEnd.menu.edit',compact('edit'));
    }
    //update menu
    public function updatemenu(Request $request){
    		$update=menu::find($request->id);
    		$update->title=$request->title;
    		$update->url=$request->url;
    		$update->save();
    		if($update){
            return redirect('/managemenu')->with('success','update menu successfully');
        }else{
            return redirect()->back()->with('danger','Upadate menu Unsuccessfully');
        }
    }

    //delete menu

    public function deletemenu($id){
    	$delete=menu::destroy($id);
    	if($delete){
    		return redirect('/managemenu')->with('success','Deleted menu successfully');
    	}else{
            return redirect()->back()->with('danger','Deleted menu Unsuccessfully');
        }
    }
}
