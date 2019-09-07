<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//FrontEnd


route::get('/','Frontendcontroller@home');



//backend
route::get('/dashboard','Backendcontroller@dashboard');

//menus
route::get('menu/Create','Backendcontroller@Create');
route::post('menu/store','Backendcontroller@store');
route::get('menu/manages','Backendcontroller@manages');
route::get('menu/edit/{id}','Backendcontroller@edit');
route::post('menu/update','Backendcontroller@update');
route::get('menu/delete/{id}','Backendcontroller@delete');



//submenu
route::resource('/Sub-menu','SubMenucontroller');




 
