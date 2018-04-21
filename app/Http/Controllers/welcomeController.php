<?php

namespace App\Http\Controllers;
use App\User;
use File;
use Image;
use Hash;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;


use App\Http\Requests;
use App\Http\Controllers\Controller;


class welcomeController extends Controller
{




  public function index()
  {
    //$HomePost = DB::table('HomePost')->where('uid', $currentUser = \Auth::user()->id)->orderBy('created_at', 'desc')->get();
    //return view('welcome', ['HomePost' => $HomePost]);
    return view('welcome');
  }

}

?>
