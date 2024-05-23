<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/addnewbook', function () {
//     return view('book.addbook');
// });


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/Adashboard', [AdminController::class, 'index']);
// book add route
// this route for call the controller function
Route::post('/add', [BookController::class, 'addbook'])->name('addbook');  
// this route for viewpage
Route::view('newbook','/book.addbook');
// this route for viewpage
Route::get('/show', [AdminController::class, 'showbook'])->name('Adashboard');

// add category
Route::post('/addbookcat', [BookController::class, 'bookcategory'])->name('addcat');
Route::view('newbookcat','/book.addcat');
Route::get('/showcat', [AdminController::class, 'showcat'])->name('showcat');
Route::get('/showuser', [AdminController::class, 'showalluser'])->name('showuser');
// this route use for delete book as the id
Route::get('/delete/{id}', [BookController::class, 'delete'])->name('delete');

// Route::get('/show', [BookController::class, 'showbook'])->name('Adashboard');
// Route::get('/show', [AdminController::class, 'showbook'])->name('Adashboard');
// Route::get('/showcat', [BookController::class, 'showbookcat'])->name('Adashboard');
Route::get('/showuser', [UserController::class, 'Ushowbook'])->name('dashboard');
Route::get('/request/{id}', [BookController::class, 'request']);




