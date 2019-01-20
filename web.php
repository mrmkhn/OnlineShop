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


Route::get('/home',function(){
    return view('mainpage');
});
Route::get('/login-admin',function(){
    return view('login');
});
Route::get('/add-product', function(){
    return view('add-product');});

Route::post('/add-product', 'loginController@login');

Route::get('/result', function(){
   return view('retrieveDB');});
Route::post('result', 'proController@add');



Route::get('result','ImageUploadController@fileCreate');
Route::post('image/upload/store','proController@add')->name('uploadDropzonePost');
//Route::post('image/upload/store','ImageUploadController@fileStore')->name('uploadDropzonePost');
//Route::post('image/delete','ImageUploadController@fileDestroy');
//fileStore
Route::get('/result','proController@index');
