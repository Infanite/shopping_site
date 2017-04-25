<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Http\Requests;
use Validator;

class forgetPasswordController extends Controller
{
    public function getForgotpassword()
    {
    	return view('admin.forgotpassword');
    }

    public function postForgotpassword(Request $request)
    {
    	$email=$request->get('email');
    	$token=mt_rand(1000,9999);
    	$data= DB::table('users')
    			->where('email','=',$email)
    			->first();
    	if(count($data)>0)
    	{
    		DB::select("UPDATE users SET reset_token='$token' WHERE email='$email'");
    		$msg="Rest code has been sent to your e-mail address";
    		echo $msg;
    		mail($email,"Password Rest","Please enter given code to reset your password",$msg);
    		return view('admin.password_reset');
    	}
    }

    public function postCode(Request $request)
    {
    	$token=$request->get('reset_token');
    	$check= DB::table('users')
    				->where('reset_token','=',$token)
    				->first();
    	//$email=$check->email;
    	if(count($check)>0)
    	{
    		return view('admin.password_reset_form',array('result'=>$check));
    	}
    	else
    	{
    		$msg="Please enter the valid varification code";
    		echo $msg;
    	}

    }

    public function postNewpassword(Request $request)
    {
    	$email=$request->get('email');
    	$check=DB::table('users')->where('email','=',$email)->first();
    	$validation=Validator::make($request->all(),[
    		'password'=>'required|Min:6|same:confirm_password',
    		'confirm_password'=>'required|Min:6|same:password'

    		]);
    	if($validation->fails()){
    		return view('admin.password_reset_form',array('result'=>$check))->with('errors',$validation->errors());
    	}


    	//$email=$request->get('email');
    	$password=Hash::make($request->get('password'));
    	$confirm_password=Hash::make($request->get('confirm_password'));
    	DB::select("UPDATE users SET password='$password' WHERE email='$email'");
        DB::select("UPDATE users SET reset_token=NULL where email='$email'");
    	return redirect('adminlogin/login');
    }
}
