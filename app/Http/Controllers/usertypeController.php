<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class usertypeController extends Controller
{
     public function getUsertype()
    {
        return view('admin/add_user_type');
    }

    public function postUsertype(Request $request)
    {
        $form =  new usertype_models();
        $form->user_type = $request->get('usertype');
        $result = $form->save();
        if($result)
        {
            echo "add vayo";
        }
    }
}
