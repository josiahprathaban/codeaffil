<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\subcategory;

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
        $id = $request->subcategory_id;
        $name = $request->subcategory_name;
        $image = $request->file('image');
        $imageName="assets/images/subcategory/".$name.'.'.$image->extension();
        $image->move("assets/images/subcategory",$imageName);

        $subcategory = new SubCategory();
        $subcategory -> category_id = $id;
        $subcategory -> name = $name;
        $subcategory -> image = $imageName;
        $subcategory ->save();
        return back()->with('sc_added','Subcategories has been added successfully!');

    }

    public function updateSubCategory(Request $request)
    {
        $id = $request->subcategory_id;
        $name = $request->subcategory_name;
        $image = $request->file('image');

        if($image==null){
            $subcategory = subcategory::find($request->subcategory_id);
            $subcategory ->name = $name;
            $subcategory ->save();
            return back()->with('sc_updated','Subcategories has been updated successfully!');
        }
        else{
        $imageName="assets/images/subcategory/".$name.'.'.$image->extension();
        $image->move("assets/images/subcategory",$imageName);
        

        $subcategory = subcategory::find($request->subcategory_id);
        $subcategory ->name = $name;
        $subcategory ->image = $imageName;
        $subcategory ->save();
        return back()->with('sc_updated','Subcategories has been updated successfully!');

        }
    }

    //Get All subcategories
    public function getSubCategories(){
        $subcategories = DB::table('subcategories')->get();
        $categories = DB::table('categories')->get();
        return view('admin.subcategories',compact('subcategories','categories'));
    }


    //delete categories
    public function deleteSubCategory($id){
       $subcategories = DB::table('subcategories')->where('id',$id)->cascade();

        // $subcategories =DB::table('subcategories')
        // ->Join('subcategories','subcategories.id', '=','product.subcategory_id')
        // ->where('subcategories.id', $id); 
        // DB::table('subcategories.id')->where('subcategories', $id)->delete();                           
        // $subcategories->delete();

        // $orders =DB::table('products')
        // ->join('subcategories', 'products.subcategory_id', '=', 'subcategories.id')
        // ->join('subcategories', 'products.subcategory_id', '=', 'subcategories.id')
        // ->where('subcategories.id', $id)
        // ->delete();

    }

    // public function updateSubCategory(Request $request){
    //     DB::table('subcategories')->where('id', $request->id)->update([
    //         'name'=> $request->subcategory_name
    //     ]);
    //     return back()->with('sc_updated','Subcategories has been updated successfully!');
    // }
}
