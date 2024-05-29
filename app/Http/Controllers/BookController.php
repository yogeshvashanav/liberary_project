<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;
use \App\Models\Borrow;
Use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Book;

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

    public function addbook(Request $req){
        
             $book = DB::table('books') 
                      ->insert([
                        'title' => $req->title,
                        'author' => $req->author,
                        'code' => $req->code,
                        'availability' =>$req->availability,
                        'category_id' =>$req->category_id,
                    ]);
                    //   return redirect('show');

                      if($book){
                      echo "<h1>data successfully added.</h1>";
                      return redirect('show');
                      }else{
                        echo "<h1>data not added.</h1>";
                      }
                    }

                           
                    
                     public function bookcategory(Request $req){
                        $book = DB::table('categories')
                                                ->insert([
                                                    'title' => $req->title,
                                                ]); 
                                                if($book){
                                                    echo "<h1>data successfully added.</h1>";
                                                    }else{
                                                      echo "<h1>data not added.</h1>";
                                                      }
                                    }

                    //  public function showbookcat(){
                    //  $books= DB::table('categories')->get();
                    //                    dd($books);
                    // return view('Adashboard',['cat' => $books]);

                    // }

                    public function delete($id) {
                        $deleted = DB::table('books')->where('id', $id)->delete();
                        return redirect()->back();
                    }
                        // delete category
                    public function deletecate($id) {
                      $delete = DB::table('categories')->where('id', $id)->delete();
                      return redirect()->back();
                  }
                  public function deletereq($id) {
                    $delete = DB::table('borrows')->where('id', $id)->delete();
                    return redirect()->back();
                  }

                    public function Borrow_book($id)
                    {
                        // Retrieve the book from the database using the ID
                        $data = DB::table('books')->find($id);
                        $available = $data->availability;
                    
                        if ($available >= 1) {
                            if (Auth::id()) {
                                $user_id = Auth::user()->id;
                                $borrow = new Borrow;
                    
                                $borrow->book_id = $id;
                                $borrow->user_id = $user_id;

                                $borrow->status = 'Applied';
                    
                                $borrow->save();
                    
                                return redirect()->back()->with('message', 'Your Borrow request is sent to Admin');
                            } else {
                                return redirect()->back()->with('message', 'You need to be logged in to borrow a book');
                            }
                        } else {
                            return redirect()->back()->with('message', 'Book Not Available');
                        }
                    }

                    
                    public function approve_book($id) {
                      // Find the borrow record by ID
                      $borrow = Borrow::find($id);
                  
                      if (!$borrow) {
                          return redirect()->back()->withErrors(['error' => 'Borrow record not found']);
                      }
                  
                      // Approve the borrow request
                      $borrow->status = 'Approved';
                      $borrow->save();
                  
                      // Get the book ID from the borrow record
                      $bookid = $borrow->book_id;
                  
                      // Find the book by ID
                      $book = Book::find($bookid);
                  
                      if (!$book) {
                          return redirect()->back()->withErrors(['error' => 'Book not found']);
                      }
                  
                      // Update the book's availability
                      $book->availability = (int)$book->availability - 1;
                  
                      // Save the updated book information
                      $book->save();
                  
                      // Redirect back with a success message
                      return redirect()->back()->with('success', 'Book approved successfully');
                  }
                  
                    
}