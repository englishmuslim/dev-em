<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'first_name', 'last_name', 'email', 'password', 'mobile', 'gender', 'birth_date', 'country', 'status', 'occupation','education',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'password', 'remember_token',
  ];
}
