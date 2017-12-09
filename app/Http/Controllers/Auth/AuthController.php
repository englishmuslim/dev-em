<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
     * Where to redirect users after login / registration.
     *
     * @var string
     */
     protected $loginView = 'auth.login';

     protected $registerView = 'auth.register';
     protected $redirectTo = 'home';


    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
        $this->middleware('user-should-verified');
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
          'first_name' => 'required|max:255',
          'last_name' => 'required|max:255',
          'email' => 'required|email|max:255|unique:users',
          'password' => 'required|min:6|confirmed',
          'password_confirmation' => 'required',
          'mobile' => 'required|numeric',
          'birth_date' => 'required',
          'country' => 'required',
          'gender' => 'required',
          'occupation' => 'required',
          'education' => 'required',
          'g-recaptcha-response' => 'required|captcha',
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
      $user = User::create([
          'first_name' => $data['first_name'],
          'last_name' => $data['last_name'],
          'email' => $data['email'],
          'password' => bcrypt($data['password']),
          'mobile' => $data['mobile'],
          'gender' => $data['gender'],
          'birth_date' => $data['birth_date'],
          'country' => $data['country'],
          'status' => $data['status'],
          'occupation' => $data['occupation'],
          'education' => $data['education'],
      ]);
      $user->sendVerification();
      return $user;
    }

    public function verify(Request $request, $token){
      $email = $request->get('email');
      $user = User::where('verification_token', $token)->where('email', $email)->first();
      if($user){
        $user->verify();
        Session::flash("flash_notification",[
          "level"=>"success",
          "message"=>"Alhamdulillah, akun Anda sudah aktif. Anda bisa mulai belajar hari ini"
        ]);
        // Auth::login($user);
      }
      return redirect('/activation');
    }

    public function sendVerification(Request $request){
      $user = User::where('email', $request->get('email'))->first();
      if($user && !$user->is_verified){
        $user->sendVerification();
        Session::flash("flash_notification", [
          "level"=>"success",
          "message"=>"Silahkan klik pada link aktivasi yang telah kami kirim."
        ]);
      }
      return redirect('/login');
    }
}
