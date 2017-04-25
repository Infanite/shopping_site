<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use DB;
use App\Http\Requests;
use App\product_models;
use Hash;
use App\User;
use Auth;
use Validator;


class userController extends Controller
{

    public function __construct(){
         //echo 1;
        $data  = DB::table('category_models')->get();
         view()->share('menu', $data);
      
    }


    public function getRegister()
    {
    	return view('front.register_user');
    }

    public function postRegister(Request $request)
    {
    	$user = new user;

        //validation start
        $validation= Validator::make($request->all(),[
            'name'=>'required|Min:3|Max:80',
            'username'=>'required|unique:users,username',
            'email'=>'required|Email',
            'password'=>'required|Min:6|Same:confirmpassword',
            'confirmpassword'=>'required|Min:6|Same:password',

            ]);

         if($validation->fails()){
           return view('front.register_user')->with('errors',$validation->errors());
        }


        $user->user_type=$request->get('user_type');
    	$user->name=$request->get('name');
        $user->username=$request->get('username');
    	$user->email=$request->get('email');
    	$user->password=Hash::make($request->get('password'));
    	$user->password=Hash::make($request->get('confirmpassword'));
    	$result= $user->save();
        //dump($result);
    	if($result)
    	{
    		return redirect('user/login');
    	}
    	else
    	{
    		echo "fail vayo";
    	}
    }


    public function getLogin()
    {
    	return view('front/login_user');
    }


    public function postLogin(Request $request)
    {
       
         //validation start


        $validation= Validator::make($request->all(),[
            'email'=>'required|Email',
            'password'=>'required',
            
               ]);


         if($validation->fails()){
           return redirect('user/login')->with('errors',$validation->errors());
        }



        $email = $request->get('email');
        $password = $request->get('password');
        if(Auth::attempt(['email'=>$email,'password'=>$password,'user_type'=>0]))
        {
            return view('front/index');
            //echo "hello";
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return view('front/index');
    }

}
