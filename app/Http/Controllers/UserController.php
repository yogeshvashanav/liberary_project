<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Ushowbook(){
        $books= DB::table('books')->get();
       // dd($books);
        return view('dashboard',['data' => $books]);
       // return view("blog", ["posts"=>$posts]);


    }
}
