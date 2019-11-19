<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Client;

class usercontroller extends Controller
{
    public function list()
    {

  
	$data=Client::all();
    return view('welcome')->with('data',$data);

    }
    public function store1(Request $request)

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
public function store(Request $request)
    {//get current time and append the upload file extension to it,
  //then put that name to $photoName variable.
  $photoName = time().'.'.$request->user_photo->getClientOriginalExtension();

  /*
  talk the select file and move it public directory and make avatars
  folder if doesn't exsit then give it that unique name.
  */
  $request->user_photo->move(public_path('avatars'), $photoName);}
}
