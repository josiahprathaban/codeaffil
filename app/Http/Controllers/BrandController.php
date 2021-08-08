<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{

    //Add Brand
    public function addBrandSubmit(Request $request)
    {
        $validated = $request->validate([
            'brand_name' => 'required'
        ]);


        DB::table('brands')->insert([
            'name' => $request->brand_name
        ]);
        return back()->with('b_added', 'Brand has been added successfully!');
    }

    //Get All Brands and search brands
    public function getBrands(Request $request)
    {
        $search = $request->search;

        if (isset($search)) {
            $brands = DB::table('brands')
                ->select('brands.*', DB::raw('count(products.id) as total_products'), DB::raw('sum(user_product_logs.no_of_views) as total_views'), DB::raw('SUM(user_product_logs.no_of_clicks) as total_clicks'),)
                ->leftJoin('products', 'products.brand_id', '=', 'brands.id')
                ->leftJoin('user_product_logs', 'user_product_logs.product_id', '=', 'products.id')
                ->where('brands.name', 'LIKE', "%{$search}%")
                ->groupBy('brands.id')
                ->orderBy('brands.id')
                ->paginate(15);

            return view('admin.brands', compact('brands', 'search'));
        } else {
            $brands = DB::table('brands')
                ->select('brands.*', DB::raw('count(products.id) as total_products'), DB::raw('sum(user_product_logs.no_of_views) as total_views'), DB::raw('SUM(user_product_logs.no_of_clicks) as total_clicks'),)
                ->leftJoin('products', 'products.brand_id', '=', 'brands.id')
                ->leftJoin('user_product_logs', 'user_product_logs.product_id', '=', 'products.id')
                ->groupBy('brands.id')
                ->orderBy('brands.id')
                ->paginate(15);

            return view('admin.brands', compact('brands'));
        }
    }

    public function updateBrand(Request $request)
    {
        $validated = $request->validate([
            'brand_name' => 'required'
        ]);
        DB::table('brands')->where('id', $request->id)->update([
            'name' => $request->brand_name
        ]);
        return back()->with('b_updated', 'Brand has been updated successfully!');
    }
}
