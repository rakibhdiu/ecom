<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

use function Pest\Laravel\delete;

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
     public function showCategory(){
           $data= category::all();
          return view('admin.show-category',compact('data'));
    }

    public function deleteCategory($id){
        $data =category::find($id);
        $data->delete();
        return redirect()->route('show-category')->with('message','category deleted successfully');

    }
    public function product(){
        $category=category::all();
        return view('admin.add-product',compact('category'));
    }

    public function addProduct(Request $request){

        $request->validate([
            'title' => 'required|string|max:255',
            'long_description' => 'required|string',
            'price' => 'required|numeric',
            'discount_price' => 'nullable|numeric',
            'stock' => 'required|integer',
            'star' => 'nullable|numeric|between:0,5',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|integer|exists:categories,id', // Assuming a categories table exists
            
        ]);

        $image = $request->file('image');
        $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('img'), $image_name);
        $image_url = 'img/' . $image_name;

        product::insert([
            'title'=>$request->title,
            'description'=>$request->long_description,
            'price'=>$request->price,
            'discount_price'=>$request->discount_price,
            'stock'=>$request->stock,
            'star'=>$request->star,
            'image'=>$image_url,
            'category_id' => $request->category_id,
           
            ]);

            return redirect()->back()->with('success', 'Product added successfully!');
        
    }

    public function showProduct(){
        $product=product::all();
        return view('admin.show-product',compact('product'));

    }
    
}
