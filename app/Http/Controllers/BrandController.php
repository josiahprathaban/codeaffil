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
                ->select('brands.*', DB::raw('count(products.id) as total_products'),)
                ->leftJoin('products', 'products.brand_id', '=', 'brands.id')
                ->where('brands.name', 'LIKE', "%{$search}%")
                ->groupBy('brands.id')
                ->orderBy('brands.id')
                ->paginate(10);

            return view('admin.brands', compact('brands', 'search'));
        } else {
            $brands = DB::table('brands')
                ->select('brands.*', DB::raw('count(products.id) as total_products'),)
                ->leftJoin('products', 'products.brand_id', '=', 'brands.id')
                ->groupBy('brands.id')
                ->orderBy('brands.id')
                ->paginate(10);

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
