<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class loginusercontroller extends Controller

{
    public function index(  Request $r)
    {

        $email = $r->input('email');
        $password = $r->input('password');
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect(route('products'));
        }
        else{
    echo "bbbb";
}


      }

}





