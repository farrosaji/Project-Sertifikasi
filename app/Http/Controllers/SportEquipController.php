<?php

namespace App\Http\Controllers;

use App\Models\sportsequip;
use App\Models\Category;
use Illuminate\Http\Request;

class SportEquipController extends Controller
{


    public function index(Request $request)
    {
        $sportsequip = sportsequip::all();
        return view('sportsequip', ['sportsequip' => $sportsequip]);
    }
    public function add()
    {
        $categories = Category::all();
        return view('equip-add',["categories"=> $categories]);
    }
       
    

    // public function add()
    // {
    //     //for Many to Many relationship with Books table: to display Category list 
    //     //at book-add page
    //     $categories = sportsequip::all();
    //     return view('equip-add', ['categories' => $categories]);
    // }

    public function store(request $request)
    {
        $validated = $request->validate([
            'equip_code' => 'required|unique:sportsequip|max:100',
            'title' => 'required|max:255',

        ]);

        $newName = ""    ;
        if ($request->file('image')) {
            
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->title.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('cover', $newName);
        }

        //cover->must same with column name in DB
        $request['cover'] = $newName;
        $sportsequip = sportsequip::create($request->all());
        $sportsequip ->categories()->sync($request->categories);
        return redirect('sportsequip')->with('status', 'New Equipment added successfully');
    }

    public function edit($slug)
    {
        $sportsequip = sportsequip::where('slug', $slug)->first();
        $categories = Category::all();
        return view('equip-edit', ['categories' => $categories, 'sportsequip' => $sportsequip]);
    }

    public function update(Request $request, $slug)
    {

        if ($request->file('image')) {
            
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->title.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('cover', $newName);
            $request['cover'] = $newName;
        }

        $sportsequip = sportsequip::where('slug', $slug)->first();
        $sportsequip->update($request->all());

        if ($request->categories) {
            $sportsequip->categories()->sync($request->categories);
        }

        return redirect('sportsequip')->with('status', 'Equipment updated successfully');
    }

    public function delete($slug)
    {
        $sportsequip = sportsequip::where('slug', $slug)->first();
        return view('equip-delete', ['sportsequip' => $sportsequip]);
    }
    public function destroy($slug)
    {
        $sportsequip = sportsequip::where('slug', $slug)->first();
        $sportsequip->delete();
        return redirect('sportsequip')->with('status', 'Equipment deleted successfully');
    }

    public function deletedequip()
    {
        $deletedequip = sportsequip::onlyTrashed()->get();
        return view('equip-deleted-list', ['deletedEquip' => $deletedequip]);
    }

    public function restore($slug)
    {
        $sportsequip = sportsequip::withTrashed()->where('slug', $slug)->first();
        $sportsequip->restore();
        return redirect('sportsequip')->with('status', 'Equipment has been restored');
    }
}
// // Ini adalah contoh penggunaan denganTrashed() pada objek query
// $sportsequips = sportsequip::withTrashed()->get();

// // Ini adalah contoh penggunaan withTrashed() pada instance model
// $sportsequip = sportsequip::find($id);
// $sportsequip->withTrashed(); // Ini akan menghasilkan kesalahan
