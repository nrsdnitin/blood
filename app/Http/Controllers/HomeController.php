<?php

namespace App\Http\Controllers;
use App\User;
use File;
use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\UploadedFile;


use App\Http\Requests;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
	
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            //'password' => 'required|string|min:6|confirmed',
        ]);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
	public function HomePost(Request $request,$id)
    {
	
		//echo ('hi');exit;
	 	dd($request->all());
	$image=$request->file('imgInp');	
	$input['imgInp'] = $id.time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images/avatar/post/');
    $image->move($destinationPath, $input['imgInp']);	
		
	}
	
	
	
	
    public function updateProfile(Request $request,$id)
    {
		$profile_validator = $this->validator($request->all());
		if ($profile_validator->fails()) {
          // return back()->withErrors($profile_validator)->withInput();
        }
		
		 
		//var_dump($image);
		//echo $image = $request->imgInp;
		//echo 'File Name: '.$image->getClientOriginalName();
      //echo '<br>';
   
		//echo $path = $image->getClientMimeType();
		//echo $request->imgInp->extension();

    

   // $this->postImage->add($input);
   // return back()->with('success','Image Upload successful');
		
  $data = Input::only('id', 'name','email','blood_group','mobile','gender','address_street','address_street2','address_pincode','address_state','address_city','address_country','location_latitude','location_longitude');
		
	$image=$request->file('imgInp');	
	$input['imgInp'] = $data['id'].time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/images/avatar/');
    $image->move($destinationPath, $input['imgInp']);
		
		
		
		//print_r($data);exit;
		$user = User::find($id);
	//	print_r($user);
		$user->name = $data['name'];
           $user->email = $data['email'];
            //$user->password= bcrypt($data['password']);
            $user->blood_group = $data['blood_group'];
            $user->mobile = $data['mobile'];
            $user->gender = $data['gender'];
            $user->address_street = $data['address_street'];
		    $user->address_street2 = $data['address_street2'];
            $user->address_pincode = $data['address_pincode'];
            $user->address_state= $data['address_state'];
            $user->address_city = $data['address_city'];
		    $user->address_country = $data['address_country'];
            $user->location_latitude = $data['location_latitude'];
            $user->location_longitude = $data['location_longitude'];
		    $user->avatar= $input['imgInp'];
            $user->save(); 
		
		return redirect('home/');
		
    }
    public function upload()
    {
        if (Input::hasFile('file')) {
            $currentUser = \Auth::user();
            $avatar = Input::file('file');
            $filename = 'avatar.'.$avatar->getClientOriginalExtension();
            $save_path = storage_path().'/users/id/'.$currentUser->id.'/uploads/images/avatar/';
            $path = $save_path.$filename;
            $public_path = '/images/profile/'.$currentUser->id.'/avatar/'.$filename;
            // Make the user a folder and set permissions
            File::makeDirectory($save_path, $mode = 0755, true, true);
            // Save the file to the server
            Image::make($avatar)->resize(300, 300)->save($save_path.$filename);
            // Save the public image path
            $currentUser->profile->avatar = $public_path;
            $currentUser->profile->save();
            return response()->json(['path' => $path], 200);
        } else {
            return response()->json(false, 200);
        }
    }

public function editProfile()
{
	
	 return view('editProfile');
}

}


