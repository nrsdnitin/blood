<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\HomeSearch;
use DB;
class HomeSearchController extends Controller
{
  public function index(Request $request)
  {
    $searchResult=HomeSearch::where('blood_group', '=',  $request->blood_group)
                //->where('type', '=', 1)
                //->where('is_active', '=', 1)
                ->select('name','mobile', 'email','location_latitude','location_longitude')
                ->get();

  /*  foreach ($searchResult as $user) {
                    echo $user->name;
        }
*/


  //  dd($searchResult);
  //  $user1 = DB::table('users')->where('blood_group', $request->blood_group);
    //$valuee= HomeSearchController::all()->toArray();
  //  dd($user1);
  //  return view('search.searchResult');


  //  return view('search.searchResult', ['users' => $searchResult]);

return ( $searchResult);

  }
  public function index1(Request $request)
  {
  //  $searchResult=HomeSearch::where('blood_group', '=',  $request->blood_group)
  //            ->select('name', 'email','location_latitude','location_longitude')
  //              ->get();

 //dd($searchResult);
return 'nitin';
  }
}
