<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\SubCategory;

class SubCategoryController extends Controller
{
    //  //Add subcategories
    //  public function addSubCategorySubmit(Request $request){
    //     DB::table('subcategories')->insert([
    //         'name'=> $request->subcategory_name,
    //         'category_id'=>$request->subcategory_id,
    //         'image'=>$request->image
    //         $request->image->move(public_path('images'),$imageName);
    //     ]);
       
    //     return back()->with('sc_added','Subcategories has been added successfully!');
    // }

    public function addSubCategorySubmit(Request $request)
    {
        $name = $request->subcategory_name;
        $image = $request->file('file');
        $imageName=$name.'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

        $subcategory = new SubCategory();
        $subcategory -> name = $subcategory_name;
        $subcategory ->image = $imageName;
        $subcategory ->save();
        return back()->with('sc_added','Subcategories has been added successfully!');

    }

    //Get All subcategories
    public function getSubCategories(){
        $subcategories = DB::table('subcategories')->get();
        $categories = DB::table('categories')->get();
        return view('admin.subcategories',compact('subcategories','categories'));
    }


    //delete categories
    public function deleteSubCategory($id){
        $subcategories = DB::table('subcategories')->where('id',$id)->delete();
        return back()->with('sc_deleted','Subcategories has been deleted successfully!');
    }

    public function updateSubCategory(Request $request){
        DB::table('subcategories')->where('id', $request->id)->update([
            'name'=> $request->subcategory_name
        ]);
        return back()->with('sc_updated','Subcategories has been updated successfully!');
    }
}
