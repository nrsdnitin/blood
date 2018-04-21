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
              //  ->leftJoin('HomePost', 'users.id', '=', 'HomePost.uid')
                ->select('name','mobile', 'email','location_latitude','location_longitude','avatar','blood_group','address_city','status')

                // ->orderBy('HomePost.created_at', 'desc')
                ->get();



//$searchResult=HomeSearch::select('name','mobile', 'email','location_latitude','location_longitude')->get();

   //dd($request->blood_group);
  //  $user1 = DB::table('users')->where('blood_group', $request->blood_group);
    //$valuee= HomeSearchController::all()->toArray();
  //  dd($user1);
  //  return view('search.searchResult');

//dd($searchResult);exit;
  //  return view('search.searchResult', ['users' => $searchResult]);

return ($searchResult);

  }
  public function getLocationByIP(Request $request)
  {
	 //  return $request->visitorIP;
  //return var_export(unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$request->visitorIP)));

  //  $searchResult=HomeSearch::where('blood_group', '=',  $request->blood_group)
  //            ->select('name', 'email','location_latitude','location_longitude')
  //              ->get();

 //dd($searchResult);
return unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$request->visitorIP));
  }

	public function getRealIpAddr(Request $request)
{

    if ($_SERVER['HTTP_CLIENT_IP'])
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if($_SERVER['HTTP_X_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if($_SERVER['HTTP_X_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if($_SERVER['HTTP_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if($_SERVER['HTTP_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if($_SERVER['REMOTE_ADDR'])
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';

    return $ipaddress;


	}
}
