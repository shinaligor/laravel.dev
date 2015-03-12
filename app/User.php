<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Facades\Hash;
use Auth;



class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{

	use Authenticatable, CanResetPassword;
	protected $table = 'users';
	protected $fillable = ['name', 'email', 'password'];
	public static $unguarded = true;
	protected $hidden = ['password', 'remember_token'];


	public static function register($data)
	{
		try {
			$user = User::create([

				'email' => $data['email'],

				'password' => HASH::make ($data['password'])
			]);
		}

		catch (Exeption $e)
		{
			return $e;
		}

		return $user;
	}


	public static function login($data)
	{
		if (Auth::attempt([ 'email' => $data['email'], 'password' => $data['password'] ], true))
		{
			return Auth::user();
		}
		else
		{
			return false;
		}
	}


}
