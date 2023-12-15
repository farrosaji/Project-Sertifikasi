<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\sportsequip;
use App\Models\User;
use App\Models\RentLogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class EquipRentController extends Controller
{
    public function index()
    {
        $users = User::where('id', '!=', '1')
                    ->where('status', '!=', 'inactive')
                    ->get();
        $sportsequip = sportsequip::all();

        return view('equip-rent', ['users' => $users, 'sportsequip' => $sportsequip]);
    }

    // public function rent(Request $request)
    // {
    //     $request['rent_date'] = Carbon::now()->toDateString();
    //     $request['return_date'] = Carbon::now()->addDay(3)->toDateString();
        
    //     $sportsequip = sportsequip::findOrFail($request->equip_id)->only('status');

    //     if ($sportsequip['status'] != 'In stock') {

    //         Session::flash('message', 'equipment is not available');
    //         Session::flash('alert-class', 'alert-danger');
    //         return redirect('equip-rent');

    //     } else {

    //         $count = RentLogs::where('user_id', $request->user_id)
    //                     ->where('actual_return_date', null)
    //                     ->count();

    //         if ($count >= 3) {

    //             Session::flash('message', 'A user cannot rent more than 3 equipment');
    //             Session::flash('alert-class', 'alert-danger');
    //             return redirect('equip-rent');

    //         } else {

    //             try {
    //                 DB::beginTransaction();
    
    //                 //INSERT to rent_logs table
    //                 RentLogs::create($request->all());
        
                    
    //                 $sportsequip = sportsequip::findOrFail($request->equip_id);
    //                 $sportsequip->status = 'Not available';
    //                 $sportsequip->save();
    //                 DB::commit();
    
    //                 Session::flash('message', 'The equipment has been rented. Thank you!');
    //                 Session::flash('alert-class', 'alert-success');
    //                 return redirect('equip-rent');
    
    //             } catch (\Throwable $th) {
    //                 DB::rollBack();
    
    //             }

    //         }

    //     }
        
    // }

//     public function return()
//     {
//         $users = User::where('id', '!=', '1')
//                 ->where('status', '!=', 'inactive')
//                 ->get();

//         $books = Book::all();

//         return view('book-return', ['users' => $users, 'books' => $books]);
//     }

//     public function returnBook(Request $request)
//     {
//         $rentlogs = RentLogs::where('user_id', $request->user_id)
//                     ->where('book_id', $request->book_id)
//                     ->where('actual_return_date', null);
        
//         $rentData = $rentlogs->first();
//         $countData = $rentlogs->count();

//         if ($countData == 1) {
            
//             $rentData->actual_return_date = Carbon::now()->toDateString();
//             $rentData->save();

//             Session::flash('message', 'The book has been returned');
//             Session::flash('alert-class', 'alert-success');
//             return redirect('book-return');

//         } else {

//             Session::flash('message', 'Return book process is failed');
//             Session::flash('alert-class', 'alert-danger');
//             return redirect('book-return');
//         }
//     }
// }
}