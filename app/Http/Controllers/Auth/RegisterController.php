<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }
 
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
  //dd($data);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'blood_group' => $data['blood_group'],
            'mobile' => $data['mobile'],
            'gender' => $data['gender'],
<<<<<<< HEAD
            //'mobile' => $data['mobile'],
           // 'mobile' => $data['mobile'],
=======
            'address_street' => $data['address_street'],
            'address_pincode' => $data['address_pincode'],
            'address_state' => $data['address_state'],
            'address_city' => $data['address_city'],
            'location_latitude' => $data['location_latitude'],
            'location_longitude' => $data['location_longitude'],
           // 'mobile' => $data['address_pincode'],
           // 'mobile' => $data['address_pincode'],
>>>>>>> commex

        ]);

        //return View::make('your view', compact('items',$items));
    }
}
