<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
use Mail;
use App\Mail\verifyEmail;


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
//    protected $redirectTo = '/home';
    protected $redirectTo = '/admin/logotipu-dizaineriai';

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
     * @return User
     */
    protected function create(array $data)
    {
        $user = User::create(array(
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'isAdmin' => 0,
            'verifyToken' => Str::random(40),
        ));

        $thisUser = User::findOrFail($user->id);
        $this->sendEmail($thisUser);

        Mail::to('el.parduotuve.lt@gmail.com')->send(new verifyEmail($thisUser));

        return $user;
    }
    public function sendEmail($thisUser) {
        Mail::to($thisUser['email'])->send(new verifyEmail($thisUser));

    }

    public function verifyEmailFirst() {
        return view('Emails.verifyEmailFirst');
    }


    public function sendEmailDone($email, $verifyToken) {
        $user = User::where(['email'=> $email,'verifyToken'=> $verifyToken])->first();
        if ($user){
             User::where(['email'=> $email,'verifyToken'=> $verifyToken])->update(['status' => '1','verifyToken'=> NULL]);
//            return'done'; //nukreipti i norima view faila
            session()->flash('mesage', 'Jūsų registracija patvirtinta, galite prisijungti.');
            return view('auth.login');

        } else {
            //could be created a page for return
//            return 'User not found';
            session()->flash('mesageNil', 'Jeigu patvirtinote registraciją galite prisijungti.');
            return view('auth.login');
        }
    }

}
