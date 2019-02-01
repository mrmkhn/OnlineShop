<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
//Route::get('/', function () {
//    $name=["ali", "ahmad","akbar"];
//    return view('index')->with('name',$name);
//});
//
//route::get('/book/{id}',function($m){
//
//    return $m;
//
//}
//;)



Route::get('/login-admin',function(){
    return view('login');
});
Route::get('/add-product', function(){
    return view('add-product');});

Route::post('/add-product', 'loginController@login');

Route::get('/result', function(){
   return view('retrieveDB');});
Route::post('result', 'proController@add');



Route::post('image/upload/store','ImageUploadController@fileStore')->name('uploadDropzonePost');
Route::post('image/delete','ImageUploadController@fileDestroy');
//fileStore
Route::get('retrieved','proController@index')->name('products');
Route::get('product/{id}','proController@product')->name('product');
Route::get('product/edit/{id}','proController@Edit')->name('product.edit');
Route::get('product/delete/{id}','proController@delete')->name('productDelete');

Route::get('/sproduct', function(){
    return view('single-product');});
Route::post('product/edit/{id}','proController@update')->name('edit');
Route::get('home','proController@home');

Route::get('category/{type}','proController@category')->name('category');
Route::get('single-product/{id}','proController@single')->name('single');
Route::get('/SignIn',function(){
    return view('SignIn');
});
Route::post('/complete','proController@SignUp');
//Route::post('ResultSignUp','proController@SignUp');

Route::get('/SignUp',function(){
      return view('UserForm');});

//::get('/UserForm', function(){
  //  return view('UserForm');});



///Route::get('complete', function(){
 //   return view('complete');});
Route::post('t','loginuserController@index');


