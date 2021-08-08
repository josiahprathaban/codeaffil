<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    //Add categories
    public function addCategorySubmit(Request $request){
        $validated = $request->validate([
            'category_name' => 'required'
        ]);

        DB::table('categories')->insert([
            'name'=> $request->category_name
        ]);
        return back()->with('c_added','Category has been added successfully!');
    }

    //Get All categories with search
    public function getCategories(Request $request){
$search = $request->search;
if(isset($search)){
    $categories = DB::table('subcategories')
    ->select('categories.*',DB::raw('count(products.id) as total_products'), DB::raw('sum(user_product_logs.no_of_views) as total_views'), DB::raw('SUM(user_product_logs.no_of_clicks) as total_clicks'),DB::raw('count(subcategories.category_id) as total_subcategories'), )
    ->rightJoin('categories','categories.id', '=', 'subcategories.category_id')
    ->leftJoin('products','products.subcategory_id', '=', 'subcategories.id')
    ->leftJoin('user_product_logs','user_product_logs.product_id', '=', 'products.id')
    ->where('categories.name', 'LIKE', "%{$search}%")
    ->groupBy('categories.id')
    ->orderBy('categories.id')
    ->paginate(10);

return view('admin.categories',compact('categories','search'));
}else{
    $categories = DB::table('subcategories')
    ->select('categories.*',DB::raw('count(products.id) as total_products'), DB::raw('sum(user_product_logs.no_of_views) as total_views'), DB::raw('SUM(user_product_logs.no_of_clicks) as total_clicks'),DB::raw('count(subcategories.category_id) as total_subcategories'), )
    ->rightJoin('categories','categories.id', '=', 'subcategories.category_id')
    ->leftJoin('products','products.subcategory_id', '=', 'subcategories.id')
    ->leftJoin('user_product_logs','user_product_logs.product_id', '=', 'products.id')
    ->groupBy('categories.id')
    ->orderBy('categories.id')
    ->paginate(10);

return view('admin.categories',compact('categories'));
}
       
    }

    //Update Categories
    public function updateCategory(Request $request){
        $validated = $request->validate([
            'category_name' => 'required'
        ]);

        DB::table('categories')->where('id', $request->id)->update([
            'name'=> $request->brand_name
        ]);
        return back()->with('c_updated','Category has been updated successfully!');
    }
}
