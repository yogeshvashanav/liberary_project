<?php

// namespace App\Http\Controllers;

// use App\Models\Borrow;
// use Illuminate\Http\Request;

// class RequestController extends Controller
// {
//     public function index()
//     {
//         $borrows = Borrow::with('book')->get();
//         return view('requests.index', compact('borrows'));
//     }

//     public function approve($id)
//     {
//         $borrow = Borrow::find($id);
//         $borrow->status = 'approved';
//         $borrow->save();
//         return redirect('/requests')->with('success', 'Request approved successfully');
//     }

//     public function reject($id)
//     {
//         $borrow = Borrow::find($id);
//         $borrow->status = 'rejected';
//         $borrow->save();
//         return redirect('/requests')->with('success', 'Request rejected successfully');
//     }
// }

// namespace App\Http\Controllers;

// use App\Models\Borrow;
// use Illuminate\Http\Request;

// class RequestController extends Controller
// {
//     public function index()
//     {
//         $borrows = Borrow::with('book')->get();
//         return view('requests.index', compact('borrows'));
//     }

//     public function approve($id)
//     {
//         $borrow = Borrow::find($id);
//         $borrow->status = 'approved';
//         $borrow->save();
//         return redirect('/requests')->with('success', 'Request approved successfully');
//     }

//     public function reject($id)
//     {
//         $borrow = Borrow::find($id);
//         $borrow->status = 'rejected';
//         $borrow->save();
//         return redirect('/requests')->with('success', 'Request rejected successfully');
//     }
// }

