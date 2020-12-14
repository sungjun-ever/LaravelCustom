<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;


class LoginController extends Controller
{

    public function registerIndex(){
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validation = $request -> validate([
            'userId' => 'required|min:6|max:12|unique:users|string',
            'password' => 'required|min:10|max:16|confirmed',
            'nickname' => 'required|min:2|max:10|unique:users',
            'email' => 'required|email|unique:users',
            'tel' => 'required|min:11|max:11|unique:users'
        ]);

        User::create([
            'userId' => $validation['userId'],
            'password' => Hash::make($validation['password']),
            'nickname' => $validation['nickname'],
            'email' => $validation['email'],
            'tel' => $validation['tel']
        ]);

        return redirect('/');

    }

    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        $validation = $request -> validate([
            'userId' => 'required',
            'password' => 'required',
        ]);

        $remember = $request -> input('remember');

        if(Auth::attempt($validation, $remember)){
            return redirect()->route('main');

        } else{
            return redirect()->back();
        }
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('main');
    }

    public function updateUser(){
        return view('auth/updateUser');
    }



    public function update(Request $request){
        $validate = $request -> validate([
            'password' => 'required|confirmed|min:10|max:16|',
        ]);

        $same = Hash::check($validate['password'], auth() -> user() -> password);
        if ($same) {
            return redirect() -> back() -> with('message', '이전 비밀번호는 사용할 수 없습니다.');
        }
        $userDetails = Auth::user();

        $user = User::find($userDetails -> id);
        $user -> password = Hash::make($validate['password']);
        $user -> save();

        Auth::logout();
        return redirect() -> route('main');
    }
}
