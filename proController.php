<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\http\request;
use App\ImageUpload;
 use Storage;
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
          $path =Storage::disk('public')->put('/images',$cover);
      $data=  array(
            'name' => $r->name, 'type' => $r->type,
            'price' => $r->price, 'count' => $r->count,
            'description' => $r->description ,
            'file'=>$path);
         DB::table('product')->insert($t);
///return view('RetrieveDB');


    }

    public function fileStore(Request $request)
    {
        $image = $request->file('file');
        $imageName = $image->getRealPath();
       $path= $image->move(public_path('images'),$imageName);

        $imageUpload = new ImageUpload();
       $p =$imageUpload->filename = $imageName;
        $imageUpload->save();

        return response()->json(['success'=>$imageName]);

    }
    public function index()
    {
      $data=\DB::table('product')->get();
          return view('retrieveDB',compact('data'));
    }
}




