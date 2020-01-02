<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getindex()
    {
      return view('index');
    }
    public function getconnect()
    {
      return view('connect');
    }
}
