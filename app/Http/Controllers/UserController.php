<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class UserController extends Controller
{

    /**
     * @return array
     */
    public function index() {
       $index =  DB::table('users')->get();
       return view('welcome')->with('index', $index);
    }

//    public function test() {
//
//        return view('post.create');
//    }
}
