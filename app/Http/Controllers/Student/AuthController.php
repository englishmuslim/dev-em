<?php

namespace App\Http\Controllers\Student;

use App\Student;
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
   * Where to redirect users after login / registration.
   *
   * @var string
   */

   protected $guard = 'student';
   protected $loginView = 'dashboard.student.auth.login';

   protected $registerView = 'dashboard.student.auth.register';
   protected $redirectTo = 'student/dashboard';


  /**
   * Create a new authentication controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
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
      return Student::create([
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
  }
}
