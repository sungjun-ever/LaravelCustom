<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class userMenuController extends Controller
{
    public function index(){
        return view('usermenu.userMenu');
    }


}
