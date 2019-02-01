<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\http\request;


class loginController extends BaseController
{

 public function login(request $req)
 {

     $username=$req->input('username');
     $password=$req->input('password');
    $u="admin";
    $p="1234";
    if($username==$u & $password==$p){
        return view('add-product');
    }
     else{


         return view('login');
     }
 }



}



