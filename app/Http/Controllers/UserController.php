<?php namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Auth;


class UserController extends Controller
{

    public function register(Request $request)
    {
        $data = $request->all();

        $rules = [
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|confirmed',
            'password_confirmation' => 'required|min:5'

        ];
        $val = Validator::make($data, $rules);
        if ($val->fails()) {
            $errors = $val->messages()->toArray();
            return view('errors')->with('errors', $errors);
        }

        $user = User::register($data);

        if (!$user) {
            return 'Ошибка авторизации';
        } else {
            return redirect('main');
        }

    }

    public function login(Request $request)
    {
        $data = $request->all();
        $rules = [
            'email' => 'required|email',
            'password' => 'required|min:5'

        ];
        $val = Validator::make($data, $rules);
        if ($val->fails()) {
            $errors = $val->messages()->toArray();
            return view('errors')->with('errors', $errors);
        }
        $user = User::login($data);

        // dd($user);

        if (!$user) {
            return 'Пользователь не авторизован';
        } else {
            return redirect('/');
        }

    }

}

