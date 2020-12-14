<?php

namespace App\Http\Controllers;

use App\Models\Free;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FreeController extends Controller
{
    public function index(){
        return view('frees.index');
    }

    public function create(){
        return view('frees.create');
    }

    public function store(Request $request){
        $validation = $request -> validate([
           'title' => 'required|max:100',
           'story' => 'required'
        ]);

//        $free = DB::table('frees')->insert([
//            'title' => $validation['title'],
//            'story' => $validation['story']
//        ]);
        $free = Free::create([
            'title' => $validation['title'],
            'story' => $validation['story']
        ]);

        return redirect('/frees');
    }
}
