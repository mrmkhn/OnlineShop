<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\http\request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;


use App\ImageUpload;
 use Storage;
 use validate;
use DB;

class proController extends BaseController
{



    public function add(request $r)
    {

        $name = $r->input('name');
        $type = $r->input('type');
        $price = $r->input('price');
        $count = $r->input('count');
        $description = $r->input('description');
        $cover = $r->file('file');
        $path = Storage::disk('public')->put('/images', $cover);
        $t = array(
            'name' => $r->name, 'type' => $r->type,
            'price' => $r->price, 'count' => $r->count,
            'description' => $r->description,
            'file' => $path);
        DB::table('product')->insert($t);
        return view('result');


    }


    public function index()
    {

        $t = \DB::table('product')->get();
        return view('retrieveDB', compact('t'));
    }

    public function home()
    {

        $t = \DB::table('product')->get();
        return view('home', compact('t'));
    }

    public function product($id)
    {
        $product = DB::table('product')->where('id', $id)->first();
        return view('single-product', [
            'product' => $product,
        ]);
    }

    public function delete($id)
    {
        $product = DB::table('product')->where('id', $id)->delete();
//        $product->delete();
        return redirect()->route('products');
    }

    public function Edit($id)
    {
        $product = DB::table('product')->where('id', $id)->first();
        return view('Edit', [
            'product' => $product,
        ]);
    }

    public function update(Request $request, $id)
    {
        $cover = $request->file('file');
        $path = Storage::disk('public')->put('/images', $cover);
        $product = DB::table('product')->where('id', $request->id)->update([

            'name' => $request->name,
            'price' => $request->price,
            'type' => $request->type,
            'description' => $request->description,
            'count' => $request->count,
            'file' => $path
        ]);
        return redirect()->route('products');
    }

    public function category($type)
    {
//
        $arr_type = explode(',', $type);
//
        $t = DB::table('product')
            ->whereIn('type', $arr_type)->get();
        return view('category', compact('t'));
    }




    public function single($id)
    {
        $product = DB::table('product')->where('id', $id)->first();
        return view('SingleUser', [
            'product' => $product,
        ]);
    }


    public function SignUp(request $r)
    {

        $name=$r->input('name');
        $family=$r->input('family');
        $borndate=$r->input('borndate');
        $email=$r->input('email');
        $mobile=$r->input('mobile');
        $nationalcode=$r->input('nationalcode');
        $address=$r->input('address');
        $password=$r->input('password');


        $user=array(
            'name'=>$r->name,
            'family'=>$r->family,
            'borndate'=>$r->borndate,
            'email'=>$r->email,
            'mobile'=>$r->mobile,
            'nationalcode'=>$r->nationalcode,
            'address'=>$r->address,
           // 'password' => bcrypt($r['password']),
            'password'=>$r->password,

        );
        DB::table('users')->insert($user);

        return view('complete');
    }


}