<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Mail;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
          'first_name', 'last_name', 'email', 'password', 'mobile', 'gender', 'birth_date', 'country', 'status', 'occupation','education',
    ];

    protected $casts = [
      'is_verified' => 'boolean',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function generateVerificationToken(){
      $token = $this->verification_token;
      if(!$token){
        $token = str_random(40);
        $this->verification_token = $token;
        $this->save();
      }
      return $token;
    }

    public function sendVerification(){
      $token = $this->generateVerificationToken();
      $user = $this;
      Mail::send('auth.emails.verification', compact('user', 'token'), function($m) use ($user){
        $m->to($user->email, $user->first_name)->subject('Verifikasi Akun English Muslim');
      });
    }

    public function verify(){
      $this->is_verified = 1;
      $this->verification_token = null;
      $this->save();
    }
}
