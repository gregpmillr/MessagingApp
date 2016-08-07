<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Social_Profile;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
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
            'businessName' => 'required',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'fname' => 'required',
            'lname' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        //create user
        //create social profile associated with user

        $user = new User();
        $user->businessName = $data['businessName'];
        $user->preferredFName = $data['fname'];
        $user->preferredLName = $data['lname'];
        $user->phoneNumber = $data['phone'] ;
        $user->address = $data['address'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->save();

        $socialProfile = new Social_Profile();
        $socialProfile->user_id = $user->id;
        $socialProfile->twitter = $data['twitter'];
        $socialProfile->facebook = $data['facebook'];
        $socialProfile->googleplus = $data['gplus'];
        $socialProfile->save();

        return $user;
    }
}
