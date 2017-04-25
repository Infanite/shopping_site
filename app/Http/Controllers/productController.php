<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product_models;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use DB;
use App\category_models;

class productController extends Controller
{
   public function getShowproduct()
    {
    	$obj=DB::table('product_models')->join('category_models','product_models.category','=','category_models.id')->select('product_models.*','category_models.categoryName')->get();
    	return view('admin.showproduct',array('result'=>$obj));
    }


     public function postShowproduct(Request $request)
   {
      $obj= new product_models;
      $obj->name= $request->get('name');
      $obj->category= $request->get('category');
      $obj->gender= $request->get('gender');
      $obj->price= $request->get('price');

      
      $colors= $request->get('color');
      $obj->color = json_encode($colors);


      $sizes= $request->get('size');
      $obj->size = json_encode($sizes);


      $obj->description= $request->get('description');
      
      

      $files = $request->file('image');
      $image_array = [];
      foreach ($files as  $file) {
        $filename = $file->getClientOriginalName();
        $location = "lib/img/";
        $file->move($location,$filename);
        $image = $location.$filename;
        $image_array[] = $image;
      }
      $obj->image = json_encode($image_array);
      $result=$obj->save();
      if($result)
      {
         return redirect('product/showproduct');
      }
      else
      {
         echo "fail vayo";
      }
  }

    public function getAddproducts()
    {
    	//echo "hello";
    	$obj=DB::select("select * from category_models where status='1'");
      return view('admin.add_products',array('result'=>$obj));
    }


     public function getDelete($id)
   {
      $obj = product_models::find($id);
      $obj->delete();
      return redirect('product/showproduct'); 
   }

   public function getEdit($id)
   {
      $obj=DB::table('product_models')->join('category_models','product_models.category','=','category_models.id')->select('product_models.*','category_models.categoryName')->where('product_models.id','=',$id)->get();
      //dd($obj);
   $cat = category_models::all();
      return view('admin.edit_product',array('result2'=>$obj,'result1'=>$cat));       
   }

   public function postEdit($id,Request $request)
      {
         $obj= product_models::find($id);
         $obj->name=Input::get('name');
         $obj->category=Input::get('category');
         $obj->gender=Input::get('gender');
         $obj->price=Input::get('price');
         $obj->description=Input::get('description');
         $file=$request->file('image');
         //dd($file);
         $filename= $file->getClientOriginalName();
         $location = "lib/img/";
         $file->move($location,$filename);
         $image = $location.$filename;
         $obj->image = $image;
         $obj->save();
         if($obj)
      {
         return redirect('product/showproduct');
      }
      else
      {
         echo "fail vayo";
      }

   }
}

