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
// add subcategory
    public function addSubCategorySubmit(Request $request)
    {
        $validated = $request->validate([
            'subcategory_id' => 'required',
            'subcategory_name' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg',
        ]);

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
        $validated = $request->validate([
            'category_id' => 'required',
            'subcategory_name' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg',
        ]);

        $id = $request->subcategory_id;
        $category_id = $request->category_id;
        $name = $request->subcategory_name;
        $image = $request->file('image');

        if($image==null){
            $subcategory = subcategory::find($request->subcategory_id);
            $subcategory ->name = $name;
            $subcategory ->category_id =$category_id;
            $subcategory ->save();
            return back()->with('sc_updated','Subcategories has been updated successfully!');
        }
        else{
        $imageName="assets/images/subcategory/".$name.'.'.$image->extension();
        $image->move("assets/images/subcategory",$imageName);
        

        $subcategory = subcategory::find($request->subcategory_id);
        $subcategory ->name = $name;
        $subcategory ->category_id =$category_id;
        $subcategory ->image = $imageName;
        $subcategory ->save();
        return back()->with('sc_updated','Subcategories has been updated successfully!');

        }
    }

    //Get All subcategories
    public function getSubCategories(Request $request){
        $search = $request->search;

        if(isset($search)){
            $subcategories = DB::table('subcategories')
            ->select('subcategories.*','categories.name as category_name',DB::raw('count(products.id) as total_products'), DB::raw('sum(user_product_logs.no_of_views) as total_views'), DB::raw('SUM(user_product_logs.no_of_clicks) as total_clicks'), )
            ->leftJoin('products','products.subcategory_id', '=', 'subcategories.id')
            ->leftJoin('categories','categories.id', '=', 'subcategories.category_id')
            ->leftJoin('user_product_logs','user_product_logs.product_id', '=', 'products.id')
            ->where('subcategories.name', 'LIKE', "%{$search}%")
            ->groupBy('subcategories.id')
            ->orderBy('subcategories.id')
            ->paginate(10);
        $categories = DB::table('categories')->get();
        return view('admin.subcategories',compact('subcategories','categories','search'));
        }
        else{
            $subcategories = DB::table('subcategories')
            ->select('subcategories.*','categories.name as category_name',DB::raw('count(products.id) as total_products'), DB::raw('sum(user_product_logs.no_of_views) as total_views'), DB::raw('SUM(user_product_logs.no_of_clicks) as total_clicks'), )
            ->leftJoin('products','products.subcategory_id', '=', 'subcategories.id')
            ->leftJoin('categories','categories.id', '=', 'subcategories.category_id')
            ->leftJoin('user_product_logs','user_product_logs.product_id', '=', 'products.id')
            ->groupBy('subcategories.id')
            ->orderBy('subcategories.id')
            ->paginate(10);
        $categories = DB::table('categories')->get();
        return view('admin.subcategories',compact('subcategories','categories'));
        }
        
    }

}
