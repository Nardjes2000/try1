<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class usercontroller extends Controller
{
    public function list()
    {

  
	$data=Client::all();
    return view('welcome')->with('data',$data);

    }
    public function store(Request $request)

    {

  request()->validate([

'name'=>'required'

  ]);

    $nom=$request->input('name');
    $age=$request->input('age');
    $Client=new Client();
$Client->name=$nom;
$Client->age=$age;
$Client->save();
return back();}
}
