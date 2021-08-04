<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Hot_deals;

class HotDealsController extends Controller
{

    //Get All Products
    public function getHotDeals()
    {
        $hotdeals = DB::table('hot_deals')->get();
        $products = DB::table('products')->get();
        return view('admin.hot_deals', compact('hotdeals', 'products'));
    }
    public function addHotDealSubmit(Request $request)
    {
        $id = $request->product_id;
        $name = $request->hotdeal_name;
        $start_date = $request->start_date;
        $end_date = $request ->end_date;

        $hotdeal = new Hot_deals();
        $hotdeal->product_id = $id;
        $hotdeal->deal_title = $name;
        $hotdeal->deal_starts = $start_date;
        $hotdeal ->deal_ends = $end_date;
        $hotdeal->save();
        return back()->with('hd_added', 'Hotdeal has been added successfully!');
    }

    // public function updateSubCategory(Request $request)
    // {
    //     $id = $request->subcategory_id;
    //     $name = $request->subcategory_name;
    //     $image = $request->file('image');

    //     if($image==null){
    //         $subcategory = subcategory::find($request->subcategory_id);
    //         $subcategory ->name = $name;
    //         $subcategory ->save();
    //         return back()->with('sc_updated','Subcategories has been updated successfully!');
    //     }
    //     else{
    //     $imageName="assets/images/subcategory/".$name.'.'.$image->extension();
    //     $image->move("assets/images/subcategory",$imageName);


    //     $subcategory = subcategory::find($request->subcategory_id);
    //     $subcategory ->name = $name;
    //     $subcategory ->image = $imageName;
    //     $subcategory ->save();
    //     return back()->with('sc_updated','Subcategories has been updated successfully!');

    //     }
    // }

    //Get All subcategories
    public function getSubCategories()
    {
        $subcategories = DB::table('subcategories')->get();
        $categories = DB::table('categories')->get();
        return view('admin.subcategories', compact('subcategories', 'categories'));
    }
}
