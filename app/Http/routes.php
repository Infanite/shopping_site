 <?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/ 

// Route::get('/home', function () {
//     return view('front.index');
// });

Route::get('login/index',function(){
	return redirect('adminlogin/login');

});

Route::get('front/single1/{product_id}','frontController@getSingle1');

Route::get('fetch_order/{id}','frontController@Fetch_User_Orders');

Route::get('this-is-a-method','adminController@thisismycall');
//Route::get('register','userController@postSignup');
Route::get('mainpage','userController@getLogout');
Route::controller('admin','adminController');
Route::controller('category','categoryController');
Route::controller('product','productController');
Route::controller('adminlogin','loginController');
Route::controller('customer','customerController');
Route::controller('front','frontController');
Route::controller('forgotpassword','forgetPasswordController');
Route::controller('user','userController');
Route::controller('usertype','usertypeController');

Route::get('page/{id}','frontController@viewSinglePage');

//Route::get('add_user_type','userController@Usertype');
//Route::post('add_user_type','userController@Usertype');
Route::get('categories/{sub_category}/','frontController@getCategory');
//Route::get('single/{single_id}/' , 'frontController@getSingle1');
Route::get('checkout','frontController@getCheckout');
Route::get('card/{id}','frontController@getAdd_to_card');


//Route::get('products/{product_id}/{user_id}','frontController@Add_To_Cart');
//Route::get('abc/{product_id}/{user_id}','frontController@getShow_add_cart');
