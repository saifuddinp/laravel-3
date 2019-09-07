<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\submenu;
use App\product;
class productcontroller extends Controller
{
    public function createproduct(){
    	$submenus=submenu::all();
    	return view('BackEnd.product.create',compact('submenus'));
    }
    public function storeproduct(Request $request){
                $request->validate([
                    'product_id'=>'required',
                    'producttitle'=>'required',
                    'productprice'=>'required',
                    'producttitle'=>'required',
                    'productphoto'=>'required',
                    'productram'=>'required',
                    'productcamera'=>'required'
                ]);
    			$photo=$request->file('productphoto');
    			$photo_name='product-'.time().'.'.$photo->getClientOriginalExtension();
    			$photo_path=public_path('BackEnd/product');
    			$photo->move($photo_path,$photo_name);

    			$photoname='public/BackEnd/product/'.$photo_name;
    		$product=new product();
    		$product->product_id=$request->product_id;
    		$product->producttitle=$request->producttitle;
    		$product->productprice=$request->productprice;
    		$product->productphoto=$photoname;
    		$product->productram=$request->productram;
    		$product->productcamera=$request->productcamera;
    		$product->save();
    		if($product){
                return redirect('/manage-product')->with('success','insert Product Successfully');
    		}else{
                return redirect()->back()->with('danger','insert Product Successfully');
            }
    }

    //manage product
    public function manageproduct(){
    	$products=product::all();
    	return view('BackEnd.product.manage',compact('products'));
    }
    //edit
    public function editproduct($id){
            $submenus=submenu::all();
            $edit=product::find($id);
            return view('BackEnd.product.edit',compact('edit','submenus'));
    }

    //update
    public function udateproduct(Request $request){

            $request->validate([
                    'product_id'=>'required',
                    'producttitle'=>'required',
                    'productprice'=>'required',
                    'producttitle'=>'required',
                    'productphoto'=>'required',
                    'productram'=>'required',
                    'productcamera'=>'required'
                ]);

            $photo_name="";
            if($request->file('productphoto') !=""){

                $fphoto=product::find($request->id);
                unlink($fphoto->productphoto);
                $photo=$request->file('productphoto');
                $photo_name='product-'.time().'.'.$photo->getClientOriginalExtension();
                $photo_path=public_path('BackEnd/product');
                $photo->move($photo_path,$photo_name);

                $photoname='public/BackEnd/product/'.$photo_name;
            }

            $product=product::find($request->id);
            $product->product_id=$request->product_id;
            $product->producttitle=$request->producttitle;
            $product->productprice=$request->productprice;
            if($photo_name !=""){
            $product->productphoto=$photoname;
            }
            $product->productram=$request->productram;
            $product->productcamera=$request->productcamera;
            $product->save();
            if($product){
                return redirect('/manage-product')->with('success','Update Product Successfully');
            }else{
                return redirect()->back()->with('danger','Update Unsuccessfully');
            }

    }

    public function deleteproduct($id){
           $delete=product::find($id);
            unlink($delete->productphoto);
            $result=$delete->delete();
            if($result){
                return redirect('/manage-product')->with('success','Delete product successfully');
            }else{
                return redirect()->back()->with('danger','delete product Unsuccessfully');
            }
    }
    
}
