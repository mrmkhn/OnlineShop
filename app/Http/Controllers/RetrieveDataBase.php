<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\http\request;
 use Illuminate\Support\Collection;
class RetrieveDataBase extends Controller
{
    public function index()
    {
        $product=RetrieveDataBaseModel::get()->ToArray();

        return view('RetrieveDataBase.index',compact('product'));



        //$data['data'];
    }




}
//
