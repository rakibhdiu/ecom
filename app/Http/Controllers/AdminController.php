<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        return view('admin.dashboard');
    }

    public function category(){
        return view('admin.add-category');
    }

    public function addCategory(Request $request){
        $request->validate([
            'category_name' => 'required|string|max:255',
        ]);

        category::insert([
            'category_name' => $request->category_name
        ]);
        return redirect()->back()->with('message','category added successfully');
    }

    
    
}
