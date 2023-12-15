<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\sportsequip;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(request $request)
    {

        $categories = Category::all();

        if ($request->category || $request->title) {
            
            $sportsequip= sportsequip::where('title', 'like', '%'.$request->title.'%')
                        ->orWhereHas('categories', function($q) use($request) {
                            $q->where('categories.id', $request->category);

                        })->get();
            

        } else {

            $sportsequip = sportsequip::all();
        }

        return view('equip-list', ['sportsequip' =>$sportsequip , 'categories' => $categories]);
        // return view('equip-list');
    }
}
