<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use App\Http\Requests;
use Auth;
use Validator;
use App\User;
use Hash;
//use App\Usertype_models;
use Illuminate\View\Middleware\ShareErrorsFromSession;  //middleware use garxa validate garna ko lagi
use Carbon\Carbon;  //date lina lai
use Illuminate\Notifications\Notifiable;
use DB;
class loginController extends Controller
{   
    
    public function getSignup(){
        //return view('admin.adminsignup');
        //$obj=DB::select("select * from usertype_models");
        //dump($obj);
        return view('admin.adminsignup');
    }

    public function postSignup(Request $request){

        $obj=new user;
        //validation start
        $validation= Validator::make($request->all(),[
            'name'=>'required|Min:3|Max:80',
            'username'=>'required|unique:users,username',
            'email'=>'required|Email',
            'password'=>'required|Min:6|Same:confirmpassword',
            'confirmpassword'=>'required|Min:6|Same:password',
            'image'=>'required|Image',
            
            'phone'=>'required|numeric|min:10'



            ]);

         if($validation->fails()){
           return view('admin.adminsignup')->with('errors',$validation->errors());
        }

        


        $obj->user_type=$request->get('user_type');
        $obj->name=$request->get('name');  //yeta paxadi ko varibale uta form ko name =lekheko thau ko ho
        $obj->username=$request->get('username');
        $obj->password=Hash::make($request->get('password'));
        $obj->password=Hash::make($request->get('confirmpassword'));
        $obj->email=$request->get('email');
        $obj->phone=$request->get('phone');
        $file= $request->file('image');
         $filename= $file->getClientOriginalName();
        $location="lib/adminimages/";
       
        $file->move($location,$filename);
        $image=$location.$filename;
        $obj->photo= $image;
        $result= $obj->save();
        if($result){
            //echo "succesful";
            return redirect('adminlogin/login');
        }
        else {
            echo "failed";
        }
    }


    public function getLogin()
    {
        //echo "i m master";
		return view('admin.login');
    } 

     public function postLogin(Request $request)

    {

    	$username = $request->get('username');
    	$password = $request->get('password');
        //$is_admin = DB::table('users')->where('user_type','=',1);
        //$is_admin = DB::select("select * from users where user_type='1'");
        //dump($is_admin);
    	if(Auth::attempt(['username'=>$username,'password'=>$password,'user_type'=>1]))
    		{
                //Auth::user()->last_login=date('Y-m-d H-i-s');   //last login time nikalne ho
                //Auth::user()->save();  //yesle chai save garx
    			return redirect('admin/master');//,['admin'=>$is_admin]);     
    		}
    	else 
    		{
                //echo "login fail vayo";
    			return redirect('adminlogin/login');
    		}
    }

    public function getLogout()
    {
    	Auth::logout();
    	return redirect('adminlogin/login');
    }
}
