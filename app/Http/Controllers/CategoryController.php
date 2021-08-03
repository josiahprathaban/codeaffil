<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    //Add categories
    public function addCategorySubmit(Request $request){
        DB::table('categories')->insert([
            'name'=> $request->category_name
        ]);
        return back()->with('c_added','Category has been added successfully!');
    }

    //Get All categories
    public function getCategories(){
        $categories = DB::table('categories')->get();
        return view('admin.categories',compact('categories'));
    }

    //delete categories
    public function deleteCategory($id){
        $brand = DB::table('categories')->where('id',$id)->delete();
        return back()->with('c_deleted','Category has been deleted successfully!');
    }

    public function updateCategory(Request $request){
        DB::table('categories')->where('id', $request->id)->update([
            'name'=> $request->brand_name
        ]);
        return back()->with('c_updated','Category has been updated successfully!');
    }
}
