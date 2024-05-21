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
    //     // dd($books);
         return view('Adashboard',['data' => $books]);
    //     // return view("blog", ["posts"=>$posts]);



     }

     public function deletebook( string $id){
        $book = DB::table('books') 
                           ->where('id', '$id')->get();
                           $book->delete();
        // redirect( 'back');
         return redirect()->back();
        
          }     
}