<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;

class Backendcontroller extends Controller
{
    public function dashboard(){
    	return view('BackEnd.main');
    }
   public function Create(){
    	return view('BackEnd.menu.Create');
  }
  public function store(Request $request){
  	$request->validate([
  		'Title' => 'required',
  		'Url' => 'required'
  	]);
  	$menu = new menu();
  	$menu->Title = $request->Title;
  	$menu->Url = $request->Url;
  	$result = $menu->save();

  	if($result){
  		return redirect('menu/manages')->with('message-success','menu has been create successfully');
  	}else{
  		return redirect()->back()->with('message-danger','menu create successfully pls try agin');
  	}
  }
  public function manages(){
  	$manus = menu::all();

  	return view('BackEnd.menu.manages', compact('manus'));
  }
  public function edit($id){
  	$manu = menu::find($id);

  	return view('BackEnd.menu.edit', compact('manu'));
  } 
  public function update(Request $request){
  	$request->validate([
  		'Title' => 'required',
  		'Url' => 'required'
  	]);
  	$menu = menu::find($request->id);
  	$menu->Title = $request->Title;
  	$menu->Url = $request->Url;
  	$result = $menu->save();

  	if($result){
  		return redirect('menu/manages')->with('message-success','menu has been Update successfully');
  	}else{
  		return redirect()->back()->with('message-danger','menu create successfully pls try agin');
  	}
  }
  public function delete($id){
  	
  	$result = menu::destroy($id);
  
  	if($result){
  		return redirect('menu/manages')->with('message-success','menu has been delete successfully');
  	}else{
  		return redirect()->back()->with('message-danger','menu create successfully pls try agin');
  	}
  }
}