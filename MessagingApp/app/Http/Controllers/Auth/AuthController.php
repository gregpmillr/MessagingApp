<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Social_Profile;
use Symfony\Component\EventDispatcher\Tests\Service;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Services_Twilio;

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

public function message()
{
    $sid = "AC84452b0842ec4a4ccac82994298db5c9";
    $token = "1c7b15119a35a2a1a7e74d2ba743ce37";

    $client = new Services_Twilio($sid,$token);
    $message = $client->account->messages->sendMessage(
        '2044001758', // From a valid Twilio number
        '9022105887', // Text this number
        "Hello monkey!"
    );

    print $message->sid;
}


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
        $this->message();
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
