<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    //Add Brand
    public function addBrandSubmit(Request $request){
        DB::table('brands')->insert([
            'name'=> $request->brand_name
        ]);
        return back()->with('b_added','Brand has been added successfully!');
    }

    //Get All Brands
    public function getBrands(){
        $brands = DB::table('brands')->get();
        return view('admin.brands',compact('brands'));
    }

    //delete Brands
    public function deleteBrand($id){
        $brand = DB::table('brands')->where('id',$id)->delete();
        return back()->with('b_deleted','brand has been deleted successfully!');
    }

    public function updateBrand(Request $request){
        DB::table('brands')->where('id', $request->id)->update([
            'name'=> $request->brand_name
        ]);
        return back()->with('b_updated','Brand has been updated successfully!');
    }

}
