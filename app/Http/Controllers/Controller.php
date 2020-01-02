<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
  use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

   /* public function store(Request $request)
    {

		move_uploaded_file($request->file('image'), 'C:/Users/user/laravel5/storage/app/public/uploads');
		return response()->json(public_path('uploads/'));

    }*/

public function store(Request $request){
    
}
}
