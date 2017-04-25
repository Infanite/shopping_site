<?php

namespace App\Http\Controllers;
use App\category_models;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class categoryController extends Controller
{
    public function getShowcategory()
    {
    	$obj=category_models::all();
    	return view('admin.show_category',array('result'=>$obj));
    }

    
    public function getAddcategory()
    {
    	//echo "hello";
    	return view('admin.add_category');
    }

    public function postAddcategory(Request $request)
   	{
   		$form = new category_models();
   		$form->categoryName = $request->get('category');
   		$result=$form->save();
   		if($result)
   		{
   			//echo "insert vayo";
   			return redirect('category/showcategory');
   		}
   		else
   		{
   			echo "insert vayena";
   		}
   	}

   	public function getDelete($id)
   	{
   	 	$obj = category_models::find($id);
   	 	$obj->delete();
   	 	//echo "hello";
   	 	return redirect('category/showcategory');
   	} 	

   	public function getEdit($id)
   	{
   		$obj = category_models::find($id);
   		//dd($obj);
   		return view('admin.edit_category',array('result'=>$obj));
   	}

   	public function postEdit($id)
   	{
   		$obj= category_models::find($id);
   		$obj->categoryName=Input::get('category');
      $obj->status=Input::get('status');
   		$obj->save();
   		return redirect('category/showcategory');
   	}

   public function getEnable($id){

      $cat = category_models::find($id);
      $cat->status=1;
      $cat->save();
      return redirect('category/showcategory');

   }   
    public function getDisable($id){

      $cat = category_models::find($id);
      $cat->status=0;
      $cat->save();
      return redirect('category/showcategory');

   }   
}

