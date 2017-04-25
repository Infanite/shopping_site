<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\admin_models;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class adminController extends Controller
{
	 public function __construct(){   //yesle chahi session destroy garne kam garxa yesbata hami janu parxa authenticate.php ma jane

    
	 $this->middleware('auth');
	}


    public function getMaster()
    {
    	//echo "hello";
    	return view('admin.master');
    }

   
  
    public function getShowadmin(){
    	$obj=DB::select("select * from users");
    	return view('admin.showadmin',array('result' => $obj));
    }

    //public function thisismycall(){
    	//return "this is my function call";

     public function getEnable($id){

      $cat = admin_models::find($id);
      $cat->status=1;
      $cat->save();
      return redirect('admin/adminlogin');

   }   
    public function getDisable($id){

      $cat = admin_models::find($id);
      $cat->status=0;
      $cat->save();
      return redirect('admin/adminlogin');

   }   
}
