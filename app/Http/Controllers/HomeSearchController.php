<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeSearchController extends Controller
{
  public function index(Request $request)
  {
<<<<<<< HEAD

=======
>>>>>>> commex
  //  dd($request->all());
    $user1 = DB::table('users')->where('blood_group', $request->blood_group)->first();
    //$valuee= HomeSearchController::all()->toArray();
    dd($user1);
<<<<<<< HEAD
    return view('home');
=======
    return view('search.searchResult');
>>>>>>> commex
  }
}
