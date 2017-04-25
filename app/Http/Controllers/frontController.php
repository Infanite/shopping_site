<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\product_models;
use App\category_models;
use App\users_order;
use Auth;

class frontController extends Controller
{

    public function __construct(){
         //echo 1;
        $data  = DB::table('category_models')->get();
         view()->share('menu', $data);
      
    }

    public function getIndex()
    {
              
    	return view('front.index');
    }

     public function getMenproducts()
    {
    	$data1=DB::select("select * from product_models where gender='male' OR gender='unisex'");
        $data2=DB::select("select * from product_models where gender='female'");
    	//$img=DB::select("select image from product_models where LIMIT 1");
    	//$data2=DB::select("select * from product_models where gender='unisex'");
    //	dump($data1);
    	return view('front/men_products',array('result'=>$data1,'result1'=>$data2));
    }

    public function getWomenproducts()
    {
    	$data2=DB::select("select * from product_models where gender='female' OR gender='unisex'");
    	return view('front/women_products',array('result'=>$data2));
    }


    public function viewSinglePage($id){
        $data1 = DB::table('product_models')->where('id','=',$id)->first();
        //dd($data1);
        return view('front.page',['categories'=>$data1]);
    }

    public function getCategory($id)
    {
        $data2 = DB::select("select * from product_models where category=$id");
        //dump($data);
        return view('front/products',['men_products'=>$data2]);

    }

    public function getSingle1($id)

    {
  //      $user_id = Auth::user()->id;
        //dd($user_id);
        $obj=DB::table('product_models')->where('id','=',$id)->get();

        $data4 = DB::table('product_models')->take(3)->get();

        $obj2 = DB::table('product_models')->where('id','=',$id)->first();
        $obj1 = DB::table('users')->where('id','=',$id)->first();

        
        //dump($data4);
        //dump($obj);
        //$data=DB::select("select * from product_models");
        return view('front/single',array('single_data'=>$obj,'bottom_products'=>$data4,'product_id'=>$obj2,'user_id'=>$obj1));
    }


    public function Fetch_User_Orders($id,Request $request)
    {

       //dump(Auth::user()->id);
        //exit();
        $obj= new users_order;

       

        $obj1=DB::table('users_orders')->where('product_id','=',$id)->where('user_id','=',Auth::User()->id)->first();
        // dd($obj1);

        if($obj1 != null) {
           // echo "Increment";
             $obj->increment('added_cart_products',1); 

        }
        else {
            $obj->product_id=$id;
            //dd($obj);
            $obj->user_id=Auth::User()->id;
            //insert garne 
            $result= $obj->save();
         }
       // exit();
       //     DB::table('users_orders')->where('id','=',$id)->increment('added_cart_products',1); 
        
        //dd($obj1);
        //$obj->product_id=$id;
        //$obj->user_id=Auth::User()->id;
        //$added_cart_products = 
        //$obj->added_cart_product=$added_cart_products;


        //$obj->product_id = DB::table('product_models')->where('id','=',$id);
        //$obj->user_id = Auth::user()->id;
        //$obj->added_cart_products = DB::table('users_orders')->where('id','=',$user_id)->increment('added_cart_products',1);
        //DB::table('users_orders')->where('id','=',$id)->increment('added_cart_products',1);
        //if($result)
        //{
            return redirect('front/menproducts'); //,['product_id'=>$obj1]);
        //}

    }



    public function getCheckout()
    {
        $data =DB::select("select * from users_orders JOIN product_models ON users_orders.product_id=product_models.id "); 
        
        $user_order = DB::table('users_orders')->join('product_models','users_orders.product_id','=','product_models.id')->where('user_id','=',Auth::User()->id);

        //$obj = DB::table('product_models')->join('users_orders','product_models.id','=','users_orders.product_id')->where('user_id','=',Auth::user()->id);
        
        $count= DB::table('users_orders')->where('user_id','=',Auth::User()->id)->count('product_id');
        //dd($count);
        return view('front.checkout',array('d'=>$data,'c'=>$count,'order'=>$user_order));
    }
    //public function getAdd_to_card($id)
    //{

      //  $obj = DB::table('product_models')->where('id','=',$id)->first();
       // $obj1 = DB::table('users')->where('id','=',$id)->first();
        //return view('front/single',['product_id'=>$obj,'user_id'=>$obj1]);
   //}

  // public function Add_To_Cart($id)
   //{
     //   $obj2 = DB::table('product_models')->where('id','=',$id)->first();
       // $obj1 = DB::table('users')->where('id','=',$id)->first();
        //return view('front/show_cart',['product_id'=>$obj2,'user_id'=>$obj1]);
   //}


    
}
