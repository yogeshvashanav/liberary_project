<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // public function showbook(){
    //     $books= DB::table('books')->get();
    //     // dd($books);
    //     return view('Adashboard',['data' => $books]);
    //     // return view("blog", ["posts"=>$posts]);


    // }
    // public function Urequest(){
    //     $books= DB::table('books')->get();
    //     // dd($books);
    //     return view('dashboard',['data' => $books]);
    //     // return view("blog", ["posts"=>$posts]);

    // }
    // }

    // public function addbook(){
    // $book = DB::table('books') 
    //                   ->insert([
    //                     'title' => 'Rich Dad Poor dad',
    //                     'author' => 'Robert T. Kiyosaki',
    //                     'code' => '023',
    //                     'availability' => '',
    //                     'category_id' => '',
    //                 ]);
    //                   return redirect('/showbook');

    //                   if($book){
    //                   echo "<h1>data successfully added.</h1>";
    //                   }else{
    //                     echo "<h1>data not added.</h1>";
    //                   }
    //                 }

                           
                    
                     public function bookcategory(){
                        $book = DB::table('categories')
                                                ->insert([
                                                    'title' => 'Aspirant'
                                                ]); 
                                                if($book){
                                                    echo "<h1>data successfully added.</h1>";
                                                    }else{
                                                      echo "<h1>data not added.</h1>";
                                                      }
                                    }

                    //  public function showbook(){
                    //     $book = DB::table('books')->get();
                    //     return $book;
                    //  }

}