<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use illuminate\support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function index(){
        if (Auth::id()){
            $usertype=Auth()->user()->usertype;
          

            if($usertype=='user'){
                return redirect('showuser');
            }
            elseif($usertype =='admin'){
                return redirect('show');
            }
            else{
                return redirect()->back()->with('message', 'Please register yourself first.');

            }
        }
    }
  
     public function showbook(){
         $books= DB::table('books')->get();
         $users = DB::table('users')->get();

        //  dd($users);
    //     // dd($books);
    return view('Adashboard', ['data' => $books, 'users' => $users]);
    //     // return view("blog", ["posts"=>$posts]);



     }


     public function showbookcat(){
        $bookcat= DB::table('categories')->get();
                        //   dd($bookcat);
       return view('Adashboard',['data' => $bookcat]);

       }

       
       public function showalluser(){
        $users = DB::table('users')->get();
        return view('Adashboard', ['data' => $users]);
    }
    
//      public function showbook(){
//         $books= DB::table('')->get();
//    //     // dd($books);
//         return view('Adashboard',['data' => $books]);

//      }
}